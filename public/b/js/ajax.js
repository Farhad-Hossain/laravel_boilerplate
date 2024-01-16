$(document.body).on("click", ".metismenu li a, .d-link", function (e) {
	e.preventDefault();
	let page = $(this).attr("href");
	if (page == "javascript: void(0);") return false;
	if ($(this).attr("target") == "_blank") window.open(page, "_blank");
	load_ajax_page(page);
});

function load_ajax_page(page, method='GET', data={}) {
	history.pushState(null, null, page);
	data = getJson(page, method, data)

	if ( 'errors' in data ) {
		showErrors(data.errors);

	} else {
		$("#content").empty();
		$("#content").html(data.html);
		$(window).scrollTop(0);
		document.title = 'Admin | '+data.title;
		htmx.process(document.body);
		onLoad();
		
	}
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

function showErrors(errors)
{
	// $(`.btn-close`).trigger('click');
	$(`.message`).html('');
	for ( let key in errors ) {
		$(`.invalid-feedback-${key} .message`).html(errors[key]);
	}
}


