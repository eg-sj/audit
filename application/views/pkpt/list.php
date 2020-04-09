
<br>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-right">
		Tahun  
		<select class="select" onchange="window.open(this.options[this.selectedIndex].value,'_top')">
			<?php
			$tahun_skrg=date("Y");
			$tahun_awal = $tahun_skrg-3;
			$tahun_akhir = $tahun_skrg+1;
			for ($i=$tahun_awal	; $i <= $tahun_akhir ; $i++) { 
				?>
				<option value="
				<?=base_url('pkpt/index')."?tahun=".$i?>
				"
				<?php
				if($tahun==$i) { echo " selected ";}
				?>

				><?=$i?></option>
				<?php
			}

			?>

		</select>


	</div>
</div>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center" >
		<h3>
			PROGRAM KERJA PENGAWASAN TAHUNAN PKPT INSPEKTORAT DAERAH KABUPATEN SINJAI TAHUN ANGGARAN <?=$tahun?>
		</h3>
	</div>
<!-- 	<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
		<h5>LAMPIRAN I<br>NOMOR<br>TANGGAL<br>TENTANG</h5>
	</div>
	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
		<h5>: KEPUTUSAN BUPATI SINJAI<br>: 700/   /2019<br>:   DESEMBER 2019<br>: PROGRAM KERJA PENGAWASAN TAHUNAN PKPT INSPEKTORAT DAERAH KABUPATEN SINJAI TAHUN ANGGARAN 2020</h5>
	</div>
 -->	

</div>
<div class="row">

	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-right" >

		<a href="<?=base_url('pkpt/form?pkpt_id=')?>"><button class="button btn-lg btn-primary"><i class="fas fa-plus"></i></button></a>
		
		<!-- <a href="<?=base_url('pkpt/form')?>"><i class="fas fa-plus"></i></a> -->
	</div>
