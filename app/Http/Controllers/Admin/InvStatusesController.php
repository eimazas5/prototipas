<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyInvStatusRequest;
use App\Http\Requests\StoreInvStatusRequest;
use App\Http\Requests\UpdateInvStatusRequest;
use App\InvStatus;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class InvStatusesController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('inv_status_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $invStatuses = InvStatus::all();

        return view('admin.invStatuses.index', compact('invStatuses'));
    }

    public function create()
    {
        abort_if(Gate::denies('inv_status_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.invStatuses.create');
    }

    public function store(StoreInvStatusRequest $request)
    {
        $invStatus = InvStatus::create($request->all());

        return redirect()->route('admin.inv-statuses.index');
    }

    public function edit(InvStatus $invStatus)
    {
        abort_if(Gate::denies('inv_status_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.invStatuses.edit', compact('invStatus'));
    }

    public function update(UpdateInvStatusRequest $request, InvStatus $invStatus)
    {
        $invStatus->update($request->all());

        return redirect()->route('admin.inv-statuses.index');
    }

    public function show(InvStatus $invStatus)
    {
        abort_if(Gate::denies('inv_status_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.invStatuses.show', compact('invStatus'));
    }

    public function destroy(InvStatus $invStatus)
    {
        abort_if(Gate::denies('inv_status_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $invStatus->delete();

        return back();
    }

    public function massDestroy(MassDestroyInvStatusRequest $request)
    {
        InvStatus::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
