<?php
	include "koneksi.php";
	if (isset($_GET['id_siswa'])) {
		$id_siswa = $_GET['id_siswa'];
	}
	else {
		die ("Kesalahan. ID Dipilih!");	
	}
	$query	=mysqli_query($conn, "SELECT * FROM tb_siswa WHERE id_siswa='$id_siswa'");
	$data	=mysqli_fetch_array($query);
	$notnis	=$data['nis'];
	
	if ($_POST['Edit'] == "Edit") {
	$nis	=$_POST['nis'];
	$nama	=$_POST['nama'];
	$jurusan=$_POST['jurusan'];
	$telpon	=$_POST['telpon'];
	$alamat	=$_POST['alamat'];
	$hobi =$_POST['hobi'];
	
	$ceknis	=mysqli_num_rows (mysqli_query($conn, "SELECT nis FROM tb_siswa WHERE nis='$_POST[nis]' AND nis!='$notnis'"));
	
	if($ceknis > 0) {
	?>
		<script language="JavaScript">
			alert('Maaf, Terjadi Duplikat Input ...');
			document.location='ruang-edit.php?id_siswa=<?=$id_siswa?>';
		</script>
	<?php
	}
	else{
		$update =mysqli_query($conn, "UPDATE tb_siswa SET nis='$nis', nama='$nama', jurusan='$jurusan', telpon='$telpon', alamat='$alamat', hobi='$hobi' WHERE id_siswa='$id_siswa'");
		?>
			<script language="JavaScript">
			alert('Edit Data dari <?=$notnis?> Berhasil ...');
			document.location='./';
			</script>
		<?php
	}
}
?>