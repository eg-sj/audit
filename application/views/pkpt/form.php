<?php
// print_r($pkptDetail)
?>

<br>
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="card card-primary">
						<div class="card-header">
							<h2 class="card-title "><b>TAMBAH PKPT</h2>	
							</div>
							<!-- form  -->

							<?php
							if($pkpt_id==0){
								$action = base_url('pkpt/tambah');
							} else {
								$action = base_url('pkpt/update');
							}
							?>


					<form role="form" method="post" action="<?= $action ?>">
					<div class=" card-body">
						
							<div class="form-horizontal">
								<div class="form-group row">
									<label class="col-sm-2 col-form-label">Tahun</label>
									<div class="col-sm-3">
										<select class="select" name="tahun" required>
											<?php
											$tahun_skrg=date("Y");
											$tahun_awal = $tahun_skrg-3;
											$tahun_akhir = $tahun_skrg+1;
											for ($i=$tahun_awal	; $i <= $tahun_akhir ; $i++) { 
												?>
												<option value="<?=$i?>" 
												<?php
												if($pkptDetail['tahun']==$i) { echo " selected ";}
												?>
												><?=$i?></option>
												<?php
											}
											?>
										</select>
									</div>
								</div>	
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">Objek Pemeriksaan</label>
								<div class="col-sm-10">
									<input type="text"  class="form-control" name="pkpt_objek" placeholder="Masukkan Objek yang di Periksa" value="<?=$pkptDetail['pkpt_objek']?>" required>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label"> Jenis Penugasan</label>
								<div class="col-sm-10">
									<select class="form-control" name="penugasan_kd"  required>
										<option>- Pilih -</option>
										<?php 
										foreach ($refPenugasan as $rP):
										?>
										<option value="<?=$rP['penugasan_kd'];?>"
											<?php
											if ($rP['penugasan_kd']==$pkptDetail['penugasan_kd']) {
												echo " selected";
											}
											?>
											><?=$rP['penugasan_nama']?></option>
										<?php
										endforeach;	
										?>
									</select>
								</div>
							</div>
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">Lokasi</label>
								<div class="col-sm-10">
									<select class="form-control" name="wil_kd"  required>
										<option>- Pilih -</option>
										<?php 
										foreach ($refWilayah as $rW):
										?>

										<option value="<?=$rW['wil_kd'];?>"
											<?php
											if ($rW['wil_kd']==$pkptDetail['wil_kd']) {
												echo " selected";
											}
											?>

											><?=$rW['wil_nama']?></option>
										

										<?php
										endforeach;	
										
										?>

										
									</select>
								</div>
							</div>
							
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">RMP</label>
									<div class="col-sm-10">
										<input type="date" name="rmp" value="<?=$pkptDetail['rmp']?>"  required>
										
									</div>
							</div>	
							<div class="form-group row">
								<label class="col-sm-2 col-form-label">RPL</label>
								<div class="col-sm-10">
									<input type="date" name="rpl" value="<?=$pkptDetail['rpl']?>"  required>
								</div>
							</div>




					<?php 
						if($pkptDetail['pkpt_id']>0) {
							?>
 							<div class="form-group row">
 								<!-- <div class="col-md-2 col-lg-3"></div> -->
 								<div class="col-md-8 col-lg-6">
 									
								<table class="table table-bordered">
									<thead class="alert-primary">
										<th class="align-middle text-center">TIM</th>
										<th class="align-middle text-center">JUMLAH</th>
										<th class="align-middle text-center">HARI</th>
									</thead>
									<?php
									for ($i=1; $i < 6; $i++) { 
										$dataTim = $this->pkptModel->pkptTim($pkpt_id,$i);

										?>
										<tr>
											<td>
												<?=$dataTim['kt_kode'];?>
											</td>
											<td>	
												<input class="form-control form-control-sm text-right" required="" type="text" placeholder="" name ="jml_tim<?=$i?>" value = "<?=$dataTim['jml_tim'];?>">

										</td>
										<td>

											<input class="form-control form-control-sm text-right" required="" name="jml_hari<?=$i?>"  type="text" placeholder="" value = <?=$dataTim['jml_hari']?>>

											<input type="hidden" placeholder="" name ="pkpt_tim_id<?=$i?>" value = "<?=$dataTim['pkpt_tim_id'];?>" >
											</td>
										</tr>
									<?php
									}
									?>
									
								</table>
									
 								</div>
							</div>
							<?php
						}
					?>

							<div class="dropdown open">
								<label>Status</label><br>			

								<select name="status" class="c-select">
									<option value="1" 
									<?php 
									if ($pkptDetail['status'] == TRUE) {
										echo "selected";
									}
									?>
									>Aktif</option>
									<option value="0"  
									<?php 
									if ($pkptDetail['status'] == FALSE) {
										echo "selected";
									}
									?>
									>Non Aktif (Hapus)</option>
								</select>

											
							</div>
							

							<div class="form-group text-right">
								<input class="btn btn-primary" type='hidden' name='pkpt_id' value="<?=$pkptDetail['pkpt_id']?>">
								<input class="btn btn-primary" type='submit' name='submit' value="<?php if($pkptDetail['pkpt_id']>0) {echo "update";} else {echo "input";}?>">


							</div>







						</div>
					</div>
						
					</form>

				</div>		
			</div>	
		</div>
	</div>
</div>
</div>
