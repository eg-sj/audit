<?php
$tahun_skrg = date("Y");
?>
<div class="content">
	<div class="container-fluid">
		<div class="card card-body">	
			<div class="form-group row">
				<label class="col-sm-1 col-form-label">Tahun</label>
				<div class="col-sm-3">
					<select class="select form-control" name="tahun" onchange="window.open(this.options[this.selectedIndex].value,'_top')" required>
						<?php
						for ($i=2018; $i <= $tahun_skrg ; $i++) { 
							?>
								<option value="<?=base_url('pengawasan/pw_form')."?tahun=".$i?>" <?php if ($tahun==$i) {echo "selected";}?>><?=$i?></option>
							<?php
						}
						?>
					</select>
				</div>	
			</div>

			<div class="form-group row">
				<label class="col-sm-1 col-form-label">PKPT</label>
				<div class="col-sm-7">
					<select class="select form-control" onchange="window.open(this.options[this.selectedIndex].value,'_top')" required>
								<option>- Pilih PKPT -</option>
						<?php
						foreach ($pkptAll as $pall) {
							?>
								<option value="<?=base_url('pengawasan/pw_form')."?pkpt_id=".$pall['pkpt_id']?>" > 
									<?php
									// print_r($pall);
									?>
									<?=$pall['pkpt_objek']." ".$pall['wil_nama']?>
								</option>
							<?php
						}
						?>
					</select>
				</div>
			</div>
		</div>
	</div>
</div>