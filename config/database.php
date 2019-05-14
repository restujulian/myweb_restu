<?php
class database{
 
	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "mahasiswa";
	var $connect = false;
 
	function __construct(){ //untuk memberi nilai awal dari properti
		$this->connect = mysqli_connect($this->host, $this->uname, $this->pass, $this->db);
	}
	function checkMahasiswa($username, $password){
		$sql = "SELECT * FROM `mahasiswa` where username = '$username' AND password = '$password'";
		$d= mysqli_query($this->connect, $sql);
		$hasil = array();
		while($row = mysqli_fetch_array($d)){
			$hasil[] = $row;
		}
		return $hasil;
	}
	function showMahasiswa($nim){
		$sql = "SELECT * FROM `mahasiswa` where NIM = '$nim'";
		$d= mysqli_query($this->connect, $sql);
		$hasil = array();
		while($row = mysqli_fetch_array($d)){
			$hasil[] = $row;
		}
		return $hasil;
	}
	function delimage($i){
		mysqli_query($this->connect,"DELETE FROM `galeri` WHERE id_galeri = '$i'");
	}
}
?>