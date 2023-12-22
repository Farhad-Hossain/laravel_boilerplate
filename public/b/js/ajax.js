$(document).on("click", ".metismenu li a, .navbar-nav  li a", function (e) {
	e.preventDefault();

	var page = $(this).attr("href");
	if (page == "javascript: void(0);") return false;

	if ($(this).attr("target") == "_self") { window.location.href = page; return true };
	if ($(this).attr("target") == "_blank") window.open(page, "_blank");

	if (page == "javascript: void(0);") return false;
	call_ajax_page(page);
});


function set_title_and_open_menu()
{
	var pageUrl = window.location;
	$(".metismenu li, .metismenu li a").removeClass("active");
	$(".metismenu ul").removeClass("in");


	$(".metismenu a").each(function () {
		if ($(this).attr("href") == pageUrl) {
			$(this).addClass("active");
			$(this).parent().addClass("mm-active"); // add active to li of the current link
			$(this).parent().parent().addClass("mm-show");
			$(this).parent().parent().prev().addClass("mm-active"); // add active class to an anchor
			$(this).parent().parent().parent().addClass("mm-active");
			$(this).parent().parent().parent().parent().addClass("mm-show"); // add active to li of the current link
			$(this).parent().parent().parent().parent().parent().addClass("mm-active");

			document.title = $(this).attr('title');
		}
	});

	$(".navbar-nav a").removeClass("active");
	$(".navbar-nav li").removeClass("active");
	$(".navbar-nav a").each(function () {
		if ($(this).attr('href') == pageUrl) {
			$(this).addClass("active");
			$(this).parent().addClass("active");
			$(this).parent().parent().addClass("active");
			$(this).parent().parent().parent().addClass("active");
			$(this).parent().parent().parent().parent().addClass("active");
			$(this).parent().parent().parent().parent().parent().addClass("active");
		}
	});
}

function call_ajax_page(page) {
	history.pushState(null, null, page);
	set_title_and_open_menu();

	$('#result').html(
		`<div id="ajax-loader" class="spinner"></div>`	
	);
	$.ajax({
		url: page,
		cache: false,
		dataType: "html",
		type: "GET",
		success: function (data) {
			$("#result").empty();
			$("#result").html(data);
			$(window).scrollTop(0);
		}
	});
}

$(document).ready(function () {
	var path = window.location;
	call_ajax_page(path);
	
});