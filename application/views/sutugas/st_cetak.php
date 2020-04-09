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

	<!-- <div>  -->
		<div class="d-none d-print-block"> 

			<!-- <h2>di sini kop unit gaeess</h2> --><div  class="uk-14">


				<h5 class="text-center"><u>SURAT TUGAS</u></h5>
				<p class="text-center"> NO. <?=$pwDetail['stugas_no']?></p>



				<div class="row">
					<div class="col-sm-1"></div>
					<div class="col-sm-2">DASAR</div>
					<div class="col-sm-1 text-right">:&nbsp;&nbsp;</div>
					<div class="col-sm-8 text-justify">
						<?php
						if (isset($pwDetail['pw_dasar'])) {

							$dasar = explode(";", $pwDetail['pw_dasar']);
							if (count($dasar)>0) {
					# code...

								foreach ($dasar as $dsr) {
					# code...
									echo "<li>". $dsr;
								}
							}
						}
			// print_r($dasar);
						?>
					</div>
				</div>


				<br/>
				<h5 class="text-center">MENUGASKAN :</h5>
				<br/>

				<div class="row">
					<div class="col-sm-1"></div>
					<div class="col-sm-2">KEPADA</div>
					<div class="col-sm-1 text-right">:</div>
					<div class="col-sm-8 text-left ">
						<!-- <div class="col-sm-7"> -->
							<?php
							$i=1;
							foreach ($pwTim as $pwt) {
								?>
								<div class="row">
									<div class="col-sm-1 text-right"><?=$i."."?></div>
									<div class="col-sm-2">Nama</div>
									<div class="col-sm-1 text-right">:</div>



									<?=$pwt['nama']?>	

								</div>
								<!-- </div> -->
								<div class="row">
									<div class="col-sm-1 text-right"></div>
									<div class="col-sm-2">NIP</div>
									<div class="col-sm-1 text-right">:</div>



									<?=$pwt['nip']?>	





								</div>
								<div class="row">
									<div class="col-sm-1 text-right"></div>
									<div class="col-sm-2">Pangkat</div>
									<div class="col-sm-1 text-right">:</div>



									<?=$pwt['pangkat_nama']?> - <?=$pwt['pangkat_golruang']?>



								</div>
								<div class="row  mb-2">
									<div class="col-sm-1 text-right"></div>
									<div class="col-sm-2">Jabatan</div>
									<div class="col-sm-1 text-right">:</div>

									<?=$pwt['jabatan_nama']?>	



								</div>
								<?php
								$i++;
							}
							?>
							



						</div>
					</div>


					<div class="row">
						<div class="col-sm-1"></div>
						<div class="col-sm-2">MAKSUD&nbsp;/&nbsp;TUJUAN</div>
						<div class="col-sm-1 text-right">:&nbsp;</div>
						<div class="col-sm-8 text-left">
							<?php
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
						</div>
					</div>

					<div class="row">
						<div class="col-sm-1"></div>
						<div class="col-sm-2">WAKTU&nbsp;/&nbsp;LAMA</div>
						<div class="col-sm-1 text-right">:</div>
						<div class="col-sm-8 text-left">
							<?=$day." Hari"?> / <?=$this->gen_model->urai_tgl($pwDetail['pw_tgl_awal'],$pwDetail['pw_tgl_akhir'])?></div>
						</div>


						<div class="row">
							<div class="col-sm-1"></div>
							<div class="col-sm-2">TEMPAT&nbsp;TUJUAN</div>
							<div class="col-sm-1 text-right">:</div>
							<div class="col-sm-8 text-left">
								Tassililu Kecamatan Sinjai Barat			<!-- <br /><br /> -->
							</div>
						</div>


						

						<div class="row">
							<div class="col-sm-1"></div>
							<div class="col-sm-2">BIAYA&nbsp;DIBEBANKAN&nbsp;KEPADA</div>
							<div class="col-sm-1 text-right">:</div>
							<div class="col-sm-8 text-left">
							APBD		<!-- <br /><br /> -->
							</div>
						</div>

							<br/>


							<div class="row">
								<div class="col-sm-7">
								</div>
								<div class="col-sm-5">
									<p> DIKELUARKAN DI SINJAI<br> PADA TANGGAL <?php if (isset($pwDetail['stugas_tgl'])) {echo $this->gen_model->urai_tgl($pwDetail['stugas_tgl']);} ?></p>
								</div>
							</div>
							<!-- <br> -->


							<div class="row">
								<div class="col-sm-7">
								</div>
								<div class="col-sm-5 text-left">
									<p> 

										INSPEKTUR DAERAH KABUPATEN&nbsp;SINJAI

									</p>
								</div>
							</div>
							<br><br>
							<div class="row">
								<div class="col-sm-7">
								</div>
								<div class="col-sm-5 text-left">
									<b><u><?=$inspektur['nama']?></b></u> 
									<br />Pangkat : <?=$inspektur['pangkat_nama']?><br />NIP. <?=$inspektur['nip']?>
								</div>
							</div>

						</div>
						<!-- </div> -->
					</div>
				</div>

					<?php
				}

				?>





