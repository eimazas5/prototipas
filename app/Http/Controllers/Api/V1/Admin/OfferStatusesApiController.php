<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreOfferStatusRequest;
use App\Http\Requests\UpdateOfferStatusRequest;
use App\Http\Resources\Admin\OfferStatusResource;
use App\OfferStatus;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class OfferStatusesApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('offer_status_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new OfferStatusResource(OfferStatus::all());
    }

    public function store(StoreOfferStatusRequest $request)
    {
        $offerStatus = OfferStatus::create($request->all());

        return (new OfferStatusResource($offerStatus))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(OfferStatus $offerStatus)
    {
        abort_if(Gate::denies('offer_status_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new OfferStatusResource($offerStatus);
    }

    public function update(UpdateOfferStatusRequest $request, OfferStatus $offerStatus)
    {
        $offerStatus->update($request->all());

        return (new OfferStatusResource($offerStatus))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(OfferStatus $offerStatus)
    {
        abort_if(Gate::denies('offer_status_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $offerStatus->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
