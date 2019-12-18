<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreInvStatusRequest;
use App\Http\Requests\UpdateInvStatusRequest;
use App\Http\Resources\Admin\InvStatusResource;
use App\InvStatus;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class InvStatusesApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('inv_status_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new InvStatusResource(InvStatus::all());
    }

    public function store(StoreInvStatusRequest $request)
    {
        $invStatus = InvStatus::create($request->all());

        return (new InvStatusResource($invStatus))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(InvStatus $invStatus)
    {
        abort_if(Gate::denies('inv_status_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new InvStatusResource($invStatus);
    }

    public function update(UpdateInvStatusRequest $request, InvStatus $invStatus)
    {
        $invStatus->update($request->all());

        return (new InvStatusResource($invStatus))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(InvStatus $invStatus)
    {
        abort_if(Gate::denies('inv_status_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $invStatus->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
