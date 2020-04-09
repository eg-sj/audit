<?php
// print_r($pwDetail);
?>

<div class="row">
	<div class="col-12 form-group">
		<h2 class="card-title ">DATA PENGAWASAN</h2>	
	</div>
</div>


<div class="form-group row">
	<div class="col-sm-2">Kegiatan</div>
	<div class="col-sm-10">
		<h6><?=$pwDetail['pw_kegiatan']?></h6>
	</div>
</div>
<div class="form-group row">
	<div class="col-sm-2">Penugasan</div>
	<div class="col-sm-10">
		<?=$pwDetail['penugasan_nama']?>
	</div>
</div>
<div class="form-group row">
	<div class="col-sm-2">Objek</div>
	<div class="col-sm-10">
		<?=$pwDetail['pw_objek']?>

	</div>
</div>
<div class="form-group row">
	<div class="col-sm-2">Lokasi</div>
	<div class="col-sm-10">
		<?=$pwDetail['pw_lokasi']?><br>
		<?=$pwDetail['kecamatan_nama']?>
	</div>
</div>
<div class="form-group row">
	<div class="col-sm-2">Wilayah</div>
	<div class="col-sm-10">
		<?=$pwDetail['wil_rm']?>
	</div>
</div>
<div class="form-group row">
	<div class="col-sm-2">Tahun</div>
	<div class="col-sm-3">
		<?=$pwDetail['tahun']?>
	</div>
</div>	
<div class="form-group row">
	<div class="col-sm-2">Sasaran</div>
	<div class="col-sm-10">
		<?=$pwDetail['pw_sasaran']?>
	</div>
</div>

<div class="form-group row">
	<div class="col-sm-2">Awal Penugasan</div>
	<div class="col-sm-10">
		<?= date_format(date_create($pwDetail['pw_tgl_awal']), 'j F Y')?>
	</div>
</div>
<div class="form-group row">
	<div class="col-sm-2">Akhir Penugasan</div>
	<div class="col-sm-10">
		<?= date_format(date_create($pwDetail['pw_tgl_akhir']), 'j F Y')?>

	</div>
</div>

<div class="form-group row">
	<div class="col-sm-2">Penyelesaian Laporan</div>
	<div class="col-sm-10">
		<?= date_format(date_create($pwDetail['pw_tgl_laporan']), 'j F Y')?>
	</div>
</div>
