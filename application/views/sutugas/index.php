<br>
	<?php
		$this->load->view("sutugas/st_form");
	?>

<div class="d-print-none">

	<div class="card card-secondary ">
		<div class="card-header row">
			<h2 class="col-3 card-title" ><b>SURAT TUGAS</b></h2>
			<div class="col-9 text-right">
				<button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#tambahdasar" title="edit" ><i class="fas fa-edit"></i></button>
				
				<a class="btn btn-sm btn-primary" onclick="window.print()" role="button" title="cetak" href=""><i class="fas fa-print"></i></a>
				<!-- <button onclick="window.print()" class="btn btn-sm btn-primary"> -->
				</div>	
		</div>
		<div class="card-body">
		<div class="form-group row">
			<div class="col-3 ">Nomor Surat Tugas</div>
			<div class="col-9 text-left">

				<?php  if (isset($pwDetail['stugas_no'])) {echo $pwDetail['stugas_no'];}?>
			</div>
			
		</div>
		<div class="form-group row">
			<div class="col-3 ">Tanggal Surat Tugas</div>
			<div class="col-9 text-left">

				<?php if (isset($pwDetail['stugas_tgl'])) {echo $this->gen_model->urai_tgl($pwDetail['stugas_tgl']);} ?>
			</div>
			
		</div>
		<div class="form-group row">
				<div class="col-3 ">DASAR</div>
				<div class="col-9 text-left"><?php
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
		<div class="form-group row">
			<div class="col-3 ">TUJUAN</div>
			<div class="col-9 text-left"><?php
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
	</div>
	</div>
</div>
<!-- </div> -->
<!-- <div class="card card-body">
<div class="row">
	<div class="col-md-12 text-center">
		<h2><u>DAFTAR SURAT TUGAS</u></h2>
	</div>
</div>

<div class="form-group row">
	<label class="col-sm-1 col-form-label">Tahun </label>
		<div class="col-sm-11">
		<select>
			<option>Tahun</option>
			<option>2020</option>
			<option>2021</option>
		</select>
	</div>
</div>
<div class="form-group row">
	<label class="col-sm-1 col-form-label">OPD</label>
		<div class="col-sm-11">
		<select>
			<option>Nama OPD</option>
			<option>Dinas Komumikasi Informatika dan Persandian</option>
			<option>Dinas Kesehatan</option>
		</select>
	</div>
</div>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-right">
		<a href="#" ><h3><i class="fas fa-plus"></i></h3></a>
	</div>
</div>
<table class="table table-bordered table-inverse table-hover">
	<thead>
		<tr class="alert-secondary">
			<th class="align-middle text-center">No</th>
			<th class="align-middle text-center">No/Tgl Surat</th>
			<th class="align-middle text-center">Tanggal</th>
			<th class="align-middle text-center">Tujuan</th>
			<th class="align-middle text-center">Yang Ditugaskan</th>
			<th class="align-middle text-center">Proses</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td class="align-middle text-center">
				<a href="#"><button class="badge bg-danger"><i class="fas fa-trash"></i></button></a>
			</td>
		</tr>
	</tbody>
</table>
</div> -->