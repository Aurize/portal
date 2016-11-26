@extends('admin.layout.layout')

@section('title')
    @lang('admin/admins/default.admins')
@stop

@section('page-header')
    <h1>
        @lang('admin/admins/default.admins')
        <small> {{ $admin->name }}</small>
    </h1>
@stop

@section('breadcrumbs')
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> @lang('admin/global.catalogue')</a></li>
        <li><a href="{{ route('admin.admins.index') }}">@lang('admin/admins/default.admins')</a></li>
        <li class="active">{{ $admin->name }}</li>
    </ol>
@stop

@section('content')
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#info" data-toggle="tab">@lang('admin/global.catalogue')</a></li>
                <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="info">
                    @include('admin.admins.edit.tabs.horizontal.info')
                </div>
            </div>
        </div>
@stop

@section('footer')
    <script type="text/javascript">
        var locale = '{{App::getLocale()}}';

        var otable = $("#admins-table").DataTable({
            select: true,
            "language": {
                url: "/locale/datatables/" + locale + ".json"
            },
            "paging": true
        });

        //applyFilter(otable, "#admins-table");
    </script>
@stop