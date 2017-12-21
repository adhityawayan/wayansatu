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
				<form role="form" class="form-horizontal" method="POST" action="<?php echo site_url($action) ?>" id="input_form">
					<input type="hidden" name="id" class="form-control" value="<?php echo $id ?>">
					<div class="form-body">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-md-3 control-label">
										Nama Perusahaan
										<span class="required" aria-required="true"> * </span>
									</label>
									<div class="col-md-9">
										<input type="text" name="nama" class="form-control" placeholder="Nama Perusahaan" value="<?php echo @$row->nama?>">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-md-3 control-label">
										Alamat
										<span class="required" aria-required="true"> * </span>
									</label>
									<div class="col-md-9">
										<textarea class="form-control" rows="3" name="alamat"><?php echo @$row->alamat?></textarea>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-md-3 control-label">
										Telepon
										<span class="required" aria-required="true"> * </span>
									</label>
									<div class="col-md-9">
										<input type="text" name="telepon" class="form-control" placeholder="Telepon" value="<?php echo @$row->telepon?>">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-md-3 control-label">
										Email
									</label>
									<div class="col-md-9">
										<input type="text" name="email" class="form-control" placeholder="Email" value="<?php echo @$row->email?>">
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-md-3 control-label">
										Contact Person
									</label>
									<div class="col-md-9">
										<input type="text" name="contact_person" class="form-control" placeholder="Contact Person" value="<?php echo @$row->contact_person?>">
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
  $(function(){
	  tambah_bank = function(){
		 $("#bankbody").prepend('<tr>\
			<td> <input type="text" name="nama[]" class="form-control" placeholder="Nama Akun"> </td>\
			<td><input type="text" name="nomor[]" class="form-control" placeholder="Nomor Akun"></td>\
			<td><input type="text" name="cabang[]" class="form-control" placeholder="Bank Cabang"></td>\
			<td><a onclick="delete_bank()">delete</a></td>\
		 </tr>');
	  }
	  delete_bank = function(){
		  
	  }
  });
</script>                        