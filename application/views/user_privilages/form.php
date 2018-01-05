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
					<div class="form-body">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-md-3 control-label">
										Tipe User
										<span class="required" aria-required="true"> * </span>
									</label>
									<div class="col-md-9">
										<input readonly type="text" name="tipe_user" class="form-control" placeholder="Tipe User" value="<?php echo $type_user->tipe_user?>">
										<input type="hidden" name="id_user" class="form-control" value="<?php echo $type_user->id?>">
									</div>
								</div>
							</div>
						</div>
						<div class="table-scrollable">
							<table class="table table-bordered table-hover">
								<thead>
									<tr>
										<th> menu </th>
										<th> Create </th>
										<th> Read </th>
										<th> Update </th>
										<th> Delete </th>
									</tr>
								</thead>
								<tbody>
									<?php 
									if($parent){
										foreach($parent as $p){?>
											<tr>
												<td colspan="5">&nbsp;</td>
											</tr>
											<tr>
												<td colspan="5"><strong> <?php echo $p->menu?> </strong></td>
											</tr>
											<?php if($child[$p->id]){
												foreach($child[$p->id] as $c){
													?>
													<tr>
														<td><input type="hidden" name="id[]" value="<?php echo @$c->id_priv ?>"> <input type="hidden" name="menu[]" value="<?php echo @$c->id ?>"><?php echo $c->menu ?></td>
														<td align="center"> <input type="checkbox" value="1" name="create_<?php echo @$c->id ?>" <?php echo @($c->create == 1) ? 'checked': ''?> style="cursor:pointer;"/> </td>
														<td align="center"> <input type="checkbox" value="1" name="read_<?php echo @$c->id ?>" <?php echo @($c->read == 1) ? 'checked': ''?> style="cursor:pointer;"/> </td>
														<td align="center"> <input type="checkbox" value="1" name="update_<?php echo @$c->id ?>" <?php echo @($c->update == 1) ? 'checked': ''?> style="cursor:pointer;"/> </td>
														<td align="center"> <input type="checkbox" value="1" name="delete_<?php echo @$c->id ?>" <?php echo @($c->delete == 1) ? 'checked': ''?> style="cursor:pointer;"/></td>
													</tr>
												<?php }
											}?>
											
										<?php }
									}
									?>
									
								</tbody>
							</table>
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