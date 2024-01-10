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
	<link href="{{asset('b')}}/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="{{asset('b')}}/css/app.css" rel="stylesheet">
	<link href="{{asset('b')}}/css/icons.css" rel="stylesheet">
	<script src="https://unpkg.com/htmx.org@1.9.10"></script>
	
	<!-- Theme Style CSS -->
	<x-themes_css />
	@stack('css')
	<title id="url-title">Admin | {{  $title ?? '' }}</title>
</head>