<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroySaleRequest;
use App\Http\Requests\StoreSaleRequest;
use App\Http\Requests\UpdateSaleRequest;
use App\Sale;
use App\Worker;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SaleController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('sale_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $sales = Sale::all();

        return view('admin.sales.index', compact('sales'));
    }

    public function create()
    {
        abort_if(Gate::denies('sale_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $names = Worker::all()->pluck('first_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.sales.create', compact('names'));
    }

    public function store(StoreSaleRequest $request)
    {
        $sale = Sale::create($request->all());

        return redirect()->route('admin.sales.index');
    }

    public function edit(Sale $sale)
    {
        abort_if(Gate::denies('sale_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $names = Worker::all()->pluck('first_name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $sale->load('name');

        return view('admin.sales.edit', compact('names', 'sale'));
    }

    public function update(UpdateSaleRequest $request, Sale $sale)
    {
        $sale->update($request->all());

        return redirect()->route('admin.sales.index');
    }

    public function show(Sale $sale)
    {
        abort_if(Gate::denies('sale_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $sale->load('name');

        return view('admin.sales.show', compact('sale'));
    }

    public function destroy(Sale $sale)
    {
        abort_if(Gate::denies('sale_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $sale->delete();

        return back();
    }

    public function massDestroy(MassDestroySaleRequest $request)
    {
        Sale::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
