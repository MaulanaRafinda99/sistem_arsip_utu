<?php
include '../koneksi.php';

$nama = $_POST['nama'];
$username = $_POST['username'];
$password = md5($_POST['password']);

$rand = rand();
$allowed = array('png', 'jpg', 'jpeg');
$filename = $_FILES['foto']['name'];

if ($filename == "") {
	$query = "INSERT INTO admin (admin_nama, admin_username, admin_password, admin_foto) VALUES (?, ?, ?, '')";
	$stmt = $koneksi->prepare($query);
	$stmt->bind_param("sss", $nama, $username, $password);
	$stmt->execute();
	header("location:admin.php");
} else {
	$ext = pathinfo($filename, PATHINFO_EXTENSION);

	if (!in_array($ext, $allowed)) {
		header("location:admin.php?alert=gagal");
	} else {
		$newFileName = $rand . '_' . $filename;
		if (move_uploaded_file($_FILES['foto']['tmp_name'], '../gambar/admin/' . $newFileName)) {
			$query = "INSERT INTO admin (admin_nama, admin_username, admin_password, admin_foto) VALUES (?, ?, ?, ?)";
			$stmt = $koneksi->prepare($query);
			$stmt->bind_param("ssss", $nama, $username, $password, $newFileName);
			$stmt->execute();
			header("location:admin.php?alert=success");
		} else {
			header("location:admin.php?alert=danger");
		}
	}
}
