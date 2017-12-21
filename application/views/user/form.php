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
				<form role="form" class="form-horizontal" method="POST" id="input_form" action="<?php echo site_url($action) ?>">
					<input type="hidden" name="id" class="form-control" value="<?php echo $id?>">
					<div class="form-body">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-md-3 control-label">
										Tipe User
										<span class="required" aria-required="true"> * </span>
									</label>
									<div class="col-md-9">
										 <?php
									  $tipe = (isset($row)) ? $row->tipe : '';
									  if (!empty($tipe)) {
										$tipe_user = $this->Type_user_model->get($tipe)->{$this->Type_user_model->label};
									  }else{
										$tipe_user = '';
									  }
									  ?>
										<select name='tipe' class='form-control select2-ajax' data-url='<?php echo site_url('form/dd/Type_user_model') ?>'>
											<option value="<?php echo $tipe; ?>" selected="selected"><?php echo $tipe_user; ?></option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-md-3 control-label">
										Nama
										<span class="required" aria-required="true"> * </span>
									</label>
									<div class="col-md-9">
										<input type="text" name="nama" class="form-control" placeholder="Nama User" value="<?php echo @$row->nama?>">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-md-3 control-label">
										Telepon
									</label>
									<div class="col-md-9">
										<input type="text" name="telepon" class="form-control" placeholder="Telepon User" value="<?php echo @$row->telepon?>">
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-md-3 control-label">
										Username
										<span class="required" aria-required="true"> * </span>
									</label>
									<div class="col-md-9">
										<input type="text" name="username" class="form-control" placeholder="Username" value="<?php echo @$row->username?>">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-md-3 control-label">
										Password
										<?php if($id == ""){echo '<span class="required" aria-required="true"> * </span>';}?>
									</label>
									<div class="col-md-9">
										<input type="password" name="password" class="form-control" placeholder="Password">
										<?php if($id != ""){echo "<span style='color: #888'>Kosongi jika Password tidak diganti</span>";}?>
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