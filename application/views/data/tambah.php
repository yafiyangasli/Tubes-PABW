<h1>LAPOR!</h1>

<?= validation_errors();?>

<form action="" method="post">
				    
	<label for="lapor">Masukkan Keluhan/Komentar
		<br>
	<textarea name="lapor" id="lapor"></textarea>
	</label>
	<br><br>

	<label for="aspek">Aspek</label>
	<br>
	<select id="aspek" name="aspek">
		<option>Pelayanan</option>
		<option>Kesejahteraan</option>
		<option>Tatanan Kota</option>
	</select>
	<br><br>

	<label for="gambar">Gambar</label>
	<input type="text" name="gambar" id="gambar">
	<br><br>
	<button type="submit" name="tambah">Tambah data</button>
			</form>
		