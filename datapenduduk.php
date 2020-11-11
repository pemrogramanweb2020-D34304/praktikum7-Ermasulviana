<?php
	session_start();
	if(isset($_POST["nik"])){
		include 'connect.php';

		$nik = $_POST["nik"];
		$nama = $_POST["nama"];
		$tanggallahir = $_POST["tanggal_lahir"];
		$tempatlahir = $_POST["tempat_lahir"];
		$foto = $_FILES["foto"];

		$message	= "";

		if($nik==""){
			$message = "Nik must be filled!";
		}else if($nama==""){
			$message = "Nama must be filled!";
		}else if($tanggallahir==""){
			$message = "TanggalLahir must be filled!";
		}else if($tempatlahir==""){
			$message = "TempatLahir must be filled!";
		}else if(!isset($foto["tmp_name"]) || $foto["tmp_name"]==""){
			$message = "Foto must be chosen!";
		}else{

			$filePath = "unggah/".basename($foto["name"]);
			move_uploaded_file($foto["tmp_name"], $filePath);

			$connection->query("insert into tb_data VALUES ('','$nama','$tanggallahir','tempatlahir','$filePath')");

			$message = "Succesfully added new Data!";
		}
		$_SESSION["message"]= $message;
	}
	header("location:insert.php");
			exit();
?>