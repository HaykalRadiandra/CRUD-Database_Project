<?php
	if (isset($_GET['id_siswa'])) {
		$id_siswa = $_GET['id_siswa'];
	}
	else {
		die ("Kesalahan. ID Dipilih! ");	
	}
	include "koneksi.php";
	$query	=mysqli_query($conn, "SELECT * FROM tb_siswa WHERE id_siswa='$id_siswa'");
	$data	=mysqli_fetch_array($query);
?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styletiga.css">
    <title>Membuat CRUD dengan PHP MySQLi - Tutorial</title>
    <script>
        function resetForm() {
            document.getElementById("myForm").reset();
        }
    </script>
</head>
<body>
<main>
    <div class="form-box">
        <div class="form-value">
            <form action="action-edit.php?id_siswa=<?=$id_siswa?>" method="POST" id="myForm">
                <header>
                    <h3>EDIT FORM DATA SISWA STEMBA</h3>
                    <p><a href="./">| Kembali |</a></p>
                </header>
                <div class="inputbox">
                    <input type="text" name="nis" value="<?php echo $data['nis']?>" >
                    <label>NIS</label>
                </div>
                <div class="inputbox">
                    <input type="text" name="nama" value="<?php echo $data['nama']?>">
                    <label>Nama</label>
                </div>
                <div class="inputbox">
                    <!-- <label>Kompetensi Keahlian</label> -->
                    <select name="jurusan" value="<?php echo $data['jurusan']?>">
                        <option value="-">- Pilih Kompetensi Keahlian -
                        <option value="SIJA">SIJA
                        <option value="KPBS">KPBS
                        <option value="TKP">TKP
                        <option value="TPFL">TPFL
                        <option value="TE">TE
                        <option value="TO">TO
                        <option value="TK">TK
                    </select>
                </div>
                <div class="inputbox">
                    <input type="text" name="alamat" value="<?php echo $data['alamat']?>">
                    <label>Alamat</label>
                </div>
                <div class="inputbox">
                    <input type="text" name="telpon" value="<?php echo $data['telpon']?>">
                    <label>No. Telepon</label>
                </div>
                <div class="inputbox">
                    <input type="text" name="hobi" value="<?php echo $data['hobi']?>">
                    <label>Hobi</label>
                </div>

                <!-- Button -->
                <div class="kirim">
                    <input type="submit" name="Edit" value="Edit"/>
                    <input type="reset" value="Reset" onclick="resetForm()"/>
                </div>
            </form>
        </div>
    </div>
</main>
</body>
</html>
