@extends('layouts.BackEnd.app')


@section('title')
    Dashboard
@endsection

@section('style')
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="BackEnd/src/plugins/src/apex/apexcharts.css" rel="stylesheet" type="text/css">
    <link href="BackEnd/src/assets/css/light/dashboard/dash_1.css" rel="stylesheet" type="text/css" />
    <link href="BackEnd/src/assets/css/dark/dashboard/dash_1.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

@endsection

@section('bread')
    Users
@endsection

@section('content')



    <div class="seperator-header layout-top-spacing">
        <h4 class="">HomePage</h4>
    </div>




@endsection


@section('script')

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="BackEnd/src/plugins/src/apex/apexcharts.min.js"></script>
    <script src="BackEnd/src/assets/js/dashboard/dash_1.js"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
@endsection
