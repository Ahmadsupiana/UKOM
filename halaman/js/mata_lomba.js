//simpan registrasi

var simpan_MataLomba = function(){
	var id = $('#L').val();
	var pengguna = $('#P').val();
	var username = $('#SS').val();
	var password = $('#SD').val();
	var level = $('#PF').val();
	var HK = $('#HK').val();
	var GTH = $('#GTH').val();
	

	if (id == ''||pengguna == ''||username == '' ||password == ''||level == ''||HK == ''||GTH == '') {
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
				HK : HK,				
				GTH : GTH,				
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


var url = '../halaman/proses/mata_lomba.php';


$(document).on('click', '#EditFile', function(){
	var id = $(this).data('id');
	var pengguna = $(this).data('nama');
	var user = $(this).data('user');
	var pass = $(this).data('pass');
	var lev = $(this).data('level');
	var HK = $(this).data('HK');
	var GTH = $(this).data('GTH');

	$("#modal_data #La").val(id);
	$("#modal_data #Pa").val(pengguna);
	$("#modal_data #SSa").val(user);
	$("#modal_data #SDa").val(pass);
	$("#modal_data #PFa").val(lev);
	$("#modal_data #HK").val(HK);
	$("#modal_data #GTH").val(GTH);

})

// var simpan_edit = function(){
// 		var id = $('#aid_pengguna').val();
// 		var pengguna = $('#apengguna').val();
// 		var user = $('#ausername').val();
// 		var pass = $('#apassword').val();
// 		var level = $('#alevel').val();
// 		var HK = $('#HK1').val();
// 		var GTH = $('#GTH1').val();

// 		$.ajax({
// 			type : "post",
// 			url : url,
// 			data : {
// 				id : id,
// 				pengguna : pengguna,
// 				user : user,
// 				pass : pass,
// 				level : level,
// 				HK : HK,
// 				GTH : GTH,
// 				action : 'simpan_edita'
// 			},
// 			dataType : "json",
// 			success: function (response) {
// 				if (response.pesan == 'berhasil') {
// 					Swal.fire({
// 						title: 'BERHASIL',
// 						text: "Data berhasil di ubah" ,
// 						icon: 'success'
// 					}).then((result) => {
// 						window.location.href = window.location.href;
// 					})
// 				}
// 			}

// 		});

// 	}




