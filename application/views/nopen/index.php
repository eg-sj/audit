<?php
	// foreach ($pwTim as $pwT) {
	// 	print_r($pwT);
	// 	break;
	// }

?>
<div class="d-print-none">

	<!-- <div class="form-group row">
		<div class="col-12 text-right">
			<button onclick="window.print()" class="btn btn-sm btn-primary"><i class="fas fa-print"></i></button>
		</div>
	</div> -->
	<div class="card card-secondary ">
		<div class="card-header row">
			<!-- <h2 class="col-3 card-title" ><b>TIM</b></h2> -->
			<!-- <div class="form-group"> -->
				<h2 class="col-10 card-title" ><b>TIM</b></h2>
				<div class="col-2 text-right">
					<div class="bd-example bd-example-padded-bottom">
						<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#gridSystemModal">
							<i class="fas fa-plus"></i>
						</button>
					</div>
				</div>
			<!-- </div> -->
		</div>
		<div class="card-body">
			<?php
			$this->load->view("nopen/np_form1");
			?>

			<div class="form-group row">
				<div class="col-12">
					<table class="table stable-hover">
						<thead>
							<td>No.</td>
							<td>Jabatan Tim</td>
							<td>Nama</td>
							<td>Pangkat/Gol</td>
							<td>Jabatan</td>
							<td>Proses</td>
						</thead>



						<?php
						$i=1;
						foreach ($pwTim as $pwT) {

							?>
							<tr>
								<td class="text-right">
									<?=$i?>.		
								</td>
								<td>
									<?=$pwT['kt_nama']?>		
								</td>
								<td>
									<?=$pwT['nama']?>		
								</td>
								<td>
									<?=$pwT['pangkat_nama']?> <?=$pwT['pangkat_golruang']?>		
								</td>
								<td>
									<?=$pwT['jabatan_nama']?>		
								</td>
								<td>

									<a href="<?=base_url('nopen/np_form?pw_tim_id='.$pwT['pw_tim_id']);?>"><button  class="badge bg-primary"><i class="fas fa-edit"></i></button></a>
									<a href="<?=base_url('nopen/delete?pw_id='.$pwT['pw_id'].'&pw_tim_id='.$pwT['pw_tim_id']);?>"> <button  class="badge bg-danger"><i class="fas fa-trash"></i></button></a>
								</td>
							</tr>
							<?php
							$i++;
						}
						?>
					</table>
				</div>
			</div>
		</div>
	</div>
	<!-- nota pengajuan -->
	<div class="card card-secondary ">
		<div class="card-header row">
			<h2 class="col-3 card-title" ><b>NOTA PENGAJUAN</b></h2>
			<div class="col-9 text-right">
				<button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#editmodal" ><i class="fas fa-edit"></i></button>	

				<button onclick="window.print()" class="btn btn-sm btn-primary"><i class="fas fa-print"></i></button>
			</div>
		</div>
		<div class="card-body">
			<div class="form-group row">
				<div class="col-3 ">No Nota Pengajuan</div>
				<div class="col-2 text-left">
					<?php  if (isset($pwDetail['nopen_no'])) {echo $pwDetail['nopen_no'];}?></div>
				</div>
				<div class="form-group row">	
					<div class="col-3 ">Tanggal Nota Pengajuan</div>
					<div class="col-6 text-left"><?php if (isset($pwDetail['nopen_tgl'])) {echo $this->gen_model->urai_tgl($pwDetail['nopen_tgl']);} ?>
				</div>
			</div>
		</div>
	</div>
	<!-- surat tugas -->
	

</div>

<?php
$this->load->view("nopen/np_form2");
?>