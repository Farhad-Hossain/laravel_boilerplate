<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="{{asset('b')}}/images/favicon-32x32.png" type="image/png"/>
	<!--plugins-->
	<link href="{{asset('b')}}/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
	<link href="{{asset('b')}}/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="{{asset('b')}}/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="{{asset('b')}}/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet"/>
	<link href="{{asset('b')}}/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="{{asset('b')}}/css/pace.min.css" rel="stylesheet"/>
	<script src="{{asset('b')}}/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="{{asset('b')}}/css/bootstrap.min.css" rel="stylesheet">
	<link href="{{asset('b')}}/css/bootstrap-extended.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="{{asset('b')}}/css/app.css" rel="stylesheet">
	<link href="{{asset('b')}}/css/icons.css" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="{{asset('b')}}/css/dark-theme.css"/>
	<link rel="stylesheet" href="{{asset('b')}}/css/semi-dark.css"/>
	<link rel="stylesheet" href="{{asset('b')}}/css/header-colors.css"/>
	@stack('css')
	<title>Rocker - Bootstrap 5 Admin Dashboard Template</title>
</head>

<body>
	<!--wrapper-->
	<div class="wrapper">
		@include('inc.sidebar')
		@include('inc.header')
		
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content" id="content">
			</div>
		</div>
		<!--end page wrapper -->
		<!--start overlay-->
		 <div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button-->
		  <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<footer class="page-footer">
			<p class="mb-0">Copyright © 2022. All right reserved.</p>
		</footer>
	</div>
	<!--end wrapper-->

	@include('inc.search_modal')
	@include('inc.theme_switcher')

	<!-- Bootstrap JS -->
	<script src="{{asset('b')}}/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="{{asset('b')}}/js/jquery.min.js"></script>
	<script src="{{asset('b')}}/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="{{asset('b')}}/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="{{asset('b')}}/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<script src="{{asset('b')}}/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="{{asset('b')}}/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
	{{-- <script src="{{asset('b')}}/plugins/chartjs/js/chart.js"></script> --}}
	{{--
	<script src="{{asset('b')}}/js/index.js"></script>
	--}}
	<!--app JS-->
	<script src="{{asset('b')}}/js/app.js"></script>
	<script src="{{asset('b')}}/js/ajax.js"></script>
	<script src="{{asset('b')}}/plugins/datatable/js/jquery.dataTables.min.js"></script>
	<script src="{{asset('b')}}/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
	<script>
		new PerfectScrollbar(".app-container")
	</script>
	@stack('js')
</body>

</html>