<?php
// $tahun_skrg = date("Y");
 // print_r($refTim);

?>

<form class="" method="post" action="<?=base_url('nopen/np_update')?>">
	<div id="editmodal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="tambah_tim" aria-hidden="true">
		<div class="modal-dialog modal-md" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="edit_nota">Edit Nota</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body">

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Nomor Nota</label>
						<div class="col-sm-10">
							<input type="text" name="nopen_no" value="<?=$pwDetail['nopen_no']?>" required=""> 
						</div>	
					</div>

					<div class="form-group row">
						<label class="col-sm-2 col-form-label">Tanggal</label>
						<div class="col-sm-10">
								<input type="date" name="nopen_tgl" value="<?=$pwDetail['nopen_tgl']?>" required>


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
