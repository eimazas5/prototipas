@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.sale.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.sales.update", [$sale->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="name_id">{{ trans('cruds.sale.fields.name') }}</label>
                <select class="form-control select2 {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name_id" id="name_id">
                    @foreach($names as $id => $name)
                        <option value="{{ $id }}" {{ ($sale->name ? $sale->name->id : old('name_id')) == $id ? 'selected' : '' }}>{{ $name }}</option>
                    @endforeach
                </select>
                @if($errors->has('name_id'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name_id') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.sale.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="sales_amount">{{ trans('cruds.sale.fields.sales_amount') }}</label>
                <input class="form-control {{ $errors->has('sales_amount') ? 'is-invalid' : '' }}" type="number" name="sales_amount" id="sales_amount" value="{{ old('sales_amount', $sale->sales_amount) }}" step="1">
                @if($errors->has('sales_amount'))
                    <div class="invalid-feedback">
                        {{ $errors->first('sales_amount') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.sale.fields.sales_amount_helper') }}</span>
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