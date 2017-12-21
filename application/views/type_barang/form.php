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
										Tipe Barang
										<span class="required" aria-required="true"> * </span>
									</label>
									<div class="col-md-9">
										<input type="text" name="tipe_barang" class="form-control" placeholder="Tipe Barang" value="<?php echo @$row->tipe_barang?>">
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