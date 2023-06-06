<?php
	date_default_timezone_set("Asia/jakarta");
	$conn = mysqli_connect("localhost", "root", "", "biodata_siswa");
	if (mysqli_connect_errno()){
		echo "Ups! Koneksi Database Gagal : --> " . mysqli_connect_error();
	}
?>