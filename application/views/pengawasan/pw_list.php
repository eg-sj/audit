
<!-- <div class="card card-lg card-body"> -->
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-right">
		Tahun  
		<select class="select" onchange="window.open(this.options[this.selectedIndex].value,'_top')">
			<?php
			$tahun_skrg=date("Y");
			$tahun_awal = $tahun_skrg-3;
			for ($i=$tahun_awal	; $i <= $tahun_skrg ; $i++) { 
				?>
				<option value="
				<?=base_url('pengawasan/index')."?tahun=".$i?>
				"
				<?php
				if($tahun==$i) { echo " selected ";}
				?>

				><?=$i?></option>
				<?php
			}

			?>

<!-- 			<option value="
				<?=base_url('nopen/index')."?refTim="?>
				"
				<?php
				if($refTim==1) { echo " selected ";}
				?>

				><?=$i?>
			</option> -->
				<?php
			?>

		</select>


	</div>
</div>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
		<h2>DATA PENGAWASAN</h2>
	</div>
</div>
<div class="row">
	<div class="col-md-12 text-right">
		<a href="<?php echo base_url('pengawasan/pw_form?tahun='.$tahun)?>" class="btn btn-primary"><i class="fas fa-plus"></i></a>
	</div>
</div>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-left">
		
<table class="table table-bordered table-inverse table-hover">
	<thead>
		<tr>
			<th class="align-middle text-center">No</th>
			<th class="align-middle text-center">Kegiatan</th>
			<!-- <th class="align-middle text-center">Penugasan</th> -->
			<th class="align-middle text-center">Objek</th>
			<th class="align-middle text-center">Lokasi</th>
			<!-- <th class="align-middle text-center">Wilayah</th> -->
			<th class="align-middle text-center">Sasaran</th>
			<th class="align-middle text-center">Tahun</th>
			<th class="align-middle text-center">Tgl Awal</th>
			<th class="align-middle text-center">Tgl Akhir</th>

<!-- 		
			<th class="align-middle text-center">Kegiatan</th>
			<th class="align-middle text-center">Sasaran</th>
			<th class="align-middle text-center">Kartu No</th>
			<th class="align-middle text-center">Tahun</th>
			<th class="align-middle text-center">Tgl Akhir</th>
			<th class="align-middle text-center">Awal Pers</th>
			<th class="align-middle text-center">Akhir Pers</th>
			<th class="align-middle text-center">Rencana Pel</th>
			<th class="align-middle text-center">Awal Pel</th>
			<th class="align-middle text-center">Real awal Pel</th>
			<th class="align-middle text-center">Akhir Pel</th>
 -->			
 			<th class="align-middle text-center">Proses</th>
		</tr>

			<!-- pw_id
			kt_tim
			pkpt_id
			pw_kegiatan
			pw_nm_objek
			pw_lokasi
			pw_sasaran
			pw_kartu_no
			tahun
			pw_tgl_awal
			pw_tgl_akhir
			pw_awal_persiapan
			pw_akhir_persiapan
			pw_rencana_pelaksanaan
			pw_awal_pelaksanaan
			pw_real_awal_pelaksanaan
			pw_akhir_pelaksanaan -->
	</thead>
	<tbody>
	<?php
		$urutt = 1;
		foreach ($pwAll as $pall):
				// $pwT = $this->Pengawasan->pwAll('dat_pw');
				// for ($i=1; $i<= 5; $i++) { 
					# code...
					// $pwTim[$i] = $this->Pengawasan->pwTim($pall['pw_id'],$i);  
				// }
	?>
		<tr>
			
			<td class="text-right"><?=$urutt.".";?></td>
			<td><?=$pall['pw_kegiatan'];?></td>
			<td><?=$pall['pw_objek'];?></td>
			<td><?=$pall['pw_lokasi'];?></td>
			<td><?=$pall['pw_sasaran'];?></td>
			<td><?=$pall['tahun'];?></td>
			<td><?=$pall['pw_tgl_awal'];?></td>
			<td><?=$pall['pw_tgl_akhir'];?></td>



			<td class="text-center">
				<a href="<?php echo base_url('pengawasan/detail?pw_id='.$pall['pw_id']);?>"><button class="badge bg-warning"><i class="fas fa-info"></i></button></a>
				<a href="<?php echo base_url('pengawasan/pw_form?pw_id='.$pall['pw_id']);?>"><button class="badge bg-primary"><i class="fas fa-edit"></i></button></a>
				<a href="<?php echo base_url('pengawasan/delete?pw_id='.$pall['pw_id']);?>"><button class="badge bg-danger"><i class="fas fa-trash"></i></button></a>
			</td>


<!-- 			<td><?=$pall['pw_kartu_no'];?></td>
			<td><?=$pall['pw_awal_pelaksanaan'];?></td>
			<td><?=$pall['pw_akhir_persiapan'];?></td>
			<td><?=$pall['pw_rencana_pelaksanaan'];?></td>
			<td><?=$pall['pw_awal_pelaksanaan'];?></td>
			<td><?=$pall['pw_real_awal_pelaksanaan'];?></td>
			<td><?=$pall['pw_akhir_pelaksanaan'];?></td> -->
		</tr>
		<?php
		$urutt++;
		
		endforeach;
		?>
	</tbody>
</table>
	</div>
</div>

<!-- </div> -->