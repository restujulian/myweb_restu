<?php 
	session_start();
	include 'database.php';
	$data = new database();
	 /*Tambah admin*/
	$aksi = $_GET['act'];
		if($aksi == "login"){
			if ($data->checkMahasiswa($_POST['username'],md5($_POST['password']))) {
				foreach ($data->checkMahasiswa($_POST['username'], md5($_POST['password'])) as $mhs) {
				}
				$_SESSION['role'] = "mahasiswa";
				$_SESSION['name'] = $mhs['nama'];
				$_SESSION['nim'] = $mhs['NIM'];
				header('location:../view/?'.str_replace(" ","-",$mhs['nama']));
			} else {
				//header('location:../?'.str_replace(" ","-",$mhs['nama']));
				header('location:../?msg=incorect!!!');
			}
			

		}

?>