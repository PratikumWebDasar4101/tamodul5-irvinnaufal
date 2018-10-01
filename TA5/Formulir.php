<?php 

if (isset($_POST['error'])){
	$error=$_POST['error'];
	$pesan="";
	if ($error=="variabel_belum_diset"){
		$pesan="<h3 style='color: red' >Maaf, anda harus mengakses halaman ini dari Formulir</h3>";
	}
	if ($error=="nama_kosong"){
		$pesan="<h3 style='color: red'>Maaf, anda harus mengisi nama</h3>";
	}
	if ($error=="nama_harus_huruf"){
		$pesan="<h3 style='color: red'>Maaf, nama harus berupa huruf</h3>";
	}
} else{
	$error="";
}
?>
<p style="color: red"></p>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<center>
		<h1>FORMULIR </h1>
		<?php error_reporting(0);
			echo $pesan;
			  ?>
		<form  action="proses.php" method="POST" enctype="multipart/form-data">
			<table>
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="number"  name="nim" maxlength="10"  required ></td>
			</tr>
			<tr>
				<td></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama"  minlength="1" maxlength="25" ></td>
				<td>
			  	</td>

			</tr>
			<tr>
				<td></td>
			</tr>
			<tr>
				<td>Email</td>
				<td>:</td>
				<td><input type="text" name="email"  placeholder="Enter Valid Email Address" ></td>
			</tr>
			<tr>
				<td></td>
			</tr>
			<tr>
				<td>Jenis Kelamin:</td>
				<td>:</td>
				<td ><input type="radio" name="JK" value="Perempuan" required>Perempuan 
					 <input type="radio" name="JK" value="Laki - Laki" required>Laki - Laki
				</td>
			</tr>
			<tr>
				<td>Program Studi</td>
				<td>:</td>
				<td>
					<select name="prodi">
						<option>Manajemen Informatika</option>		
						<option>Manajemen Bisnis Teknologi Informasi</option>
						<option>Ilmu Komputasi</option>
						<option>Akuntansi</option>
						<option>Sistem Multimedia</option>
						<option>Perhotelan</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Fakultas</td>
				<td>:</td>
				<td>
					<select name="fakultas">
						<option>Fakultas Ilmu Terapan</option>		
						<option>Faklutas Industri Kreatif</option>
						<option>Fakultas Ekonomi Bisnis</option>
						<option>Fakultas Komunikasi Bisnis</option>
						<option>Fakultas Rekayasa Industri</option>
						<option>Fakultas Teknik Elektro</option>
						<option>Fakultas Informatika</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Hobi</td>
				<td>:</td>
				<td>
					<input type="checkbox" name="hobi[]" value="Basket" >Basket
					<input type="checkbox" name="hobi[]" value="Memancing">Memancing
					<input type="checkbox" name="hobi[]" value="Main Bola">Main Bola
				</td>	
			</tr>
			<tr>
				<td></td>
			</tr>
			<tr>
				<td>Pilih Foto</td>
				<td>:</td>
				<td>
					<input name="pict" type="file" accept="image/*">
				</td>
			</tr>

			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="upload" id="upload" value="Kirim" style="width: 120px"></td>
			</tr>
		</table>
	</form>
	</center>

</body>
</html>
	