@extends('layouts.BackEnd.app')


@section('title')
    Dashboard
@endsection

@section('style')

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="{{ asset('BackEnd/src/plugins/src/apex/apexcharts.css') }}" rel="stylesheet" type="text/css">
    <link href="{{asset('BackEnd/src/assets/css/light/dashboard/dash_1.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{asset('BackEnd/src/assets/css/dark/dashboard/dash_2.css') }}" rel="stylesheet" type="text/css" />

    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
@endsection

@section('bread')
    Users
@endsection

@section('content')



    <div class="seperator-header layout-top-spacing">
        <h4 class="">HomePage</h4>
    </div>

    <div class="row layout-top-spacing">
        @include('admin.dashboard.index')
    </div>




@endsection


@section('script')

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="{{asset('BackEnd/src/assets/js/widgets/modules-widgets.js')}}"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

@endsection
