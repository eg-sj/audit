<?php
// print_r($pwDetail);

foreach ($pwTim as $pT) {
	if($pT['kt_tim']==1) {$inspektur=$pT;}
	if($pT['kt_tim']==2) {$irban=$pT;}
	if($pT['kt_tim']==3) {$irban1=$pT;}
	if($pT['kt_tim']==4) {$irban2=$pT;}
	// if($pT['kt_tim']==5) {$irban3=$pT;}
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
<div>	
<!-- <div class="d-none d-print-block">  -->
<div class="card card-body">
<div class="row">
	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-left">
		<label>Nomor : PKP/BOS/01</label>
	</div>
	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-right">
		<label>KM-09</label>
	</div>
</div>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
		<h4><b><u>PROGRAM KERJA PEMERIKSAAN</u></b></h4>
	</div>
</div>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
		<h5><?=$pwDetail['pw_kegiatan']?></h5><br>
	</div>
</div>


				<div class="row">
					<div class="col-md-4">
					  	<h5>Nama Objek Pemeriksaan</h5>
					</div>
					<div class="col-md-8">
					 	<h5>:&nbsp;<?=$pwDetail['pw_objek']?></h5>
					</div>
				</div><div class="row">
					<div class="col-md-4">
					  	<h5>Periode yang di Pemeriksa</h5>
					</div>
					<div class="col-md-8">
						<h5>:&nbsp;Tahun Anggaran <?=$pwDetail['tahun']?></h5>
					</div>
				</div><div class="row">
					<div class="col-md-4">
					  	<h5>Dikerjakan Oleh</h5>
					</div>
					<div class="col-md-8">
					 	<h5>:&nbsp;<?=$irban2['nama']?></h5>
					</div>
				</div>
			
				<div class="row">
					<div class="col-md-12">
					  	<h5><u>Tujuan :</u></h5>
					</div>
				</div>
				<div class="row">
					<!-- <div class="col-md-1"> -->
					  	<!-- <h5>1.</h5> -->
					<!-- </div> -->&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<div class="col-md-11">
						<h5><?php
							if (isset($pwDetail['pw_tujuan'])) {

								$dasar = explode(";", $pwDetail['pw_tujuan']);
								if (count($dasar)>0) {
				# code...

									foreach ($dasar as $dsr) {
				# code...
										echo "<li>". $dsr;
									}
								}
							}

						?>
					  	<!-- <h5>........................................................................................................</h5> -->
					  </h5>
					</div>
				</div>
				
		<table class="table table-bordered table-inverse table-hover">
			<thead>
				<tr>
					<th class="align-middle text-center">No</th>
					<th class="align-middle text-center">Uraian Prosedur</th>
					<th class="align-middle text-center">Dilaksanakan Oleh</th>
					<th class="align-middle text-center">Anggaran Waktu</th>
					<th class="align-middle text-center">Realisasi Waktu</th>
					<th class="align-middle text-center">No. KKA</th>

				</tr>
				<tr>
					<th class="align-middle text-center">1</th>
					<th class="align-middle text-center">2</th>
					<th class="align-middle text-center">3</th>
					<th class="align-middle text-center">4</th>
					<th class="align-middle text-center">5</th>
					<th class="align-middle text-center">6</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="align-middle text-center"></td>
					<td class="align-middle text-center"></td>
					<td class="align-middle text-center"></td>
					<td class="align-middle text-center"></td>
					<td class="align-middle text-center"></td>
					<td class="align-middle text-center"></td>
				</tr>
			</tbody>
		</table>
<div class="row">
	<div class="col-md-1-12|auto">
	  	<br>
	</div>
</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-right">
				<h5>Tanggal Dibuat</h5>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 text-center">
				<h5>Direviu Oleh,</h5>
			</div>
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 text-center">
				<h5>Disusun Oleh,</h5>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 text-center">
				<h5><?=$irban['kt_nama']?>,</h5>
			</div>
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 text-center">
				<h5><?=$irban1['kt_nama']?>,</h5>
			</div>
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 text-center">
				<h5><?=$irban2['kt_nama']?>,</h5>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
			  	<br>
			  	<br>
			  	<br>
			  	<br>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 text-center">
				<h5><u><?=$irban['nama']?></u></h5>
				<h5>NIP. <?=$irban['nip']?> </h5>
			</div>
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 text-center">
				<h5><u><?=$irban1['nama']?></u></h5>
				<h5>NIP. <?=$irban1['nip']?></h5>
			</div>
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 text-center">
				<h5><u><?=$irban2['nama']?></u></h5>
				<h5>NIP. <?=$irban2['nip']?></h5>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
			<br>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
				<h5>Mengetahui,</h5>
			</div>
		</div>
		
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
				<h5>Inspektur Daerah Kab.Sinjai</h5>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
			  	<br>
			  	<br>
			  	<br>
			  	<br>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
				<h5><u><?=$inspektur['nama']?></u></h5>
				<h5>NIP. <?=$inspektur['nip']?></h5>
			</div>
		</div>
</div>
</div>
<?php
}
?>