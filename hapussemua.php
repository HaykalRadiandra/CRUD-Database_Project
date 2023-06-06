<?php
	include "koneksi.php";
    if (isset($_GET['id_siswa'])) {
		$id_siswa	=$_GET['id_siswa'];
	}
	else{
		echo "Ups! Tidak Ada ID yang Dipilih";
	}
	
	$hapus = mysqli_query($conn, "DELETE FROM tb_siswa");
	
	if ($hapus) {
		?>
		<script language="JavaScript">
			alert('Hapus Data Siswa Semua Berhasil ...');
			document.location='./';
		</script>
		<?php
	} else {
		echo "Maaf, Terjadi kesalahan dalam menghapus data siswa.";
	}
?>
