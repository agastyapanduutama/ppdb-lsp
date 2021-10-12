$(document).ready(function () {
	table = $('#list_jurusan').DataTable({
		"processing": true,
		"serverSide": true,
		"order": [],

		"ajax": {
			"url": baseUrl + 'admin/jurusan/data',
			"type": "POST",
			"complete": function () {
			},
			"error": function (error) {
				errorCode(error)
			}
		},

		"columnDefs": [{
				"sClass": "text-center",
				"targets": [0],
				"orderable": false
			},
			{
				"targets": [1],
				"orderable": true
			},
			{
				"sClass": "text-center",
				"targets": [2],
				"orderable": true
			},
            {
				"sClass": "text-center",
				"targets": [3],
				"orderable": false
			},
		],
	});
})

$('#list_jurusan').on('click', '#edit', function () {
	let id = $(this).data('id');
	$.ajax({
		url: baseUrl + 'admin/jurusan/get/' + id,
		type: "GET",
		success: function (result) {
			response = JSON.parse(result)
			$("#idData").val(response.id)
			$("#jurusan1").val(response.nama_jurusan)
			$("#keterangan1").val(response.keterangan)
			$("#modalEdit").modal('show')
			
		},
		error: function (error) {
			errorCode(error)
		}
	})
})

$('#list_jurusan').on('click', '#delete', function () {
	let id = $(this).data('id');
	confirmSweet("Data akan terhapus secara permanen !")
		.then(result => {
			if (result) {
				$.ajax({
					url: baseUrl + 'admin/jurusan/delete/' + id,
					type: "GET",
					success: function (result) {
						response = JSON.parse(result)
						if (response.status == 'ok') {
							table.ajax.reload(null, false)
							msgSweetSuccess(response.msg)
							// msgSweetSuccess(response.msg)
						} else {
							msgSweetWarning(response.msg)
							// msgSweetError(response.msg)
						}
					},
					error: function (error) {
						errorCode(error)
					}
				})
			}
		})
})

$("#formAddjurusan").submit(function (e) {
	e.preventDefault();
	$.ajax({
		url: baseUrl + "admin/jurusan/insert",
		type: "post",
		data: new FormData(this),
		processData: false,
		contentType: false,
		cache: false,
		beforeSend: function () {
			// disableButton()
		},
		complete: function () {
			enableButton()
		},
		success: function (result) {
			let response = JSON.parse(result)
			if (response.status == "fail") {
				msgSweetError(response.msg)
			} else {
				table.ajax.reload(null, false)
				msgSweetSuccess(response.msg)
				clearInput($("input"))
			}
		},
		error: function (event) {
			errorCode(event)
		}
	});
})

$("#formEditjurusan").submit(function (e) {
	e.preventDefault();
	$.ajax({
		url: baseUrl + "admin/jurusan/update",
		type: "post",
		data: new FormData(this),
		processData: false,
		contentType: false,
		cache: false,
		beforeSend: function () {
			// disableButton()
		},
		complete: function () {
			enableButton()
		},
		success: function (result) {
			let response = JSON.parse(result)
			if (response.status == "fail") {
				// msgSweetError(response.msg)
				clearInput($("input"))
				$("#modalEdit").modal('hide')
			} else {
				table.ajax.reload(null, false)
				msgSweetSuccess(response.msg)
				clearInput($("input"))
				$("#modalEdit").modal('hide')
				
			}
		},
		error: function (event) {
			errorCode(event)
		}
	});
})


$('#list_jurusan').on('click', '#on', function () {
	let id = $(this).data('id');
	confirmSweet("Akun akan dinon-aktifkan  !")
		.then(result => {
			if (result) {
				$.ajax({
					url: baseUrl + 'admin/jurusan/set/' + id + "/off",
					type: "GET",
					success: function (result) {
						response = JSON.parse(result)
						if (response.status == 'ok') {
							table.ajax.reload(null, false)
							msgSweetSuccess(response.msg)
							// toastSuccess(response.msg)
						} else {
							msgSweetWarning(response.msg)
							// toastWarning(response.msg)
						}
					},
					error: function (error) {
						errorCode(error)
					}
				})
			}
		})
})

$('#list_jurusan').on('click', '#off', function () {
	let id = $(this).data('id');
	confirmSweet("Akun akan diaktifkan  !")
		.then(result => {
			if (result) {
				$.ajax({
					url: baseUrl + 'admin/jurusan/set/' + id + "/on",
					type: "GET",
					success: function (result) {
						response = JSON.parse(result)
						if (response.status == 'ok') {
							table.ajax.reload(null, false)
							msgSweetSuccess(response.msg)
							// toastSuccess(response.msg)
						} else {
							msgSweetWarning(response.msg)
							// toastWarning(response.msg)
						}
					},
					error: function (error) {
						errorCode(error)
					}
				})
			}
		})
})

$('#list_jurusan').on('click', '#reset', function () {
	let id = $(this).data('id');
	confirmSweet("Kata Sandi Akun akan direset !")
		.then(result => {
			if (result) {
				$.ajax({
					url: baseUrl + 'admin/jurusan/set/' + id + "/reset",
					type: "GET",
					success: function (result) {
						response = JSON.parse(result)
						if (response.status == 'ok') {
							table.ajax.reload(null, false)
							msgSweetSuccess(response.msg)
							// toastSuccess(response.msg)
						} else {
							msgSweetWarning(response.msg)
							// toastWarning(response.msg)
						}
					},
					error: function (error) {
						errorCode(error)
					}
				})
			}
		})
})