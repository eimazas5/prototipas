@extends('layouts.admin')
@section('content')
@can('new_product_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.new-products.create") }}">
                {{ trans('global.add') }} {{ trans('cruds.newProduct.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.newProduct.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-NewProduct">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.newProduct.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.newProduct.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.newProduct.fields.stock') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($newProducts as $key => $newProduct)
                        <tr data-entry-id="{{ $newProduct->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $newProduct->id ?? '' }}
                            </td>
                            <td>
                                {{ $newProduct->name ?? '' }}
                            </td>
                            <td>
                                {{ $newProduct->stock ?? '' }}
                            </td>
                            <td>
                                @can('new_product_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.new-products.show', $newProduct->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('new_product_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.new-products.edit', $newProduct->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('new_product_delete')
                                    <form action="{{ route('admin.new-products.destroy', $newProduct->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('new_product_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.new-products.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  $('.datatable-NewProduct:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})

</script>
@endsection