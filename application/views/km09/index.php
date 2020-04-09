<?php
		$this->load->view("km09/km9_form");
?>
<div class="d-print-none">
		<div class="card card-secondary ">
		<div class="card-header row">
			<h2 class="col-3 card-title" ><b>KENDALI MUTU 9</b></h2>
			<div class="col-9 text-right">
				<button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#tambahkm9" title="edit" ><i class="fas fa-edit"></i></button>
				
				<a class="btn btn-sm btn-primary" onclick="window.print()" role="button" title="cetak" href=""><i class="fas fa-print"></i></a>
				<!-- <button onclick="window.print()" class="btn btn-sm btn-primary"> -->
				</div>	
		</div>
		<div class="card-body">
		<div class="row">
					<div class="col-md-12 text-right">
					  	<h4><a href="#"><i class="fas fa-plus"></i></a></h4>
					</div><br>
		<table class="table table-bordered table-inverse table-hover">
			<thead>
				<tr>
					<th class="align-middle text-center">No</th>
					<th class="align-middle text-center">Uraian Prosedur</th>
					<th class="align-middle text-center">Dilaksanakan Oleh</th>
					<th class="align-middle text-center">Anggaran Waktu</th>
					<th class="align-middle text-center">Realisasi Waktu</th>
					<th class="align-middle text-center">No. KKA</th>
					<th class="align-middle text-center">Aksi</th>

				</tr>
				<tr>
					<th class="align-middle text-center">1</th>
					<th class="align-middle text-center">2</th>
					<th class="align-middle text-center">3</th>
					<th class="align-middle text-center">4</th>
					<th class="align-middle text-center">5</th>
					<th class="align-middle text-center">6</th>
					<th class="align-middle text-center">7</th>
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
					<td class="align-middle text-center">
						<a href="#"><button class="badge bg-success"><i class="fas fa-edit"></i></button></a>
						<a href="#"><button class="badge bg-secondary"><i class="fas fa-trash"></i></button></a>
					</td>
				</tr>
			</tbody>
		</table>
		</div>
		</div>
</div>
</div>