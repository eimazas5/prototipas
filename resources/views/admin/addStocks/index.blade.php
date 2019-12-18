@extends('layouts.admin')
@section('content')
@can('add_stock_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.add-stocks.create") }}">
                {{ trans('global.add') }} {{ trans('cruds.addStock.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.addStock.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-AddStock">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.addStock.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.addStock.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.addStock.fields.amounttoadd') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($addStocks as $key => $addStock)
                        <tr data-entry-id="{{ $addStock->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $addStock->id ?? '' }}
                            </td>
                            <td>
                                {{ $addStock->name->name ?? '' }}
                            </td>
                            <td>
                                {{ $addStock->amounttoadd ?? '' }}
                            </td>
                            <td>
                                @can('add_stock_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.add-stocks.show', $addStock->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('add_stock_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.add-stocks.edit', $addStock->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('add_stock_delete')
                                    <form action="{{ route('admin.add-stocks.destroy', $addStock->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('add_stock_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.add-stocks.massDestroy') }}",
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
  $('.datatable-AddStock:not(.ajaxTable)').DataTable({ buttons: dtButtons })
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
})

</script>
@endsection