<?php
if($pw_id==0){
	$action = base_url('pkpt/tambah');
	$nama_form = "TAMBAH";
	// print_r($pkptDetail);
	// print_r($refKecamatan);

} else {
	$action = base_url('pkpt/update');
	$nama_form = "UPDATE";


}
// print_r($pwDetail);
?>
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="card card-info">
						<div class="card-header">
							<h2 class="card-title "><b>
							<?=$nama_form?> PENGAWASAN</h2>	
							</div>

							<?php
							if($pw_id==0){
								$action1 = base_url('pengawasan/tambah');
							} else {
								$action1 = base_url('pengawasan/update');
							}
							?>

							<form role="form" method="post" action="<?= $action1 ?>">
								<div class=" card-body">
									<div class="form-horizontal">
										<!-- <div class="form-group row">
											<label class="col-sm-2 col-form-label">Kode Kecamatan</label>
											<div class="col-sm-10">
												<input type="text" class="form-control" name="kecamatan_kd" Placeholder="Kode Kecamatan" value="" required>
											</div>
										</div> -->
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Kegiatan</label>
											<div class="col-sm-10">
												<input type="text" class="form-control" name="pw_kegiatan" Placeholder="Nama Kegiatan" value="<?=$pwDetail['pw_kegiatan']?>" required>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Penugasan</label>
											<div class="col-sm-10">
												<select  class="form-control"  name="penugasan_kd" required="">
													<option value="">Pilih Penugasan</option>
													<?php
														foreach ($refPenugasan as $rPn) {
														?> 
														<option value="<?=$rPn['penugasan_kd']?>" <?php if ($rPn['penugasan_kd'] == $pwDetail['penugasan_kd'] ) {
															echo "selected";
														} ?>><?=$rPn['penugasan_nama']?></option>

														<?php 
														 } 
													?>
												
												</select>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Objek</label>
											<div class="col-sm-10">
												<input type="text" class="form-control" name="pw_objek" placeholder="Nama Objek" 
												value="<?=$pwDetail['pw_objek']?>" 
												required>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Lokasi</label>
											<div class="col-sm-10">
												<input class="form-control" type="text" name="pw_lokasi" value ="<?=$pwDetail['pw_lokasi']?>" required="">
												<select  class="form-control"  name="kecamatan_kd" required="">
													<option value="7307">Seluruh Kecamatan</option>
													<?php
														foreach ($refKecamatan as $rKec) {
														?> 
														<option value="<?=$rKec['kecamatan_kd']?>" <?php if ($rKec['kecamatan_kd'] == $pwDetail['kecamatan_kd'] ) {
															echo "selected";
														} ?>><?=$rKec['kecamatan_nama']?></option>

														<?php 
														 } 
													?>
												
												</select>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Wilayah</label>
											<div class="col-sm-10">

												<select  class="form-control"  name="wil_kd" required="">
													<option value="">Pilih Wilayah</option>
													<?php
														foreach ($refWilayah as $rWil) {
														?> 
														<option value="<?=$rWil['wil_kd']?>" <?php if ($rWil['wil_kd'] == $pwDetail['wil_kd'] ) {
															echo "selected";
														} ?>>Wilayah <?=$rWil['wil_rm']?></option>

														<?php 
														 } 
													?>
												
												</select>
											</div>
										</div>
										<div class="form-group row">
									<label class="col-sm-2 col-form-label">Tahun</label>
									<div class="col-sm-3">
										<select class="select form-control" name="tahun" required>
											<?php
											$tahun_skrg=date("Y");
											$tahun_awal = $tahun_skrg-3;
											$tahun_akhir = $tahun_skrg+1;
											for ($i=$tahun_awal	; $i <= $tahun_akhir ; $i++) { 
												?>
												<option value="<?=$i?>" 
												<?php
												if($pwDetail['tahun']==$i) { echo " selected ";}
												?>
												><?=$i?></option>
												<?php
											}
											?>
										</select>
									</div>
								</div>	
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Sasaran</label>
											<div class="col-sm-10">
												<input type="text" class="form-control" name="pw_sasaran" placeholder="Sasaran" value="<?=$pwDetail['pw_sasaran']?>" required>
											</div>
										</div>
										
<!-- 										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Tgl Awal</label>
											<div class="col-sm-10">
												<input type="date" name="pw_tgl_awal" value="" required>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Tgl Akhir</label>
											<div class="col-sm-10">
												<input type="date" name="pw_tgl_akhir" value="" required>
											</div>
										</div> -->
<!-- 										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Awal Persiapan</label>
											<div class="col-sm-10">
												<input type="date" name="pw_awal_persiapan" value="" required>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label" >Akhir Persiapan</label>
											<div class="col-sm-10">
												<input type="date" name="pw_akhir_persiapan" value="" required>
											</div>
										</div> -->
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Awal Penugasan</label>
											<div class="col-sm-10">
												<input type="date" name="pw_tgl_awal" value="<?=$pwDetail['pw_tgl_awal']?>" required>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Akhir Penugasan</label>
											<div class="col-sm-10">
												<input type="date" name="pw_tgl_akhir" value="<?=$pwDetail['pw_tgl_akhir']?>" required>
												
											</div>
										</div>
<!-- 										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Real Apel</label>
											<div class="col-sm-10">
												<input type="date" name="pw_real_awal_pelaksanaan" value="" required>
											</div>
										</div>
										 -->
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Penyelesaian Laporan</label>
											<div class="col-sm-10">
												<input type="date" name="pw_tgl_laporan" value="<?=$pwDetail['pw_tgl_laporan']?>" required="">
											</div>
										</div>
										<div class="form-group row text-right">
											<div class="col-sm-12">
												<input class="btn btn-info" type='hidden' name='pkpt_id' value="<?=$pwDetail['pkpt_id'];?>"> 
												<input class="btn btn-info" type='hidden' name='pw_id' value="<?=$pwDetail['pw_id'];?>"> 
												<input class="btn btn-info" type='submit' name='submit' value="<?php if($pwDetail['pw_id']>0) {echo "update";} else { echo"input";}?>"> 
											</div>
										</div>


									</div>
								</div>
							</form>

					</div>		
			</div>	
		</div>
	</div>
</div>

