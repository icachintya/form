<?php
$koneksi=mysqli_connect('localhost','root','','ica_chintyasari');
$nis=$_POST['nisinput'];
$namadepan=$_POST['namadepan_input'];
$namabelakang=$_POST['namabelakang_input'];
$tempatlahir=$_POST['tempatlahir_input'];
$tanggallahir=$_POST['tanggallahir_input'];
$kelamin=$_POST['kelamin_input'];
$hobby=implode(",", $_POST['hobbyinput']);
$alamat=$_POST['alamatinput'];

$queri=mysqli_query($koneksi,"INSERT INTO daftar (nis,nama_depan,nama_belakang,tempat_lahir,tanggal_lahir,kelamin,hobby,alamat)
VALUES('$nis','$namadepan','$namabelakang','$tempatlahir','$tanggallahir','$kelamin','$hobby','$alamat')");

if($queri) {
	echo '<script>alert("Data berhasil disimpan. Terimakasih.")</script>';
	exit;
} else {
	
	echo mysqli_error($koneksi);
	echo '<script>alert("Data GAGAL disimpan")</script>';
	exit;
}

?>