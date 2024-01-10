$(document.body).on("click", ".metismenu li a, .d-link", function (e) {
	e.preventDefault();
	let page = $(this).attr("href");
	let title = $(this).attr("title");
	if (page == "javascript: void(0);") return false;

	if ($(this).attr("target") == "_blank") window.open(page, "_blank");
	if (page == "javascript: void(0);") return false;

	load_ajax_page(page );
});

function load_ajax_page(page, method='GET') {
	history.pushState(null, null, page);
	data = getJson(page, method)
	$("#content").empty();
	$("#content").html(data.html);
	$(window).scrollTop(0);

	// $.ajax({
	// 	url: page,
	// 	cache: false,
	// 	dataType: "html",
	// 	type: type,
	// 	success: function (data) {
	// 		$("#content").empty();
	// 		data = JSON.parse(data);
	// 		$("#content").html(data.html);
	// 		$(window).scrollTop(0);
	// 	}
	// });

	document.title = 'Admin | '+data.title;
	htmx.process(document.body);
	onLoad();
}

function getJson(url, method='GET', data={}) {
	return JSON.parse($.ajax({
		type: method,
		url: url,
		data: data,
		dataType: 'json',
		global: false,
		async: false,
		success: function (data) {
			return data;
		}
	}).responseText);
}
