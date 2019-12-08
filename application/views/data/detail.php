<h1>LAPOR!</h1>
<h2>Detail laporan/Komentar</h2>
    <h3><?= $keluhan['aspek'];?></h3>
<p><?= $keluhan['lapor'];?></p>
	<br>
    <p><?= $keluhan['waktu'];?></p>
    <p>Lampiran :</p>
    <img src="<?php echo base_url();?>asset/gambar/<?php echo $keluhan['gambar'];?>" widht="400" height="550">
    <br>
    <br>
    <a href="<?=base_url();?>data/ubah/<?=$keluhan['id'];?>">ubah</a>
    <a href="<?=base_url();?>data/hapus/<?=$keluhan['id'];?>" onclick="return confirm('yakin?');">hapus</a>
    <a href="<?=base_url()?>">Back</a>

