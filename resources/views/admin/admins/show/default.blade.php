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
    <div class="row">
        <div class="col-md-12">
            @include('admin.admins.show.tabs.default')
        </div>
    </div>
@stop

@section('footer')
    <script type="text/javascript">

    </script>
@stop