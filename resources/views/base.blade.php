<!doctype html>
<html lang="en" class="dark-theme">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="{{asset('b')}}/images/favicon-32x32.png" type="image/png" />
	<!--plugins-->
	<link href="{{asset('b')}}/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="{{asset('b')}}/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="{{asset('b')}}/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="{{asset('b')}}/css/pace.min.css" rel="stylesheet" />
	<script src="{{asset('b')}}/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="{{asset('b')}}/css/bootstrap.min.css" rel="stylesheet">
	<link href="{{asset('b')}}/css/bootstrap-extended.css" rel="stylesheet">
	
	<x-select_2_css />

	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="{{asset('b')}}/css/app.css" rel="stylesheet">
	<link href="{{asset('b')}}/css/icons.css" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="{{asset('b')}}/css/dark-theme.css" />
	<link rel="stylesheet" href="{{asset('b')}}/css/semi-dark.css" />
	<link rel="stylesheet" href="{{asset('b')}}/css/header-colors.css" />
	<title>Rocker - Bootstrap 5 Admin Dashboard Template</title>

	@stack('css')
	<title>Admin | {{  env('APP_NAME') }}</title>
</head>

<body>
	<!--wrapper-->
	<div class="wrapper">
		@include('inc.sidebar')
		@include('inc.header')
		
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content" id="alert-container" style="display: none;">
				<p class="page-content alert alert-success w-100 mt-0 mb-0" id="message"></p> 
			</div>
			
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
			<p class="mb-0">Copyright © {{ date('Y') }}. All right reserved.</p>
		</footer>
	</div>
	<!--end wrapper-->

	@include('inc.search_modal')
	@include('inc.theme_switcher')

	<script src="{{asset('b')}}/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="{{asset('b')}}/js/jquery.min.js"></script>
	<script src="{{asset('b')}}/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="{{asset('b')}}/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="{{asset('b')}}/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
	<script src="{{asset('b')}}/plugins/select2/js/select2-custom.js"></script>
	<!--app JS-->
	<script src="{{asset('b')}}/js/app.js"></script>
	<script src="{{asset('b')}}/js/ajax.js"></script>
	

	<script>
		function closeModal(id)
		{
			$(`#${id}`).modal('hide');
		}
		function refreshCurrentPage()
		{
			let currentUrl = window.location;
			$(document).find(`[href='${currentUrl}']`).trigger('click');
		}
		function showAlert()
		{
			$(`#alert-container`).show();
			setTimeout(function () {
				$(`#alert-container`).hide('slow');
			},3000);
			
		}
		new PerfectScrollbar(".app-container")
	</script>
	@stack('js')
</body>

</html>