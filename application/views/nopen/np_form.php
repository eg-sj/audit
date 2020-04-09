<?php
// print_r($refPangkat);
							if($pw_tim_id==0){
								$action = base_url('nopen/tambah');
								$act_name = "TAMBAH";
							} else {
								$action = base_url('nopen/update');
								$act_name = "UPDATE";
							}
							
?>

<!-- <div class="card card-body"> -->
	<form role="form" method="post" action="<?= $action ?>">
	<div class="form-group row">
		<div class="col-md-12 text-center">
			<h3>INPUT PERSONAL TIM</h3>
		</div>
	</div>
	<div class="form-group row">
		<label class="col-md-2 col-form-label">Jabatan Tim</label>
		<div class="col-md-4">
			<select class="select form-control" name="kt_tim">
				<?php
				foreach ($refTim as $rtim) { 
					?>

					<option value="<?=$rtim['kt_tim']?>"
					<?php
						if($pwTimDetail['kt_tim']==$rtim['kt_tim']) {
						 echo " selected ";}
						?>
						><?=$rtim['kt_nama']?></option>
					<?php
				}
				?>
			</select>
		</div>
	</div>
	<div class="form-group row">
		<label class="col-md-2 col-form-label">NIP</label>
		<div class="col-md-4">
			<input type="text" class="form-control" name="nip" value="<?=$pwTimDetail['nip']?>">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-md-2 col-form-label">Nama</label>
		<div class="col-md-6">
			<input type="text" class="form-control" name="nama" value="<?=$pwTimDetail['nama']?>">
		</div>
	</div>
	<div class="form-group row">
		<label class="col-md-2 col-form-label">Pangkat</label>
		<div class="col-md-4">
			<select class="select form-control" name="pangkat_id">
				<?php
				foreach ($refPangkat as $rpkt) { 
					?>

					<option value="<?=$rpkt['pangkat_id']?>"
						<?php
						if($pwTimDetail['pangkat_id']==$rpkt['pangkat_id']) {
						 echo " selected ";}
						?>
						><?=$rpkt['pangkat_nama']?> - <?=$rpkt['pangkat_golruang']?>
						</option>
					<?php
				}
				?>
			</select>
		</div>
	</div>
	<div class="form-group row">
		<label class="col-md-2 col-form-label">Jabatan</label>
		<div class="col-md-4">
			<input type="text" class="form-control" name="jabatan_nama" value="<?=$pwTimDetail['jabatan_nama']?>">
		</div>
	</div>
	<div class="form-group row">
		
		<div class="col-md-12">
		<input type="hidden" name="pw_id" value="<?=$pwTimDetail['pw_id']?>">
		<input type="hidden" name="pw_tim_id" value="<?=$pwTimDetail['pw_tim_id']?>">
		<input type="submit" class="btn btn-primary" name="submit" value="<?=$act_name?>">
		</div>
	</div>
</form>
<!-- </div> -->




<?php 
	// print_r($pwTimDetail); 

?>