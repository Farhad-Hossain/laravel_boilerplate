<!doctype html>
<html lang="en" class="dark-theme">
<x-head title="{{$title}}"/>
<body>
	<div class="wrapper">
		@include('inc.sidebar')
		@include('inc.header')
		<div class="page-wrapper">
			<div class="page-content" id="content">
				{!! $subView !!}
			</div>
			<x-scripts />
		</div>
		 <div class="overlay toggle-icon"></div>
		 <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
	</div>

	<div class="modal fade" id="exampleExtraLargeModal" tabindex="-1" aria-hidden="true">
		<div class="modal-dialog modal-xl">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Modal title</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur.</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
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
					load_ajax_page(url, method, data);
				})
			}

			if ( $('.d-modal-link').length > 0 ) {
				$(`.d-modal-link`).on('click', function (e){
					e.preventDefault();
					let url = $(this).attr('href');
					// let data = getJson(url)
					$(`#exampleExtraLargeModal`).modal('show');
				});
			}
		}
	</script>
	@stack('js')
</body>

</html>