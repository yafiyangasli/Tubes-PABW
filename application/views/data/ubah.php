<h1>LAPOR!</h1>

<?= validation_errors();?>

<form action="" method="post" enctype="multipart/form-data">
				    
	<label for="lapor">Masukkan Keluhan/Komentar
		<br>
	<textarea name="lapor" id="lapor" placeholder="Masukkan keluhan anda disini..." value="<?= $keluhan['lapor'];?>"></textarea>
	</label>
	<br><br>

	<label for="aspek">Aspek</label>
	<br>
	<select id="aspek" name="aspek">
		<option>Dosen</option>
		<option>Staff</option>
		<option>Mahasiswa</option>
		<option>Infrastruktur</option>
		<option>Pengajar</option>
	</select>
	<br><br>

	<label for="gambar">Gambar</label>
	<input type="file" name="gambar" id="gambar">
	<br><br>
	<button type="submit" name="ubah">Ubah data</button>
</form>	