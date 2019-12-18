@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.systemSetting.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.system-settings.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="company_name">{{ trans('cruds.systemSetting.fields.company_name') }}</label>
                <input class="form-control {{ $errors->has('company_name') ? 'is-invalid' : '' }}" type="text" name="company_name" id="company_name" value="{{ old('company_name', '') }}">
                @if($errors->has('company_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('company_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.systemSetting.fields.company_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="vat_code">{{ trans('cruds.systemSetting.fields.vat_code') }}</label>
                <input class="form-control {{ $errors->has('vat_code') ? 'is-invalid' : '' }}" type="text" name="vat_code" id="vat_code" value="{{ old('vat_code', '') }}">
                @if($errors->has('vat_code'))
                    <div class="invalid-feedback">
                        {{ $errors->first('vat_code') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.systemSetting.fields.vat_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="company_code">{{ trans('cruds.systemSetting.fields.company_code') }}</label>
                <input class="form-control {{ $errors->has('company_code') ? 'is-invalid' : '' }}" type="text" name="company_code" id="company_code" value="{{ old('company_code', '') }}">
                @if($errors->has('company_code'))
                    <div class="invalid-feedback">
                        {{ $errors->first('company_code') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.systemSetting.fields.company_code_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="logo">{{ trans('cruds.systemSetting.fields.logo') }}</label>
                <input class="form-control {{ $errors->has('logo') ? 'is-invalid' : '' }}" type="text" name="logo" id="logo" value="{{ old('logo', '') }}">
                @if($errors->has('logo'))
                    <div class="invalid-feedback">
                        {{ $errors->first('logo') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.systemSetting.fields.logo_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection