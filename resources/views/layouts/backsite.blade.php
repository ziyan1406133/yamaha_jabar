<!doctype html>
<html lang="en">

<head>
	<title>Yamaha Jabar</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{ asset('klorofilTemplate/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('klorofilTemplate/assets/vendor/font-awesome/css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('klorofilTemplate/assets/vendor/linearicons/style.css') }}">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{ asset('klorofilTemplate/assets/css/main.css') }}">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('klorofilTemplate/assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('klorofilTemplate/assets/img/favicon.png') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/animate.css') }}"/> --}}
    @yield('css')
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
        @include('layouts.partial.backsite.navbar')
        @include('layouts.partial.backsite.sidebar')
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					@include('layouts.partial.backsite.alert')
                    @yield('content')
                </div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		@include('layouts.partial.backsite.footer')
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="{{ asset('klorofilTemplate/assets/vendor/jquery/jquery.min.js') }}"></script>
	<script src="{{ asset('klorofilTemplate/assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('klorofilTemplate/assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('klorofilTemplate/assets/scripts/klorofil-common.js') }}"></script>
    @yield('script')
</body>

</html>
