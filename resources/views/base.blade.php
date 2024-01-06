<!doctype html>
<html lang="en" class="dark-theme">
<x-head />

<body>
	<div class="wrapper">
		@include('inc.sidebar')
		@include('inc.header')
		<div class="page-wrapper">
			<div class="page-content" id="alert-container" style="display: none;"></div>
			<div class="page-content" id="content">
				<x-scripts />
				{!! $subView !!}
			</div>
		</div>
		 <div class="overlay toggle-icon"></div>
		 <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
	</div>
	@include('inc.search_modal')
	@include('inc.theme_switcher')
	<x-footer />
	@stack('js')
</body>

</html>