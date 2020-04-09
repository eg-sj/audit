<?php
// $tahun_skrg = date("Y");
 // print_r($refTim);

?>

<form role="form" method="post" action="<?=base_url('sutugas/st_update')?>">
	<div id="tambahdasar" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="tambah_dasar" aria-hidden="true">
		<div class="modal-dialog modal-xl" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="tambah_dasar">TAMBAH DASAR TUJUAN</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body">

				<div class="form-group row">
						<label class="col-sm-2 col-form-label">Nomor Surat Tugas</label>
						<div class="col-sm-5">
							<input class="form-control" type="text" name="stugas_no" value="<?=$pwDetail['stugas_no']?>" required>
					</div>	
				</div>
				<div class="form-group row">
						<label class="col-sm-2 col-form-label">Tanggal Surat Tugas</label>
						<div class="col-sm-5">
							<input class="form-control" type="date" name="stugas_tgl" value="<?=$pwDetail['stugas_tgl']?>" required>
					</div>	
				</div>
				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Dasar</label>
					<div class="col-sm-10">
							<textarea class="form-control" name="pw_dasar" required><?php 
							echo $pwDetail['pw_dasar']
							?>

						</textarea>

					</div>	
				</div>


				<div class="form-group row">
					<label class="col-sm-2 col-form-label">Tujuan</label>
					<div class="col-sm-10">

							<textarea class="form-control" name="pw_tujuan" required><?php
							echo $pwDetail['pw_tujuan']
							?>
						</textarea>
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
							<input type="hidden" name="pw_id" value="<?=$pw_id?>">
							<button type="submit"  class="btn btn-primary">UPDATE</button>
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

<!-- <script>
    $(document).ready(function(){
        var date_input=$('input[name="nopen_tgl"]'); //our date input has the name "date"
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        date_input.datepicker({
            format: 'mm/dd/yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true,
        })
    })
</script>
-->

<?php 
// print_r($refTim);
br(3);
//print_r($pegawaiAll);
?>
