<div class="row">
	<div class="col-md-12 ">
		<div class="portlet light ">
			<div class="portlet-title">
				<div class="caption font-black-sunglo">
					<i class="icon-list bold font-dark-sunglo"></i>
					<span class="caption-subject bold uppercase"> <?php echo @$caption?></span>
				</div>
			</div>
			<div class="portlet-body form">
				<form id="input_form" role="form" class="form-horizontal" method="POST" action="<?php echo site_url($action) ?>">
				<input type="hidden" name="id" class="form-control" value="<?php echo $id ?>">
					<div class="form-body">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-md-3 control-label">
										Tipe Barang
										<span class="required" aria-required="true"> * </span>
									</label>
									<div class="col-md-9">
										<?php
									  $tipe = (isset($row)) ? $row->tipe_barang : '';
									  if (!empty($tipe)) {
										$tipe_barang = $this->Tipe_barang_model->get($tipe)->{$this->Tipe_barang_model->label};
									  }else{
										$tipe_barang = '';
									  }
									  ?>
									  <select name='tipe' class='form-control select2-ajax' data-url='<?php echo site_url('form/dd/Tipe_barang_model') ?>'>
										<option value="<?php echo $tipe; ?>" selected="selected"><?php echo $tipe_barang; ?></option>
									  </select>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-md-3 control-label">
										Supplier
										<span class="required" aria-required="true"> * </span>
									</label>
									<div class="col-md-9">
										<?php
									  $supplier = (isset($row)) ? $row->supplier : '';
									  if (!empty($supplier)) {
										$nama_supplier = $this->Supplier_model->get($supplier)->{$this->Supplier_model->label};
									  }else{
										$nama_supplier = '';
									  }
									  ?>
									  <select name='supplier' class='form-control select2-ajax' data-url='<?php echo site_url('form/dd/Supplier_model') ?>'>
										<option value="<?php echo $supplier; ?>" selected="selected"><?php echo $nama_supplier; ?></option>
									  </select>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-md-3 control-label">
										Section
										<span class="required" aria-required="true"> * </span>
									</label>
									<div class="col-md-9">
										<input type="text" name="section" class="form-control" placeholder="Section" value="<?php echo @$row->section?>">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-md-3 control-label">
										Deskripsi
										<span class="required" aria-required="true"> * </span>
									</label>
									<div class="col-md-9">
										<input type="text" name="deskripsi" class="form-control" placeholder="Deskripsi" value="<?php echo @$row->deskripsi?>">
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-md-3 control-label">
										Berat
										<span class="required" aria-required="true"> * </span>
									</label>
									<div class="col-md-9">
										<div class="input-group">
											<input type="text" name="berat" class="form-control berat" value="<?php echo @$row->berat?>">
											
											<span class="input-group-addon" id="sizing-addon1">Kg/Meter</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="form-actions ">
						<div class="row">
							<div class="col-md-offset-5 col-md-7">
								<a href="<?php echo site_url($action_back)?>" class="btn default">Kembali</a>
								<button type="submit" class="btn blue">Submit</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>   
<script type="text/javascript">
  $('#input_form').submit(function(e) {
        e.preventDefault();
        main.submitAjaxModal($(this));
  });
</script>                                  