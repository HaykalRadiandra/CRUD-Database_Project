<?php
	include "koneksi.php";
	if (isset($_GET['id_siswa'])) {
		$id_siswa	=$_GET['id_siswa'];
	}
	else{
		echo "Ups! Tidak Ada ID yang Dipilih";
	}
	
	if (!empty($id_siswa) && $id_siswa != "") {
		$hapus =mysqli_query($conn, "DELETE FROM tb_siswa WHERE id_siswa='$id_siswa'");
			?>
				<script language="JavaScript">
				alert('Hapus Data Siswa Berhasil ...');
				document.location='./';
				</script>
			<?php		
	}
?>