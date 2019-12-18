<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyNewProductRequest;
use App\Http\Requests\StoreNewProductRequest;
use App\Http\Requests\UpdateNewProductRequest;
use App\NewProduct;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class NewProductController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('new_product_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $newProducts = NewProduct::all();

        return view('admin.newProducts.index', compact('newProducts'));
    }

    public function create()
    {
        abort_if(Gate::denies('new_product_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.newProducts.create');
    }

    public function store(StoreNewProductRequest $request)
    {
        $newProduct = NewProduct::create($request->all());

        return redirect()->route('admin.new-products.index');
    }

    public function edit(NewProduct $newProduct)
    {
        abort_if(Gate::denies('new_product_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.newProducts.edit', compact('newProduct'));
    }

    public function update(UpdateNewProductRequest $request, NewProduct $newProduct)
    {
        $newProduct->update($request->all());

        return redirect()->route('admin.new-products.index');
    }

    public function show(NewProduct $newProduct)
    {
        abort_if(Gate::denies('new_product_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $newProduct->load('nameAddStocks');

        return view('admin.newProducts.show', compact('newProduct'));
    }

    public function destroy(NewProduct $newProduct)
    {
        abort_if(Gate::denies('new_product_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $newProduct->delete();

        return back();
    }

    public function massDestroy(MassDestroyNewProductRequest $request)
    {
        NewProduct::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
