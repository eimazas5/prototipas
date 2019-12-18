@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.addStock.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.add-stocks.update", [$addStock->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="name_id">{{ trans('cruds.addStock.fields.name') }}</label>
                <select class="form-control select2 {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name_id" id="name_id">
                    @foreach($names as $id => $name)
                        <option value="{{ $id }}" {{ ($addStock->name ? $addStock->name->id : old('name_id')) == $id ? 'selected' : '' }}>{{ $name }}</option>
                    @endforeach
                </select>
                @if($errors->has('name_id'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name_id') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.addStock.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="amounttoadd">{{ trans('cruds.addStock.fields.amounttoadd') }}</label>
                <input class="form-control {{ $errors->has('amounttoadd') ? 'is-invalid' : '' }}" type="number" name="amounttoadd" id="amounttoadd" value="{{ old('amounttoadd', $addStock->amounttoadd) }}" step="1">
                @if($errors->has('amounttoadd'))
                    <div class="invalid-feedback">
                        {{ $errors->first('amounttoadd') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.addStock.fields.amounttoadd_helper') }}</span>
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