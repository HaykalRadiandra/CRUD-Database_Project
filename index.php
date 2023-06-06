<html>
<head>
	<title>Membuat CRUD dengan PHP MySQLi - Tutorial</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
	<script src="https://kit.fontawesome.com/7c7113a64d.js" crossorigin="anonymous"></script>
</head>
<body>
	<header>
		<h1>DATA SISWA - SISWI SMK NEGERI 7 SEMARANG</h1>
		<h2>2023 / 2024</h2>
		<div class="line"></div>
		<div class="coba1">
			<div>
				<button>
					<a href="ruang-input.php">Tambah Data</a>
				</button>
			</div>
			<div>
				<button>
					<a href="hapussemua.php?id_siswa=<?=$data['id_siswa']?>" onclick="return confirm('Apakah anda yakin menghapus semua Database anda?');">Hapus Semua</a>
				</button>
			</div>
		</div>
	</header>
	<table width="100%" align="center" cellpadding="0" cellspacing="0">
		<thead>
			<tr bgcolor="#2a2443" height="40" align="center">
                <th width="5%">No</th>&nbsp;
                <th width="8%">NIS</th>&nbsp;
                <th width="15%">Nama</th>&nbsp;
                <th width="10%">Kompetensi Keahlian</th>&nbsp;
                <th width="24%">Alamat</th>&nbsp;
                <th width="14%">Telepon</th>&nbsp;
                <th width="12%">Hobi</th>&nbsp;
                <th width="10%">Perubahan</th>&nbsp;
            </tr>
		</thead>
		<tbody>
			<?php
				include "koneksi.php";
				$query	=mysqli_query($conn, "SELECT * FROM tb_siswa ORDER BY id_siswa DESC");
				$no=0;
				while($data	=mysqli_fetch_array($query)){
				$no++
			?>
			<tr align="center" height="30">			
				<td><?php echo $no?></td>
				<td><?php echo $data['nis']?></td>
				<td><?php echo $data['nama']?></td>
				<td><?php echo $data['jurusan']?></td>
				<td><?php echo $data['alamat']?></td>
				<td><?php echo $data['telpon']?></td>
				<td><?php echo $data['hobi']?></td>
				<td>
					<div class="bun">
						<div>
							<a href="ruang-edit.php?id_siswa=<?=$data['id_siswa']?>"><i class="fa-solid fa-pen"></i></a>
						</div>
						||
						<div>
							<a href="hapus.php?id_siswa=<?=$data['id_siswa']?>" onclick="return confirm('Are you sure you want to delete == <?php echo $data['nama']?> == from Database?');"><i class="fa-solid fa-trash"></i></a>
						</div>
					</div>
				</td>
			</tr>
			<tr class="border">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
            </tr>
			<?php
				}
			?>
		</tbody>
	</table>
</body>
</html>