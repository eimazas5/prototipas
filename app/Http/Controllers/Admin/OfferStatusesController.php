<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyOfferStatusRequest;
use App\Http\Requests\StoreOfferStatusRequest;
use App\Http\Requests\UpdateOfferStatusRequest;
use App\OfferStatus;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class OfferStatusesController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('offer_status_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $offerStatuses = OfferStatus::all();

        return view('admin.offerStatuses.index', compact('offerStatuses'));
    }

    public function create()
    {
        abort_if(Gate::denies('offer_status_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.offerStatuses.create');
    }

    public function store(StoreOfferStatusRequest $request)
    {
        $offerStatus = OfferStatus::create($request->all());

        return redirect()->route('admin.offer-statuses.index');
    }

    public function edit(OfferStatus $offerStatus)
    {
        abort_if(Gate::denies('offer_status_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.offerStatuses.edit', compact('offerStatus'));
    }

    public function update(UpdateOfferStatusRequest $request, OfferStatus $offerStatus)
    {
        $offerStatus->update($request->all());

        return redirect()->route('admin.offer-statuses.index');
    }

    public function show(OfferStatus $offerStatus)
    {
        abort_if(Gate::denies('offer_status_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.offerStatuses.show', compact('offerStatus'));
    }

    public function destroy(OfferStatus $offerStatus)
    {
        abort_if(Gate::denies('offer_status_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $offerStatus->delete();

        return back();
    }

    public function massDestroy(MassDestroyOfferStatusRequest $request)
    {
        OfferStatus::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
