<h1>LAPOR!</h1>
<form action="" method="post">

<input type="text" name="keyword" id="keyword" placeholder="cari...">
<button type="submit">Submit</button>
</form>
<?php if($this->session->flashdata('flash')):?>
<div>Data <strong>berhasil</strong> ditambahkan!<?= $this->session->flashdata('flash');?>
</div>
<?php endif;?>
<br>
<a href="<?=base_url()?>data/tambah">Buat laporan</a>
<p>laporan/komentar</p>
<ul>
<?php foreach($lapor as $dt):?>
<?= $dt['lapor'].' ';?>
<?= $dt['aspek'].' ';?>
<?= $dt['gambar'].' ';?>
<?= $dt['waktu'].' ';?>
<li>
	
	<a href="<?=base_url()?>data/detail/<?=$dt['id']; ?>">detail..</a>

</li>
<br>
<?php endforeach?>
</ul>