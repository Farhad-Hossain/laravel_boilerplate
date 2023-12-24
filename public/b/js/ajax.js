$(document).on("click", ".metismenu li a", function (e) {
	e.preventDefault();

	var page = $(this).attr("href");
	if (page == "javascript: void(0);") return false;

	if ($(this).attr("target") == "_self") { window.location.href = page; return true };
	if ($(this).attr("target") == "_blank") window.open(page, "_blank");

	if (page == "javascript: void(0);") return false;
	call_ajax_page(page);
});

function call_ajax_page(page) {
	history.pushState(null, null, page);

	$('#content').html(
		`<div id="ajax-loader" class="spinner"></div>`	
	);
	$.ajax({
		url: page,
		cache: false,
		dataType: "html",
		type: "GET",
		success: function (data) {
			$("#content").empty();
			$("#content").html(data);
			$(window).scrollTop(0);
		}
	});
}

$(document).ready(function () {
	var path = window.location;
	call_ajax_page(path);
	
});