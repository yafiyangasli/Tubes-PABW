<h1>LAPOR!</h1>
<p>Detail laporan/Komentar</p>
<?php foreach($lapor as $dt):?>
<?= $dt['lapor'].' ';?>
<?= $dt['aspek'].' ';?>
<?= $dt['gambar'].' ';?>
<?= $dt['waktu'];?>
<?php endforeach?>