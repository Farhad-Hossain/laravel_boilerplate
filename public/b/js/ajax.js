$(document.body).on("click", ".metismenu li a, .d-link", function (e) {
	e.preventDefault();

	let page = $(this).attr("href");
	let title = $(this).attr("title");

	if (page == "javascript: void(0);") return false;

	if ($(this).attr("target") == "_self") { window.location.href = page; return true };
	if ($(this).attr("target") == "_blank") window.open(page, "_blank");

	if (page == "javascript: void(0);") return false;
	call_ajax_page(page, title);
});

function call_ajax_page(page, title='') {
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
	document.title = 'Admin | '+title;
	htmx.process(document.body);
}
