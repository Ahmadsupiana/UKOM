var url = '../halaman/proses/suratmasuk.php';

var simpan_data = function(){
	var nosurat = $('#nosurat').val();
	var jenissurat = $('#jenissurat').val();
	var diterima = $('#diterima').val();
	var tujuan = $('#tujuan').val();
	var isi = $('#isi').val();
	var keterangan = $('#keterangan').val();
	var file = $('#file').val();

	if (nosurat == ''||jenissurat == ''||diterima == '' ||tujuan == ''||isi == ''||keterangan == ''||file == '') {
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
				nosurat : nosurat,
				jenissurat : jenissurat,
				diterima : diterima,
				tujuan : tujuan,
				isi : isi,				
				keterangan : keterangan,				
				file : file,				
				action : 'simpan_datas'
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