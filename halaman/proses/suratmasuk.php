<?php
include '../../koneksi/koneksi.php';
		

// $tipe_file = $_FILES['file']['type']; //mendapatkan mime type
// if ($tipe_file == "application/pdf") //mengecek apakah file tersebu pdf atau bukan
// {
// 	$no    = trim($_POST['nosurat']);
// 	$jenis     = trim($_POST['jenissurat']);	
// 	$diterima    = trim($_POST['diterima']);
// 	$tujuan = trim($_POST['tujuan']);
// 	$isi     = trim($_POST['isi']);
// 	$ket    = trim($_POST['keterangan']);
// 	$file     = trim($_POST['file']);
	

// 	$sql = "INSERT INTO surat_masuk (nomor_surat, jenis_surat, tanggal_diterima, tujuan, isi_surat, keterangan, file) VALUES ('$no','$jenis','$diterima','$tujuan','$isi','$ket','$file')";
//  mysqli_query($koneksi,$sql); //simpan data judul dahulu untuk mendapatkan id
if ($_POST['action'] == 'simpan_datas'){

	$no = $_POST['nosurat'];
	$jenis = $_POST['jenissurat'];
	$diterima = $_POST['diterima'];
	$tujuan = $_POST['tujuan'];
	$isi = $_POST['isi'];
	$ket = $_POST['keterangan'];
	$file = $_POST['file'];
	
	// $ekstensi_diperbolehkan = array('pdf','docx');
	// $nama = $_FILES['file']['name'];
	// $x = explode('.',$nama)
	// $extensi = strtolower(end($x));
	// $ukuran = $_FILES['file']['size'];
	// $file_tmp = $_FILES['file']['tmp_name'];

	// if (in_array($extensi, $ekstensi_diperbolehkan)=== true) {
	// 	# code...
	// 	if ($ukuran<1044070) {
	// 		# code...
	// 		move_uploaded_file($file_tmp, 'file/'.$nama);
	// 		$query = mysql_query("INSERT INTO surat_masuk VALUES (''$no', '$jenis', '$diterima', '$tujuan', '$isi', '$ket', '$nama')");

// 			if ($query) {
// 		# code...
// 		echo "berhasil";
// 	}else{ 
// 		echo "gagal";
// 	}
// }

// 		}
	
	$sql = mysqli_query($koneksi, "INSERT INTO surat_masuk VALUES ('$no', '$jenis', '$diterima', '$tujuan', '$isi', '$ket', '$file')");

	if ($sql) {
		# code...
		echo "berhasil";
	}else{ 
		echo "gagal";
	}
}


	// $sql = "INSERT INTO surat_masuk (nomor_surat, jenis_surat, tanggal_diterima, tujuan, isi_surat, keterangan, file) VALUES (	
	// '".$_POST['nosurat']."',
	// '".$_POST['jenissurat']."',
	// '".$_POST['diterima']."',
	// '".$_POST['tujuan']."',
	// '".$_POST['isi']."',	
	// '".$_POST['keterangan']."',
	// '".$_POST['file']."')";
 // mysqli_query($koneksi,$sql); //simpan data judul dahulu untuk mendapatkan id

 //dapatkan id terkahir
//  $query = mysqli_query($koneksi,"SELECT nomor_surat FROM surat_masuk ORDER BY nomor_surat DESC LIMIT 1");
//  $data  = mysqli_fetch_array($query);

//  //mengganti nama pdf
//  $nama_baru = "file_".$data['nomor_surat'].".pdf"; //hasil contoh: file_1.pdf
//  $file_temp = $_FILES['file']['tmp_name']; //data temp yang di upload
//  $folder    = "file"; //folder tujuan

//  move_uploaded_file($file_temp, "$folder/$nama_baru"); //fungsi upload
//  //update nama file di database
//  mysqli_query($koneksi,"UPDATE surat_masuk SET file='$nama_baru' WHERE nomor_surat='$data[nomor_surat]' ");

//  echo 

//  "<script>
//  alert('Data Berhasil Di Simpan');
//  document.location.href = '../index.php';
//  </script>";

//  // ('location:index.php?pesan=upload-berhasil";

// } else
// {
// 	echo "Gagal Upload File Bukan PDF! <a href='index.php'> Kembali </a>";
// }
