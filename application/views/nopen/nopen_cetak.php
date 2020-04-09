<?php
// print_r($pwDetail);

foreach ($pwTim as $pT) {
	if($pT['kt_tim']==1) {$inspektur=$pT;}
	if($pT['kt_tim']==2) {$irban=$pT;}
}
if (isset($pwDetail['pw_tgl_awal']) AND isset($pwDetail['pw_tgl_akhir'])) {
	$tglawal = new DateTime($pwDetail['pw_tgl_awal']);
	$tglakhir = new DateTime($pwDetail['pw_tgl_akhir']);
	$day = $tglakhir->diff($tglawal)->days + 1;
	} else {
		$day = 0;
	}
 	//echo $day." hari";
 if (isset($inspektur) AND isset($irban)) {
 	# code...
 


?>

<?php	
// print_r($pwTim);
?>
<!-- <div>  -->
<div class="d-none d-print-block"> 
<div class="row">
	<div class="col-md-12 text-center">
		<h3><u>Nota Pengajuan Calon Personal Tim</u></h3>
	  	
	</div>
</div>
<br>
<div class="row">
	<div class="col-md-12">
		<h5>Yang Bertanda tangan dibawah ini :</h5>
	  	
	</div>
</div>
<div class="row">
	<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">

	</div>
	<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
		<h5>Nama</h5>
	</div>
	<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
		<h5>: <?=$irban['nama']?></h5>
	</div>
</div>
<div class="row">
	<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">

	</div>
	<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
		<h5>Pangkat/Gol</h5>
	</div>
	
	<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
		<h5>: <?=$irban['pangkat_nama']?> - <?=$irban['pangkat_golruang']?></h5>
	</div>
</div>
<div class="row">
	<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">

	</div>
	<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
		<h5>NIP</h5>
	</div>
	
	<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
		<h5>: <?=$irban['nip']?></h5>
	</div>
</div>
<div class="row">
	<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">

	</div>
	<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
		<h5>Jabatan</h5>
	</div>

	<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
		<h5>: <?=$irban['jabatan_nama']?></h5>
	</div>
</div><br>
<div class="row">
	<div class="col-md-12">
		<h5>Dengan ini mengajukan nama-nama personil Tim  :</h5>
	  	
	</div>
</div>

<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="card card-body">
		<table class="table-bordered table-inverse table-hover">
			<thead>
				<tr>
					<th class="align-middle text-center">No</th>
					<th class="align-middle text-center">Nama</th>
					<th class="align-middle text-center">Kedudukan dalam Tim</th>
					<th class="align-middle text-center">Keterangan</th>
				</tr>
			</thead>

			<?php
			$i=1;
			foreach ($pwTim as $pwt) {
			?>
			<tbody>
				<tr>
					<td class="align-middle text-center">
						<?=$i?>.	
					</td>
					<td class="align-middle">
						<?=$pwt['nama']?>	
					</td>
					<td class="align-middle">
						<?=$pwt['jabatan_nama']?>	
					</td>
					<td class="align-middle text-center"></td>
					
				</tr>
				<?php
		$i++;
		}
	?>
			</tbody>
		</table>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-justify">
		<h5>Rencana melaksanakan <?=$pwDetail['pw_kegiatan']?>, <?=$pwDetail['pw_objek']?>  selama <?=$day." hari"?> tanggal <?=$this->gen_model->urai_tgl($pwDetail['pw_tgl_awal'],$pwDetail['pw_tgl_akhir'])?></h5>
	</div>
</div><br>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<h5>Demikian nota pengajuan ini kami ajukan untuk bahan selanjutnya.</h5>
	</div>
</div>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-right">
		<h5>Sinjai, <?php if (isset($pwDetail['nopen_tgl'])) {echo $this->gen_model->urai_tgl($pwDetail['nopen_tgl']);} ?></h5>
	</div>
</div>
<div class="row">
	<div class="col-xs-6 col-sm-6 col-md-8 col-lg-8 text-left">
		<h5>Ruang Disposisi Inspektur :</h5>
	</div>
	<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 text-center">
		<h5>Inspektur Pembantu Wilayah I</h5>
	</div>
</div><br><br><br>
<div class="row">

	<div class="col-xs-6 col-sm-6 col-md-8 col-lg-8 text-left">
	</div>
	<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 text-center">
		<h5><u><?=$irban['nama']?></u></h5>
		<h5>Nip. <?=$irban['nip']?></h5>

	</div>
</div><br>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
		<h5>Menyetujui</h5>
	</div>
</div>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
		<h5>Inspektur Daerah Kabupaten Sinjai,</h5>
	</div>
</div><br><br><br>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
		<h5><u><?=$inspektur['nama']?></u></h5>
	</div>
</div>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
		<h5>Pangkat : <?=$inspektur['pangkat_nama']?> - <?=$inspektur['pangkat_golruang']?></h5>
	</div>
</div>
</div>
<?php
}

?>





