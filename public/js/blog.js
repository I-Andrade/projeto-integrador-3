$('#btn-cadCategoria').click(e){e.preventdefault();


	fetch($(this).attr('href'))
	.then(response => response.text())
	.then(html => {
		$('body').append(html);
		$('#modalCadCategoria-internal').modal('show');
	})
};
