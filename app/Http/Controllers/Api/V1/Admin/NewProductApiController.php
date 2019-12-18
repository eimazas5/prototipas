<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreNewProductRequest;
use App\Http\Requests\UpdateNewProductRequest;
use App\Http\Resources\Admin\NewProductResource;
use App\NewProduct;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class NewProductApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('new_product_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new NewProductResource(NewProduct::all());
    }

    public function store(StoreNewProductRequest $request)
    {
        $newProduct = NewProduct::create($request->all());

        return (new NewProductResource($newProduct))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(NewProduct $newProduct)
    {
        abort_if(Gate::denies('new_product_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new NewProductResource($newProduct);
    }

    public function update(UpdateNewProductRequest $request, NewProduct $newProduct)
    {
        $newProduct->update($request->all());

        return (new NewProductResource($newProduct))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(NewProduct $newProduct)
    {
        abort_if(Gate::denies('new_product_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $newProduct->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
