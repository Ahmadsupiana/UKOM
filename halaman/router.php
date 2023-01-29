<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));


if ($_GET['pages'] == 'surat_masuk') {
	# code...
	include'pages/surat_masuk.php';
}

if ($_GET['pages'] == 'mata_lomba') {
	# code...
	include'pages/mata_lomba.php';
}

if ($_GET['pages'] == 'disposisi') {
	# code...
	include'pages/disposisi.php';
}

if ($_GET['pages'] == 'dasboard') {
	# code...
	include'pages/dasboard.php';
}

if ($_GET['pages'] == 'keterangan') {
	# code...
	include'pages/keterangan.php';
}

if ($_GET['pages'] == 'jenis_surat') {
	# code...
	include'pages/jenis_surat.php';
}

if ($_GET['pages'] == 'peserta') {
	# code...
	include'pages/peserta.php';
}

if ($_GET['pages'] == 'laporan') {
	# code...
	include'pages/laporan.php';
}

if ($_GET['pages'] == 'cari_data') {
	# code...
	include'pages/cari_data.php';
}

if ($_GET['halaman'] == 'dasboard') {
	# code...
	include'halaman/dasboard.php';
}

if ($_GET['halaman'] == 'login') {
	# code...
	include'halaman/login.php';
}