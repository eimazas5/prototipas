<?php

namespace App\Http\Controllers\Admin;

use App\AddStock;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyAddStockRequest;
use App\Http\Requests\StoreAddStockRequest;
use App\Http\Requests\UpdateAddStockRequest;
use App\NewProduct;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AddStockController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('add_stock_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $addStocks = AddStock::all();

        return view('admin.addStocks.index', compact('addStocks'));
    }

    public function create()
    {
        abort_if(Gate::denies('add_stock_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $names = NewProduct::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.addStocks.create', compact('names'));
    }

    public function store(StoreAddStockRequest $request)
    {
        $addStock = AddStock::create($request->all());

        return redirect()->route('admin.add-stocks.index');
    }

    public function edit(AddStock $addStock)
    {
        abort_if(Gate::denies('add_stock_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $names = NewProduct::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $addStock->load('name');

        return view('admin.addStocks.edit', compact('names', 'addStock'));
    }

    public function update(UpdateAddStockRequest $request, AddStock $addStock)
    {
        $addStock->update($request->all());

        return redirect()->route('admin.add-stocks.index');
    }

    public function show(AddStock $addStock)
    {
        abort_if(Gate::denies('add_stock_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $addStock->load('name');

        return view('admin.addStocks.show', compact('addStock'));
    }

    public function destroy(AddStock $addStock)
    {
        abort_if(Gate::denies('add_stock_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $addStock->delete();

        return back();
    }

    public function massDestroy(MassDestroyAddStockRequest $request)
    {
        AddStock::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
