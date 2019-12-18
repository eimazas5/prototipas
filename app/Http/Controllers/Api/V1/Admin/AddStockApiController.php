<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\AddStock;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAddStockRequest;
use App\Http\Requests\UpdateAddStockRequest;
use App\Http\Resources\Admin\AddStockResource;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AddStockApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('add_stock_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new AddStockResource(AddStock::with(['name'])->get());
    }

    public function store(StoreAddStockRequest $request)
    {
        $addStock = AddStock::create($request->all());

        return (new AddStockResource($addStock))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(AddStock $addStock)
    {
        abort_if(Gate::denies('add_stock_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new AddStockResource($addStock->load(['name']));
    }

    public function update(UpdateAddStockRequest $request, AddStock $addStock)
    {
        $addStock->update($request->all());

        return (new AddStockResource($addStock))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(AddStock $addStock)
    {
        abort_if(Gate::denies('add_stock_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $addStock->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
