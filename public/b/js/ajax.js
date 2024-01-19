$(document.body).on("click", ".metismenu li a, .d-link", function (e) {
	e.preventDefault();
	let page = $(this).attr("href");
	
	if ( page == "javascript:;" ) {
		return false;
	}

	if ($(this).attr("target") == "_blank") window.open(page, "_blank");
	let data = load_ajax_page(page);

	if ( $(this).attr('d-after-request') ) {
		$(this).attr('d-after-request')(data);
	}
	
	onLoad();
});

function load_ajax_page(page, method='GET', data={}) {
	
	data = getJson(page, method, data)

	if ( 'errors' in data ) {
		showErrors(data.errors);
		return null;

	} else {
		if ( window.location.href != page ) {
			history.pushState(null, null, page);
		}
		
		if ( data.html ) {
			$("#content").empty();
			$("#content").html(data.html);
		}
		
		$(window).scrollTop(0);
		document.title = 'Admin | '+data.title;
		return data;
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
	$(`.message`).html('');
	for ( let key in errors ) {
		$(`.invalid-feedback-${key} .message`).html(errors[key]);
	}
}




