<?php
	include "koneksi.php";
	if ($_POST['Submit'] == "Submit") {
	$nis	=$_POST['nis'];
	$nama	=$_POST['nama'];
	$jurusan=$_POST['jurusan'];
	$alamat	=$_POST['alamat'];
	$telpon	=$_POST['telpon'];
	$hobi =$_POST['hobi'];
	
	$ceknis	=mysqli_num_rows (mysqli_query($conn, "SELECT nis FROM tb_siswa WHERE nis='$_POST[nis]'"));
	
	if($ceknis > 0) {
	?>
		<script language="JavaScript">
			alert('Maaf, Terjadi Duplikat Input ...');
			document.location='ruang-input.php';
		</script>
	<?php
	}
		
	else{
		$insert =mysqli_query($conn, "INSERT INTO tb_siswa (nis, nama, jurusan, telpon, alamat, hobi) VALUES ('$nis', '$nama', '$jurusan', '$telpon', '$alamat', '$hobi')");
		?>
			<script language="JavaScript">
			alert('Input Data Siswa Berhasil ...');
			document.location='./';
			</script>
		<?php
		}
	}
?>