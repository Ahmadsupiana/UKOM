<?php

include '../../koneksi/koneksi.php';


if ($_POST['action'] == 'simpan_data'){

	$id = $_POST['id'];
	$pengguna = $_POST['pengguna'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$level = $_POST['level'];
	$HK = $_POST['HK'];
	$GTH = $_POST['GTH'];

	$sql = mysqli_query($koneksi, "INSERT INTO Mata_Lomba VALUES ('$id', '$pengguna', '$username', '$password', '$level', '$HK', '$GTH')");

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

	$sql = mysqli_query($koneksi, "DELETE FROM Mata_Lomba WHERE LKBBT = '$id_pengguna'");


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
		$HK1 = $_POST['HK1'];
		$GTH1 = $_POST['GTH1'];

		$sql = mysqli_query ($koneksi, "UPDATE Mata_Lomba SET Pioneering = '$pengguna', Semaphore_Slide = '$user', Semaphore_Dance = '$pass', Puzzle_Flag= '$level', Hasta_Karya= '$HK1', Guest_The_Hero = '$GTH1' WHERE LKBBT = '$id'");

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
