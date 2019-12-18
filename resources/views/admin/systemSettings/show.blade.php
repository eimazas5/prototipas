@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.systemSetting.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.system-settings.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.systemSetting.fields.id') }}
                        </th>
                        <td>
                            {{ $systemSetting->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.systemSetting.fields.company_name') }}
                        </th>
                        <td>
                            {{ $systemSetting->company_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.systemSetting.fields.vat_code') }}
                        </th>
                        <td>
                            {{ $systemSetting->vat_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.systemSetting.fields.company_code') }}
                        </th>
                        <td>
                            {{ $systemSetting->company_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.systemSetting.fields.logo') }}
                        </th>
                        <td>
                            {{ $systemSetting->logo }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.system-settings.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection