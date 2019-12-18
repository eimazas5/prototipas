@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.worker.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.workers.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.worker.fields.id') }}
                        </th>
                        <td>
                            {{ $worker->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.worker.fields.first_name') }}
                        </th>
                        <td>
                            {{ $worker->first_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.worker.fields.last_name') }}
                        </th>
                        <td>
                            {{ $worker->last_name }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.workers.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        {{ trans('global.relatedData') }}
    </div>
    <ul class="nav nav-tabs" role="tablist" id="relationship-tabs">
        <li class="nav-item">
            <a class="nav-link" href="#name_sales" role="tab" data-toggle="tab">
                {{ trans('cruds.sale.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="name_sales">
            @includeIf('admin.workers.relationships.nameSales', ['sales' => $worker->nameSales])
        </div>
    </div>
</div>

@endsection