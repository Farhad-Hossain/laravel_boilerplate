<!doctype html>
<html lang="en" class="dark-theme">
<x-head title="{{$title}}"/>
<body>
	<div class="wrapper">
		@include('inc.sidebar')
		@include('inc.header')
		<div class="page-wrapper">
			<div class="page-content" id="alert-container" style="display: none;"></div>
			<x-notify />
			<div class="page-content" id="content">
				{!! $subView !!}
			</div>
			<x-scripts />
		</div>
		 <div class="overlay toggle-icon"></div>
		 <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
	</div>
	@include('inc.search_modal')
	@include('inc.theme_switcher')
	<x-footer />
	<script>
		$(document).ready(function() {
			onLoad();
		} );

		function onLoad()
		{
			if ( $('#datatable').length == 1 ) {
				var table = $('#datatable').DataTable( {
					lengthChange: false,
					buttons: [ 'copy', 'excel', 'pdf', 'print']
				} );
				
				table.buttons().container()
					.appendTo( '#datatable_wrapper .col-md-6:eq(0)' );
			}

			if ( $('.d-form').length > 0 ) {
				$('.d-form').on('submit', function (e){
					e.preventDefault();
					let url = $(this).attr('action');
					let method = $(this).attr('method');
					let data = $(this).serialize();
					console.log(url, method, data);
					load_ajax_page(url, method, data);
				})
			}
		}

		
	</script>
	@stack('js')
</body>

</html>