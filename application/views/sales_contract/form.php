<section class='content'>
	<div class="portlet light " id="form_wizard_1">
		<div class="portlet-title">
			<div class="caption">
				<i class=" icon-layers font-red"></i>
				<span class="caption-subject font-red bold uppercase"> Distribusi
					<span> - <?php echo @$row->nomor_do?> </span>
				</span>
			</div>
		</div>
		<div class="portlet-body form">
				<div class="form-wizard">
						<ul class="nav nav-pills nav-justified steps">
							<li>
								<a href="#tab1" data-toggle="tab" class="step">
									<span class="number"> 1 </span>
									<span class="desc">
										<i class="fa fa-check"></i> Sales Contract </span>
								</a>
							</li>
							<li>
								<a href="#tab2" data-toggle="tab" class="step">
									<span class="number"> 2 </span>
									<span class="desc">
										<i class="fa fa-check"></i> PO Supplier </span>
								</a>
							</li>
							<!--li>
								<a href="#tab3" data-toggle="tab" class="step active">
									<span class="number"> 3 </span>
									<span class="desc">
										<i class="fa fa-check"></i> Pengiriman </span>
								</a>
							</li>
							<li>
								<a href="#tab4" data-toggle="tab" class="step">
									<span class="number"> 4 </span>
									<span class="desc">
										<i class="fa fa-check"></i> Pembayaran </span>
								</a>
							</li-->
						</ul>
						<div id="bar" class="progress progress-striped" role="progressbar">
							<div class="progress-bar progress-bar-success"> </div>
						</div>
						<div class="tab-content">
							<div class="tab-pane active" id="tab1">
								<h3 class="block">Sales Contract</h3>
								<form action="<?php echo site_url($action); ?>" method="post" id="input_form01" class="form-horizontal">
									<div class='form-body'>
										<?php 
										$disable = "";
										if(isset($row)){
												$disable = "disabled";
										
										?>
										<div class="form-group">
											<label class="control-label col-md-3">Nomor DO
											</label>
											<div class="col-md-4">
												<input type="text" disabled class="form-control date-decade" name="tanggal" value="<?php echo @$row->nomor_do?>"/>
											</div>
										</div>
										<?php }?>
										<div class="form-group">
											<label class="control-label col-md-3">Customer
												<span class="required"> * </span>
											</label>
											<div class="col-md-4">
												<?php
													$customer = (isset($row)) ? $row->customer : '';
													if (!empty($customer)) {
														$customer_name = $this->Customer_model->get($customer)->{$this->Customer_model->label};
													}else{
														$customer_name = '';
													}
												?>
												<select <?php echo $disable?> name='customer' class='form-control select2-ajax' data-url='<?php echo site_url('form/dd/Customer_model') ?>'>
													<option value="<?php echo $customer?>" selected="selected"><?php echo $customer_name?></option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3">Tanggal
												<span class="required"> * </span>
											</label>
											<div class="col-md-4">
												<input <?php echo $disable?> type="text" class="form-control date-decade" name="tanggal" value="<?php echo @$row->tanggal?>"/>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3">No PO Customer
											</label>
											<div class="col-md-4">
												<input <?php echo $disable?> type="text" class="form-control" name="nomorpocusts" value="<?php echo @$row->nomor_pesanan?>"/>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3">PPN Status
											</label>
											<div class="col-md-4">
												<select class="form-control" name="ppn_stat" id="ppn_status"onchange="ppnchange()">
													<option value="2" <?php echo @$row->pajak_stat == 2 ? 'selected': ''?>>Non PPN</option>
													<option value="1" <?php echo @$row->pajak_stat == 1 ? 'selected': ''?>>PPN</option>
												</select>
											</div>
										</div>
										<?php if(isset($row)){?>
										<!--div class="form-group">
											<label class="control-label col-md-3">Tanggal Konfirmasi
											</label>
											<div class="col-md-4">
												<input <?php echo $disable?> type="text" class="form-control" name="tanggal_disetujui" id="tanggal_disetujui" value="<?php echo @($row->tanggal_disetujui == "0000-00-00")? "" : $row->tanggal_disetujui?>"/>
											</div>
										</div-->
										<?php }?>
										<input type="hidden" id="id_sc" name="id" value="<?php echo $id; ?>" />
									</div>
															
									<div class='row'>
										<div class='col-md-12'>
										  <div class='portlet light portlet-fit portlet-datatable'>
											<div class='portlet-body'>
											<?php if(!isset($row) || $row->status < 1){
												?>
												<div class="actions" style="display: inline-block;">
													<button type='button' onclick="addBarang()" class='btn green' name='mode' value='new' >Tambah Data Barang</button>
												</div>
											<?php 
											
											}?>
												
												<br>
												<br>
												<div class='table-container'>
													<table class="table table-striped table-bordered table-hover" id="mytable">
														<thead>
															<tr role="row" class="heading">
																<th rowspan="2">Section</th>
																<th rowspan="2">Berat(Kg/m)</th>
																<th rowspan="2">Panjang(Meter)</th>
																<th rowspan="2">Finishing</th>
																<th rowspan="2">Harga Dasar (Rp/Kg)</th>
																<th rowspan="2">Harga Satuan(Rp/Pc)</th>
																<th colspan="2" align="center">Jumlah Order</th>
																<th rowspan="2">Jumlah</th>
															</tr>
															<tr>
																<th>Pc</th>
																<th>Kg</th>
															</tr>
														</thead>
														<tbody id="bodydetail01">
															<?php if($detail){
																$index = 0;
																foreach($detail as $dt){
																	$index++;
																	$harga_satuan = $dt->harga_dasar*$dt->barang->berat*$dt->panjang;
																	?>
																	<tr id="tr<?php echo $index?>">
																		<td>
																			<?php echo $dt->barang->section?>
																		</td>
																		<td>
																			<?php echo number_format($dt->barang->berat,3,",",".")?>
																		</td>
																		<td>
																			<?php echo number_format($dt->panjang,2,",",".")?>
																		</td>
																		<td>
																			<?php echo $dt->finishing->finishing?>
																		</td>
																		<td>
																			<?php echo number_format($dt->harga_dasar,2,",",".")?>
																		</td>
																		</td>
																		<td>
																			<?php echo number_format($harga_satuan,2,",",".")?>
																		</td>
																		<td>
																			<?php echo number_format($dt->qty_order,0,",",".")?>
																		<td>
																			<?php echo number_format($dt->qty_order*$dt->panjang*$dt->barang->berat,2,",",".")?>
																		</td>
																		<td>
																			<?php echo number_format($harga_satuan*$dt->qty_order,2,",",".") ?>
																		</td>
																	</tr>
																<?php }
															}?>
														</tbody>
													</table>
												</div><!-- /.table-container -->
											</div><!-- /.portlet-body -->
										  </div><!-- /.portlet -->
										</div><!-- /.col -->
									  </div><!-- /.row -->
										<div class='form-actions' style="margin-top: -40px">
											<div class='row'>
												<div class='col-md-offset-5 col-md-7'>
													<button type='submit' class='btn blue' name='mode' value='new' >Cetak Sales Kontrak</button>
													<?php if(@$row->status == 1){ ?>
													<button type='button' id="btn_conf" onclick="konfirmCust()" class='btn green' name='mode' value='new' >Konfirmasi Customer</button>
													<?php } ?>
												</div>
											</div>
										</div>
								</form>
							</div>
							<div class="tab-pane" id="tab2">
								<h3 class="block">Purchase Order</h3>
								<form action="<?php echo site_url($action2); ?>" method="post" id="input_form01" class="form-horizontal">
									<div class='form-body'>
										<?php 
										$disable = "";
										if(isset($row)){
												$disable = "readonly";
										
										?>
										<div class="form-group">
											<label class="control-label col-md-3">Nomor DO
											</label>
											<div class="col-md-4">
												<input type="text" disabled class="form-control date-decade" name="tanggal" value="<?php echo @$row->nomor_do?>"/>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3">No PO
											</label>
											<div class="col-md-4">
												<input readonly type="text" class="form-control" name="nomorpo" value="<?php echo explode("/", $row->nomor_do)[0]."/DKJ/PO/".DATE("Y");?>"/>
											</div>
										</div>
										<?php }?>
										<div class="form-group">
											<label class="control-label col-md-3">Supplier
												<span class="required"> * </span>
											</label>
											<div class="col-md-4">
												<?php
													$supplier = (isset($row)) ? $row->supplier : '';
													if (!empty($supplier)) {
														$supplier_name = $this->Supplier_model->get($supplier)->{$this->Supplier_model->label};
													}else{
														$supplier_name = '';
													}
												?>
												<select name='supplier' class='form-control select2-ajax' data-url='<?php echo site_url('form/dd/Supplier_model') ?>'>
													<option value="<?php echo $supplier?>" selected="selected"><?php echo $supplier_name?></option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3">Up
												<span class="required"> * </span>
											</label>
											<div class="col-md-4">
												<input type="text" class="form-control" name="up" value="<?php echo @$po->up?>"/>
											</div>
										</div>
										
										<div class="form-group">
											<label class="control-label col-md-3">Telepon
											</label>
											<div class="col-md-4">
												<input type="text" class="form-control" name="telepon" id="telepon" value="<?php echo @$po->telepon?>"/>
											</div>
										</div>
										<input type="hidden" id="id_sc" name="id_sc" value="<?php echo $id; ?>" />
										<input type="hidden" id="id" name="id" value="<?php echo @$po->id; ?>" />
									</div>
									<br />
									<br />
									<div class='table-container'>
										<table class="table table-striped table-bordered table-hover" id="mytable2">
											<thead>
												<tr role="row" class="heading">
													<th>Section</th>
													<th>Finishing</th>
													<th>Panjang</th>
													<th>Qty</th>
												</tr>
											</thead>
											<tbody>
												<?php if($detail){
													foreach($detail as $dt){?>
														<tr>
														<td>
															<?php echo $dt->barang->section?>
														</td>
														<td>
															<?php echo $dt->finishing->finishing?>
														</td>
														<td>
															<?php echo $dt->panjang?>
														</td>
														<td>
															<?php echo $dt->qty_order?>
														</td>
														</tr>
												<?php } }
													?>
											</tbody>
										</table>
									</div>
									<div class='form-actions' style="margin-top: -20px">
										<div class='row'>
											<div class='col-md-offset-5 col-md-7'>
												<button type='submit' class='btn blue' name='mode' value='new' >Cetak PO</button>
												<a href="<?php echo site_url("Sales_contract/cetak_sj/")?><?php echo $id?>" class='btn blue' name='mode' value='new' >Cetak SJ</a>
											</div>
										</div>
									</div>
								</form>
							</div>
							<div class="tab-pane" id="tab3">
								
							</div>
							<div class="tab-pane" id="tab4">
								
							</div>
							
						</div>
				</div>
		</div>
	</div>
                                            
