@extends('layouts.BackEnd.app')


@section('title')
    Dashboard
@endsection

@section('bread')
    Users
@endsection

@section('style')
    <!-- BEGIN PAGE LEVEL CUSTOM STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('BackEnd/src/plugins/src/table/datatable/datatables.css')}}">

    <link rel="stylesheet" type="text/css" href="{{ asset('BackEnd/src/plugins/css/light/table/datatable/dt-global_style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('BackEnd/src/plugins/css/light/table/datatable/custom_dt_custom.css')}}">

    <link rel="stylesheet" type="text/css" href="{{ asset('BackEnd/src/plugins/css/dark/table/datatable/dt-global_style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('BackEnd/src/plugins/css/dark/table/datatable/custom_dt_custom.css')}}">

    <!-- END PAGE LEVEL CUSTOM STYLES -->
@endsection



@section('content')





    <div class="row layout-spacing">
        <div class="col-lg-12">
            <div class="statbox widget box box-shadow">
                <div class="widget-content widget-content-area">
                    <table id="style-3" class="table style-3 dt-table-hover">
                        <thead>
                        <tr>
                            <th class="checkbox-column text-center"> Record Id </th>
                            <th class="text-center">Image</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile No.</th>
                            <th class="text-center">Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script2')
    <script src="{{ asset('BackEnd/src/plugins/src/global/vendors.min.js')}}"></script>
@endsection

@section('script')

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{ asset('BackEnd/src/assets/js/custom.js')}}"></script>
    <script src="{{ asset('BackEnd/src/plugins/src/table/datatable/datatables.js')}}"></script>
    <script>
        {{--$(document).ready(function () {--}}
        {{--c3 = $('#style-3').DataTable({--}}
        {{--    "processing": true,--}}
        {{--    "serverSide": true,--}}
        {{--    "ajax":  "{{ route('admin.users.load') }}",--}}
        {{--    "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +--}}
        {{--        "<'table-responsive'tr>" +--}}
        {{--        "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",--}}
        {{--    "oLanguage": {--}}
        {{--        "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },--}}
        {{--        "sInfo": "Showing page _PAGE_ of _PAGES_",--}}
        {{--        "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',--}}
        {{--        "sSearchPlaceholder": "Search...",--}}
        {{--        "sLengthMenu": "Results :  _MENU_",--}}
        {{--    },--}}
        {{--    "stripeClasses": [],--}}
        {{--    "lengthMenu": [5, 10, 20, 50],--}}
        {{--    "pageLength": 10--}}
        {{--});--}}

        {{--multiCheck(c3);--}}
        {{--});--}}

              c3 = $('#style-3').DataTable({
                processing: true,
                serverSide: true,
                aaSorting:[],
                order:[],
                ajax: {
                    "url": "{{route('admin.users.load')}}",
                    "type": "GET"
                },
                columns: [
                    {data: 'id', name: 'id',orderable: true},
                    {data: 'avatar', name: 'avatar'},
                    {data: 'name', name: 'name',orderable: true},
                    {data: 'email', name: 'email',orderable: true},
                    {data: 'phone', name: 'phone',orderable: true},
                    {data: 'blocked', name: 'blocked'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ],
                "columnDefs": [
                    { className: "checkbox-column text-center", "targets": [ 0 ] , orderable:true},
                    { className: "text-center", "targets": [ 1 ] },
                    { className: "text-center", "targets": [ 2 ] },
                    { className: "text-center", "targets": [ 3 ] },
                    { className: "text-center", "targets": [ 4 ] },
                    { className: "text-center", "targets": [ 5 ] },
                    { className: "text-center", "targets": [ 6 ] },
                ],
                "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
                    "<'table-responsive'tr>" +
                    "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
                "oLanguage": {
                    "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                    "sInfo": "Showing page _PAGE_ of _PAGES_",
                    "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                    "sSearchPlaceholder": "Search...",
                    "sLengthMenu": "Results :  _MENU_",
                },
                "stripeClasses": [],
                "lengthMenu": [5, 10, 20, 50],
                "pageLength": 10,

        });

            multiCheck(c3);
    </script>
    <!-- END PAGE LEVEL SCRIPTS -->
@endsection
