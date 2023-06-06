<html>
<head>
	<title>Membuat CRUD dengan PHP MySQLi - Tutorial</title>
	<link rel="stylesheet" type="text/css" href="styledua.css">
</head>
<body>
	<main>

		<div class="form-box">
			<div class="form-value">
				<form action="action-input.php" method="POST">
					<header>
						<h3>FORM INPUT DATA SISWA STEMBA</h3>
						<p><a href="./">| Kembali |</a></p>
					</header>
                    <div class="inputbox">
						<input type="text" name="nis" required>
                        <label>NIS</label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="nama" required>
                        <label>Nama</label>
                    </div>
                    <div class="inputbox">
                        <!-- <label>Kompetensi Keahlian</label> -->
						<select name="jurusan" >
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
                        <input type="text" name="alamat" required>
                        <label>Alamat</label>
                    </div>
                    <div class="inputbox">
                        <input type="text" name="telpon" required>
                        <label>No. Telepon</label>
                    </div>
					<div class="inputbox">
                        <input type="text" name="hobi" required>
                        <label>Hobi</label>
                    </div>

                    <!-- Button -->
                    <div class="kirim">
						<input type="submit" name="Submit" value="Submit" />
						<input type="reset" value="Reset" />
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>
</html>