</div>
<?php
if(empty($pkptAll) or is_null($pkptAll))
{
	?>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
				Belum/Tidak ada data PTKP Tahun <?=$tahun?>
			</div>
		</div>
	<?php

} else
{
?>


<br>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<!-- <div class="card card-body"> -->
		<table class="table table-bordered table-inverse table-hover">
			<thead>
				<tr>
					<th rowspan="2" class="align-middle text-center">No Urut</th>
					<th rowspan="2" class="align-middle text-center">Objek Pemeriksaan</th>
					<th rowspan="2" class="align-middle text-center"> Jenis Penugasan</th>
					<th rowspan="2" class="align-middle text-center">Lokasi Pengawasan</th>
					<th rowspan="2" class="align-middle text-center">RMP RPL</th>
					<th colspan="3" class="align-middle text-center">Hari Produktif
					</th>
					<th colspan="2" class="align-middle text-center">Dana
					</th>
					<th rowspan="2" class="align-middle text-center">Output Jumlah</th>
					<th rowspan="2" class="align-middle text-center">Actions</th>

				</tr>
				<tr>
					<th class="align-middle text-center">Peran </th>
					<th class="align-middle text-center">Orang</th>
					<th class="align-middle text-center">Hari Pemeriksaan</th>
					<th class="align-middle text-center">Tarif Pemeriksaan</th>
					<th class="align-middle text-center">Total</th>
				</tr>
				<tr class="bg-secondary">
					<th class="align-middle text-center">1</th>
					<th class="align-middle text-center">2</th>
					<th class="align-middle text-center">3</th>
					<th class="align-middle text-center">4</th>
					<th class="align-middle text-center">5</th>
					<th class="align-middle text-center">6</th>
					<th class="align-middle text-center">7</th>
					<th class="align-middle text-center">8</th>
					<th class="align-middle text-center">9</th>
					<th class="align-middle text-center">10</th>
					<th class="align-middle text-center">11</th>
					<th class="align-middle text-center">12</th>
				</tr>
			</thead>
			<tbody>

			<?php
			$urut = 1;
			foreach($pkptAll as $pall):
				if ($pall['status']) {

				$refTim = $this->pkptModel->refAll('ref_tim');
				for ($i=1; $i <= 5; $i++) { 
				$pkptTim[$i] = $this->pkptModel->pkptTim($pall['pkpt_id'],$i);
				// echo 'jml = '.count($pkptTim[$i]);
				}


			?>
				<tr>
					<td class="text-right"><?=$urut.".";?></td>
					<td><?=$pall['pkpt_objek'];?></td>
					<td><?=$pall['penugasan_nama'];?></td>
					<td><?=$pall['wil_nama'];?></td>
					<td>
						<?=date_format(date_create($pall['rmp']),"d M Y");?> 
						/ <br>
						<?=date_format(date_create($pall['rpl']),"d M Y");?> 
					</td>
					<td>
						<?php echo 'PM';?><br> 
						<?php echo 'WPM';?><br> 
						<?php echo 'PT';?><br> 
						<?php echo 'KT';?><br> 
						<?php echo 'AT';?><br> 
					</td>

					<td class="text-right">
						<?php $total = 0; ?>
					<?php
					// print_r($pkptTim[1]);
					?>
						<?php echo $pkptTim[1]['jml_tim']; $total = $total+$pkptTim[1]['jml_tim'];?><br> 
						<?php echo $pkptTim[2]['jml_tim']; $total = $total+$pkptTim[2]['jml_tim'];?><br> 
						<?php echo $pkptTim[3]['jml_tim']; $total = $total+$pkptTim[3]['jml_tim'];?><br> 
						<?php echo $pkptTim[4]['jml_tim']; $total = $total+$pkptTim[4]['jml_tim'];?><br> 
						<?php echo $pkptTim[5]['jml_tim']; $total = $total+$pkptTim[5]['jml_tim'];?><br> 
						<strong>
							
						<?php echo number_format($total, 0, ",", ".");?> 
						</strong>
					</td>
					<td class="text-right">
						<?= $pkptTim[1]['jml_hari'];?><br> 
						<?= $pkptTim[2]['jml_hari'];?><br> 
						<?= $pkptTim[3]['jml_hari'];?><br> 
						<?= $pkptTim[4]['jml_hari'];?><br> 
						<?= $pkptTim[5]['jml_hari'];?><br> 
					</td>
					<td class="text-right">
						<?php $total = 0; ?>
						<?php echo number_format($pkptTim[1]['tarif'], 0, ",", "."); $total=$total + $pkptTim[1]['tarif'];?><br> 
						<?php echo number_format($pkptTim[2]['tarif'], 0, ",", "."); $total=$total + $pkptTim[2]['tarif'];?><br> 
						<?php echo number_format($pkptTim[3]['tarif'], 0, ",", "."); $total=$total + $pkptTim[3]['tarif'];?><br> 
						<?php echo number_format($pkptTim[4]['tarif'], 0, ",", "."); $total=$total + $pkptTim[4]['tarif'];?><br> 
						<?php echo number_format($pkptTim[5]['tarif'], 0, ",", "."); $total=$total + $pkptTim[5]['tarif'];?><br>
						<strong>
						<?php echo number_format($total, 0, ",", ".");?> 
						</strong>
					</td>
					<td class="text-right">
						<?php $total = 0; ?>
						<?php echo number_format($pkptTim[1]['total_tarif'], 0, ",", "."); $total=$total + $pkptTim[1]['total_tarif'];?><br> 
						<?php echo number_format($pkptTim[2]['total_tarif'], 0, ",", "."); $total=$total + $pkptTim[2]['total_tarif'];?><br> 
						<?php echo number_format($pkptTim[3]['total_tarif'], 0, ",", "."); $total=$total + $pkptTim[3]['total_tarif'];?><br> 
						<?php echo number_format($pkptTim[4]['total_tarif'], 0, ",", "."); $total=$total + $pkptTim[4]['total_tarif'];?><br> 
						<?php echo number_format($pkptTim[5]['total_tarif'], 0, ",", "."); $total=$total + $pkptTim[5]['total_tarif'];?><br> 
						<strong>
						<?php echo number_format($total, 0, ",", ".");?> 
						</strong>
					</td>


					<td><?=$pall['pkpt_laporan']?> <?=$pall['penugasan_laporan']?> </td>
					<td>
						<a class="badge bg-primary" href="<?=base_url('pkpt/form?pkpt_id='.$pall['pkpt_id'])?>" role="button">
							<i class="fas fa-edit"></i>
						</a>
						
						<a href=""></a><button class="badge bg-danger"><i class="fas fa-trash"></i></button></a>
					</td>
				</tr>
			<?php
			$urut++;
			}
			endforeach;
			?>
			</tbody>
		</table>
	<!-- </div> -->
	</div>
</div>
<?php
}
?>