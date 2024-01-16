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

	<div class="modal fade" id="common-modal" tabindex="-1" aria-hidden="true">
		<div class="modal-dialog modal-xl">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="common-modal-title"></h5>
					<button type="button" class="modal-btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body" id="common-modal-body-content">
					
				</div>
				{{--
				<div class="modal-footer text-align-left">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
				--}}
			</div>
		</div>
	</div>

	@include('inc.search_modal')
	@include('inc.theme_switcher')
	<x-footer />

	<script>
		$(document).ready(function() {
			if ( $('#datatable').length == 1 ) {
				var table = $('#datatable').DataTable( {
					lengthChange: false,
					buttons: [ 'copy', 'excel', 'pdf', 'print']
				} );
				
				table.buttons().container()
					.appendTo( '#datatable_wrapper .col-md-6:eq(0)' );
			}
			$(window).on('popstate', function(event) {
				load_ajax_page(window.location);
			});
			onLoad();
		} );

		function onLoad()
		{
			// Form will be submited by ajax and return the page
			$(`body`).on('submit', '.d-form', function (e){
				e.preventDefault();
				let url = $(this).attr('action');
				let method = $(this).attr('method');
				let data = $(this).serialize();
				load_ajax_page(url, method, data);
			})

			// By clicking the link, This Method will load the view and show the content in modal
			$(`body`).on(`click`, '.d-modal-link', function (e) {
				e.preventDefault();
				let url = $(this).attr('href');
				let data = getJson(url)

				$(`#common-modal-title`).html( $(this).attr(`title`) );
				$(`#common-modal-body-content`).html(data.html);
				$(`#common-modal`).modal('show');
			});

			// The form will be submited and reload the current page
			$(`#common-modal`).on('submit', '.d-modal-form', function (e){
				e.preventDefault();
				let url = $(this).attr('action');
				let method = $(this).attr('method');
				let formData = $(this).serialize();

				let data = getJson(url, method, formData);
				if ( 'errors' in data ) {
					showErrors(data.errors);
					return 0;
				} else {
					$(`.message`).html('');
					$(this).find('.modal-btn-close').trigger('click');
					load_ajax_page(window.location);
				}
			})	

			function showErrors(errors)
			{
				// $(`.btn-close`).trigger('click');
				$(`.message`).html('');
				for ( let key in errors ) {
					$(`.invalid-feedback-${key} .message`).html(errors[key]);
				}
			}

			
		}
	</script>
	@stack('js')
</body>

</html>