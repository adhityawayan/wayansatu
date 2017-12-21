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
				<form role="form" id="input_form" class="form-horizontal" method="POST" action="<?php echo site_url($action) ?>">
				<input type="hidden" name="id" class="form-control" placeholder="Tipe User" value="<?php echo $id?>">
					<div class="form-body">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-md-3 control-label">
										Finishing
										<span class="required" aria-required="true"> * </span>
									</label>
									<div class="col-md-9">
										<input type="text" name="finishing" class="form-control" placeholder="Finishing" value="<?php echo @$row->finishing?>">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-md-3 control-label">
										Harga/Kg
										<span class="required" aria-required="true"> * </span>
									</label>
									<div class="col-md-9">
										<div class="input-group">
											<span class="input-group-addon" id="sizing-addon1">Rp</span>
											<input type="text" name="harga" class="form-control number" value="<?php echo @$row->harga?>">
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