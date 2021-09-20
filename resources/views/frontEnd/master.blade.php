<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="{{asset('frontEnd/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('frontEnd/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontEnd/css/all.css')}}">
</head>
<body>
	<!-- header section start -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @include('frontEnd.home.header')
            </div>
        </div>
    </div>

	<!-- header section end -->
	<!-- menu section start -->
	<div class="container">
		<div class="row">
			@include('frontEnd.home.menu')
		</div>
	</div>
	<!-- menu section end -->
	<!--body section start -->
    <div class="container">
		<div class="row">
			<div class="col-md-12">
				@yield('body')
                {{-- All Product Body--}}
                @yield('allDataBody')
                {{-- Edit Product Body --}}
                @yield('editProduct')
			</div>
		</div>
	</div>

	<!-- menu section end -->
	<!-- footer section start -->
	@include('frontEnd.home.footer')
	<!-- footer section end -->
	<script src="{{asset('frontEnd/js/bootstrap.js')}}"></script>
</body>
</html>
