$(document).ready(function () {
	table = $('#list_siswa').DataTable({
		"processing": true,
		"serverSide": true,
		"order": [],

		"ajax": {
			"url": baseUrl + 'admin/siswa/data',
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
				"targets": [2],
				"orderable": true
			},
			{
				"targets": [3],
				"orderable": true
			},
			{
				"targets": [4],
				"orderable": true
			},
			{
				"sClass": "text-center",
				"targets": [5],
				"orderable": true
			},
			{
				"sClass": "text-center",
				"targets": [6],
				"orderable": true
			},
			{
				"sClass": "text-center",
				"targets": [7],
				"orderable": false
			},
		],
	});
})

$('#list_siswa').on('click', '#edit', function () {
	let id = $(this).data('id');
	$.ajax({
		url: baseUrl + 'admin/siswa/get/' + id,
		type: "GET",
		success: function (result) {
			response = JSON.parse(result)
			$("#idData").val(response.id)
			// $("#kode_siswa1").val(response.kode_siswa)
			$("#siswa1").val(response.nama_siswa)
			// $("#level1").val(response.level).change()
			$("#keterangan1").val(response.keterangan)
			$("#modalEdit").modal('show')
			
		},
		error: function (error) {
			errorCode(error)
		}
	})
})

$('#list_siswa').on('click', '#delete', function () {
	let id = $(this).data('id');
	confirmSweet("Data akan terhapus secara permanen !")
		.then(result => {
			if (result) {
				$.ajax({
					url: baseUrl + 'admin/siswa/delete/' + id,
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

$("#formAddsiswa").submit(function (e) {
	e.preventDefault();
	$.ajax({
		url: baseUrl + "admin/siswa/insert",
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

$("#formEditsiswa").submit(function (e) {
	e.preventDefault();
	$.ajax({
		url: baseUrl + "admin/siswa/update",
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


$('#list_siswa').on('click', '#on', function () {
	let id = $(this).data('id');
	confirmSweet("Akun akan dinon-aktifkan  !")
		.then(result => {
			if (result) {
				$.ajax({
					url: baseUrl + 'admin/siswa/set/' + id + "/off",
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

$('#list_siswa').on('click', '#off', function () {
	let id = $(this).data('id');
	confirmSweet("Akun akan diaktifkan  !")
		.then(result => {
			if (result) {
				$.ajax({
					url: baseUrl + 'admin/siswa/set/' + id + "/on",
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

$('#list_siswa').on('click', '#reset', function () {
	let id = $(this).data('id');
	confirmSweet("Kata Sandi Akun akan direset !")
		.then(result => {
			if (result) {
				$.ajax({
					url: baseUrl + 'admin/siswa/set/' + id + "/reset",
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