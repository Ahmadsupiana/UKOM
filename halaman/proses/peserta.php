<?php

include '../../koneksi/koneksi.php';


if ($_POST['action'] == 'simpan_data'){

	$id = $_POST['id'];
	$pengguna = $_POST['pengguna'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$level = $_POST['level'];

	$sql = mysqli_query($koneksi, "INSERT INTO peserta VALUES ('$id', '$pengguna', '$username', '$password', '$level')");

	if ($sql) {
		# code...
		echo "berhasil";
	}else{ 
		echo "gagal";
	}
}

if ($_POST['action'] == 'hapus') {
		# code...
	$id_pengguna = $_POST['id'];

	$sql = mysqli_query($koneksi, "DELETE FROM peserta WHERE ID_Peserta = '$id_pengguna'");


	if ($sql) {
			# code...
		$res = [
			'pesan' => 'berhasil'
		];
	}else {
		$res = [
			'pesan' => 'gagal'
		];
	}

	echo json_encode($res);
}

if ($_POST['action'] == 'simpan_edita') {
		# code...
		$id= $_POST['id']; 
		$pengguna = $_POST['pengguna'];
		$user = $_POST['user'];
		$pass = $_POST['pass'];
		$level = $_POST['level'];

		$sql = mysqli_query ($koneksi, "UPDATE peserta SET Nama_Sekolah = '$pengguna', Nama_Gugus = '$user', Nama_Kordinator = '$pass', Kontak_Person = '$level' WHERE ID_Peserta = '$id'");

		if ($sql) {
			# code...
			$res = [
				'pesan' => 'berhasil'
			];
		}else {
			$res = [
				'pesan' => 'gagal'
			];
		}

		echo json_encode($res);

	}
