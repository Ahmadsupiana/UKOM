//simpan registrasi

var simpan_registrasi = function(){
	var id = $('#id_pengguna').val();
	var pengguna = $('#pengguna').val();
	var username = $('#username').val();
	var password = $('#password').val();
	var level = $('#level').val();

	if (id == ''||pengguna == ''||username == '' ||password == ''||level == '') {
		Swal.fire(
			'DATA KOSONG',
			'Data tidak boleh kosong',
			'warning'
			)
	}else{
		$.ajax({
			type : "post",
			url : url,
			data : {
				id : id,
				pengguna : pengguna,
				username : username,
				password : password,
				level : level,				
				action : 'simpan_data'
			},

			success : function(response){
				if (response == 'berhasil') {
					Swal.fire({
						title: 'BERHASIL',
						text: "Data berhasil disimpan",
						icon: 'success'
					}).then((result) => {
						window.location.href = window.location.href;
					})
				}else{

					Swal.fire(
						'GAGAL',
						'Data gagal di simpan, cek kembali data anda',
						'warning'
						)
				}
			}
		});
	}
}


$(document).on('click', '.hapus', function(){
	var id = $(this).attr('id');

	Swal.fire({
		title : 'Apa kamu yakin !',
		text : "Data ini akan dihapus, lanjutkan ? ",
		icon : 'warning',
		showCancelButton : true,
		confirmButtonColor : '#3085d6',
		cancelButtonColor : '#d33',
		confirmButtonText : 'Hapus'
	}).then((result) => {
		if (result.isConfirmed) {

	

			$.ajax({
				type : 'post',
				url : url,
				data : {
					id : id,
					action : "hapus"
				},
				dataType : 'json',
				success:function(response) {
					if (response.pesan == 'berhasil') {
						Swal.fire({
							title: 'BERHASIL',
							text: "Data berhasil dihapus",
							icon: 'success'
						}).then((result) => {
							window.location.href = window.location.href;
						})
					}

				}
			});

		}
	})
})


var url = '../halaman/proses/peserta.php';


$(document).on('click', '#EditFile', function(){
	var id = $(this).data('id');
	var pengguna = $(this).data('nama');
	var user = $(this).data('user');
	var pass = $(this).data('pass');
	var lev = $(this).data('level');

	$("#modal_data #aid_pengguna").val(id);
	$("#modal_data #apengguna").val(pengguna);
	$("#modal_data #ausername").val(user);
	$("#modal_data #apassword").val(pass);
	$("#modal_data #alevel").val(lev);

})

var simpan_edit = function(){
		var id = $('#aid_pengguna').val();
		var pengguna = $('#apengguna').val();
		var user = $('#ausername').val();
		var pass = $('#apassword').val();
		var level = $('#alevel').val();

		$.ajax({
			type : "post",
			url : url,
			data : {
				id : id,
				pengguna : pengguna,
				user : user,
				pass : pass,
				level : level,
				action : 'simpan_edita'
			},
			dataType : "json",
			success: function (response) {
				if (response.pesan == 'berhasil') {
					Swal.fire({
						title: 'BERHASIL',
						text: "Data berhasil di ubah" ,
						icon: 'success'
					}).then((result) => {
						window.location.href = window.location.href;
					})
				}
			}

		});

	}




