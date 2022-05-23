<!doctype html>
<html lang="en">
<head>
    <title>Admin - @yield('title') </title>
    @include('layouts.BackEnd.meta')
    @yield('style')
</head>
<body class="layout-boxed">
<!-- BEGIN LOADER -->
<div id="load_screen"> <div class="loader"> <div class="loader-content">
            <div class="spinner-grow align-self-center"></div>
        </div></div></div>


<!--  END LOADER -->

@include('layouts.BackEnd.navbar')
<!--  BEGIN MAIN CONTAINER  -->
<div class="main-container" id="container">

    <div class="overlay"></div>
    <div class="search-overlay"></div>

    @include('layouts.BackEnd.sidebar')

<!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="middle-content container-xxl p-0">
                <!-- BREADCRUMB -->
                <div class="page-meta mb-3">
                    <nav class="breadcrumb-style-one" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Datatables</a></li>
                            <li class="breadcrumb-item active" aria-current="page">@yield('bread')</li>
                        </ol>
                    </nav>
                </div>
                <!-- /BREADCRUMB -->

                @if(flash()->message)
                    <div style="position: absolute;z-index: 4444444444444;left: 35px;top: 80px;max-width: calc(100% - 70px);padding: 16px 22px;border-radius: 7px;overflow: hidden;width: 273px;border-right: 8px solid #374b52;background: #2196f3;color: #fff;cursor: pointer;"  onclick="$(this).slideUp();">
                        <span class="fas fa-info-circle"></span> {{ flash()->message }}
                    </div>
                @endif



                @yield('content')



            </div>
        </div>
    </div>


</div>

@include('layouts.BackEnd.footer')
@yield('script2')
@include('layouts.BackEnd.scripts')

@yield('script')
</body>
</html>
