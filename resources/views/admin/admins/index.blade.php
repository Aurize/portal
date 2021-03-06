@extends('admin.layout.layout')

@section('title')
    @lang('admin/admins/default.admins')
@stop

@section('page-header')
    <h1>
        @lang('admin/admins/default.admins')
        <small> @lang('admin/global.catalogue')</small>
    </h1>
@stop

@section('breadcrumbs')
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> @lang('admin/global.catalogue')</a></li>
        <li><a href="{{ route('admin.admins.index') }}">@lang('admin/admins/default.admins')</a></li>
        <li class="active">@lang('admin/global.everybody')</li>
    </ol>
@stop

@section('content')
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title"><i class="fa fa-th"></i> @lang('admin/admins/default.admins')</h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip">
                    <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip">
                    <i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            @include('admin.admins.tables.default', ['admins' => $admins, 'buttons' => 'default', 'id' => "admins-table"])
        </div>
        <div class="box-footer">
            Footer
        </div>
    </div>
@stop

@section('footer')
    <script type="text/javascript">
        var otable = $("#admins-table").DataTable({
            "language": {
                url: "/locale/datatables/pl.json"
            },
            "paging": true
        });

        //+applyFilter(otable, "#admins-table");
    </script>
@stop