</section>
<script type="text/javascript">
  $('#input_form01').submit(function(e) {
        e.preventDefault();
        main.submitAjaxModal($(this));
  });
  $(function(){
	  var index = 1;
	  function formatRepo(repo) {
		if (repo.loading) return repo.text;

		var markup = "<div class='select2-result-repository clearfix'>";
		if (repo.img  !== undefined ) {
			markup += "<div class='select2-result-repository__avatar'><img src='" + repo.img + "' /></div>";
		}
		if (repo.title  !== undefined ) {
			markup += "<div class='select2-result-repository__title'>" + repo.title + "</div>";
		}
		if (repo.desc  !== undefined ) {
			markup += "<div class='select2-result-repository__description'>" + repo.desc + "</div>" ;
		}
		if (repo.rating  !== undefined ) {
		markup += "<div class='select2-result-repository__stargazers'>" + repo.rating+ " <span class='glyphicon glyphicon-star'></span></div></div>" ;
		}

		return markup;
	}

	function formatRepoSelection(repo) {
		return repo.title || repo.text;
	}
	addBarang = function(){
		$("#bodydetail01").append('<tr id="tr'+index+'">\
										<td> \
											<select onchange="changeBarang('+index+')" id="barang'+index+'" name="barang[]" class="form-control select2-ajax barang" >\
												\
											</select>\
										</td>\
										<td><input readonly id="berat'+index+'" type="text" name="berat[]" class="form-control berat" placeholder="berat"></td>\
										<td><input onkeyup="change_kg('+index+')" id="panjang'+index+'" type="text" name="panjang[]" class="form-control number" placeholder="panjang"></td>\
										<td> \
										<select onchange="changeFinishing('+index+')" id="finishing'+index+'" name="finishing[]" class="form-control select2-ajax finishing" >\
											\
										</select>\
										</td>\
										<td><input onkeyup=change_harga('+index+') id="harga_kg'+index+'" type="text" name="harga_kg[]" class="form-control number" placeholder="harga_kg"></td>\
										<td><input readonly id="harga'+index+'" type="text" name="harga[]" class="form-control number" placeholder="harga"></td>\
										<td><input onkeyup="change_kg('+index+')" id="pc'+index+'" type="text" name="pc[]" class="form-control integer" placeholder="pc"></td>\
										<td><input readonly id="kg'+index+'" type="text" name="kg[]" class="form-control berat" placeholder="kg"></td>\
										<td><input readonly id="jumlah'+index+'" type="text" name="jumlah[]" class="form-control number" placeholder="jumlah"></td>\
									<tr>');
									
									
		$(".barang").select2({
			 placeholder: "Select",
			 allowClear: false,
			 width: "off",
			 ajax: {
				 url: '<?php echo site_url('form/dd/Barang_model') ?>',
				 dataType: 'json',
				 delay: 250,
				 data: function(params) {
					 return {
						 q: params.term, // search term
						 page: params.page
					 };
				 },
				 processResults: function(data, params) {
					 // parse the results into the format expected by Select2.
					 // since we are using custom formatting functions we do not need to
					 // alter the remote JSON data
					 params.page = params.page || 1;
					 return {
						 results: data.items,
						 pagination: {
							  more: (params.page * 30) < data.total_count
						  }
					 };
				 },
				 cache: true
			 },
			 escapeMarkup: function(markup) {
				 return markup;
			 }, // let our custom formatter work
			 minimumInputLength: 0,
			 templateResult: formatRepo,
			 templateSelection: formatRepoSelection
		 });
		 $(".finishing").select2({
			 placeholder: "Select",
			 allowClear: false,
			 width: "off",
			 ajax: {
				 url: '<?php echo site_url('form/dd/Finishing_barang_model') ?>',
				 dataType: 'json',
				 delay: 250,
				 data: function(params) {
					 return {
						 q: params.term, // search term
						 page: params.page
					 };
				 },
				 processResults: function(data, params) {
					 // parse the results into the format expected by Select2.
					 // since we are using custom formatting functions we do not need to
					 // alter the remote JSON data
					 params.page = params.page || 1;
					 return {
						 results: data.items,
						 pagination: {
							  more: (params.page * 30) < data.total_count
						  }
					 };
				 },
				 cache: true
			 },
			 escapeMarkup: function(markup) {
				 return markup;
			 }, // let our custom formatter work
			 minimumInputLength: 0,
			 templateResult: formatRepo,
			 templateSelection: formatRepoSelection
		 });
		 index++;
		 FormInputMask.init();
	}
	changeBarang = function(param){
		$.ajax({
		  method: "POST",
		  url: "<?php echo site_url('Barang/getData')?>/"+ $("#barang"+param).val(),
		  dataType: "Json"
		}).done(function( msg ) {
			if(msg){
				$("#deskripsi"+param).val(msg.deskripsi);
				$("#berat"+param).val(msg.berat);
				change_kg(param);
				change_harga(param);
			}
		});
	}
	changeFinishing =function(param){
		$.ajax({
		  method: "POST",
		  url: "<?php echo site_url('Finishing_barang/getData')?>/"+ $("#finishing"+param).val(),
		  dataType: "Json"
		}).done(function( msg ) {
			if(msg){
				$("#finishingharga"+param).val(msg.harga);
				change_harga(param);
			}
		});
		
	}
	change_kg = function(param){
		//rumus
		//panjang*berat*pc
		var pc = $("#pc"+param).val();
		var berat = $("#berat"+param).val();
		var panjang = $("#panjang"+param).val();
		
		//remove .
		pc 	= pc.replace(".", "");
		berat		= berat.replace(".", "");
		panjang	= panjang.replace(".", "");
		
		//change , to .
		pc 	= pc.replace(",", ".");
		berat		= berat.replace(",", ".");
		panjang	= panjang.replace(",", ".");
		
		var kg = pc*berat*panjang;
		$("#kg"+param).val(kg);
		change_ammount(param);
		
	}
	change_harga = function(param){
		//rumus
		//panjang*berat*harga_kg
		var panjang = $("#panjang"+param).val();
		var berat = $("#berat"+param).val();
		var harga_kg = $("#harga_kg"+param).val();
		
		//remove .
		panjang 	= panjang.replace(".", "");
		berat		= berat.replace(".", "");
		harga_kg	= harga_kg.replace(".", "");
		
		//change , to .
		panjang 	= panjang.replace(",", ".");
		berat		= berat.replace(",", ".");
		harga_kg	= harga_kg.replace(",", ".");
		
		var harga = panjang*berat*harga_kg;
		$("#harga"+param).val(harga);
		change_ammount("param");
	}
	change_ammount = function(param){
		var harga = $("#harga"+param).val();
		var pcs = $("#pc"+param).val();
		
		//remove .
		harga 	= harga.replace(".", "");
		pcs		= pcs.replace(".", "");
		
		//change , to .
		harga 	= harga.replace(",", ".");
		pcs		= pcs.replace(",", ".");
		
		var jumlah = harga * pcs;
		$("#jumlah"+param).val(jumlah);
	}
	konfirmCust = function(){
		$.ajax({
		  method: "POST",
		  url: "<?php echo site_url('Sales_contract/konfirm')?>/"+ $("#id_sc").val(),
		  dataType: "Json"
		}).done(function( msg ) {
			toastr.success('Sukses', 'SC Telah dikonfirmasi Customer', {timeOut: 5000});
			location.reload();
		});
	}
  });
</script>