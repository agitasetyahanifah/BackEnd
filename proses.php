<?php 
include 'database.php';
$db = new database();

$aksi = $_GET['aksi'];
if($aksi == "tambah"){
	$db->input($_POST['nik'],$_POST['nama'],$_POST['jenis'],$_POST['alamat'],$_POST['status'],$_POST['pekerjaan'],$_POST['kewarganegaraan'],$_POST['tempat'],$_POST['tgl'],$_POST['golDarah']);
	header("location:tampil.php");
}elseif($aksi == "hapus"){ 	
	$db->hapus($_GET['id']);
	header("location:tampil.php");
}elseif($aksi == "update"){
	$db->update($_POST['id'],$_POST['nik'],$_POST['nama'],$_POST['jenis'],$_POST['alamat'],$_POST['status'],$_POST['pekerjaan'],$_POST['kewarganegaraan'],$_POST['tempat'],$_POST['tgl'],$_POST['golDarah']);
	header("location:tampil.php");
}
?>