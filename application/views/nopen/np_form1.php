<?php
// $tahun_skrg = date("Y");
 // print_r($refTim);

?>

<form class="" method="get" action="<?=base_url('nopen/np_form')?>">
	<div id="gridSystemModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="tambah_tim" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="tambah_tim">Tambah Tim</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body">

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Jabatan Tim</label>
						<div class="col-sm-10">
							<select class="select form-control" name="kt_tim" value="" required>
								<?php
								foreach ($refTim as $rtim) { 
									?>

									<option value="<?=$rtim['kt_tim']?>"><?=$rtim['kt_nama']?></option>
									<?php
								}
								?>


							</select>
						</div>	
					</div>

					<?php
							// $refTim = $this->$refTim->refTim($pw_id);
							// if (kt_tim==1) {
								# code...

							// }
					foreach ($refTim as $rTim) {
								# code...
						if ($rtim['kt_tim']==1) {
									# code...
						}
					}
					?>
					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Nama Pegawai</label>
						<div class="col-sm-10">
							<select class="select form-control" name="nip"  required>
								<?php
								foreach ($pegawaiAll as $pAll) { 
									?>

									<option value="<?=$pAll['nip']?>"><?=$pAll['nama']?></option>
									<?php
								}
								?>
							</select>
						</div>	
					</div>
					<div class="form-group row">

								<!-- <div class="col-sm-12">
									<input type="submit" name="submit">
								</div>	 -->
							</div>

							<?php
							?>










						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<input type="hidden" name="pw_id" value="<?=$pw_id;?>">
							<button type="submit" class="btn btn-primary">TAMBAH TIM</button>
						</div>
					</div>
				</div>
			</div>
<!-- 
			<div class="bd-example bd-example-padded-bottom">
				<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#gridSystemModal">
					<i class="fas fa-plus"></i>
				</button>
			</div>
 -->
		</form>



<?php 
// print_r($refTim);
br(3);
//print_r($pegawaiAll);
?>
