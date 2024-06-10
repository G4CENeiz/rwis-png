<!DOCTYPE html>
<html lang="en">

@section('css')
<link href="{{ URL::asset('assets/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

<head>
    <meta charset="utf-8" />

    <title>Sistem Informasi RW 1 - Landing Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    
    @include('layouts.shared.head')
</head>

<body>
@if(isset($withLoader) && $withLoader)
<!-- Pre-loader -->
<div id="preloader">
    <div id="status">
        <div class="spinner">
            <div class="circle1"></div>
            <div class="circle2"></div>
            <div class="circle3"></div>
        </div>
    </div>
</div>
<!-- End Preloader-->
@endif

<div id="wrapper">
    @include('layouts.shared.header-landing')

    <div class="content">
        @yield('content')
    </div>

    @include('layouts.shared.footer')

    @include('layouts.shared.footer-script')
</div>    

</body>

</html>