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
				<input type="hidden" name="id" class="form-control" value="<?php echo $id?>">
					<div class="form-body">
						<div class="row">
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
										$supplier_nama = $this->Supplier_model->get($supplier)->{$this->Supplier_model->label};
									  }else{
										$supplier_nama = '';
									  }
									  ?>
									  <select name='supplier' class='form-control select2-ajax' data-url='<?php echo site_url('form/dd/Supplier_model') ?>'>
										<option value="<?php echo $supplier; ?>" selected="selected"><?php echo $supplier_nama; ?></option>
									  </select>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-md-3 control-label">
										Tanggal
										<span class="required" aria-required="true"> * </span>
									</label>
									<div class="col-md-9">
										<input type="text" name="tanggal" class="form-control date-decade" placeholder="Tanggal">
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-md-3 control-label">
										Nomor Surat Jalan
									</label>
									<div class="col-md-9">
										<input type="text" name="nomor_surat_jalan" class="form-control" placeholder="Nomor Surat Jalan">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-md-3 control-label">
										Catatan
									</label>
									<div class="col-md-9">
										<textarea class="form-control" rows="3"></textarea>
									</div>
								</div>
							</div>
						</div>
						<button type="button" onclick="addDetail()" class="btn green" style="margin-left: 30px">Tambah Barang</button>
						<div class="table-scrollable">
							<table class="table table-bordered table-hover">
								<thead>
									<tr>
										<th> Section</th>
										<th> Berat (Kg/Meter)</th>
										<th> Panjang (Meter)</th>
										<th> Finishing</th>
										<th> Harga Beli (Rp/Kg) </th>
										<th> Harga Jual (Rp/Kg)</th>
										<th> Harga Jual (Rp/Pc)</th>
										<th> Jumlah (Pcs)</th>
										<th></th>
									</tr>
								</thead>
								<tbody id="detailBarang">
								</tbody>
							</table>
						</div>
					</div>
					<div class="form-actions ">
						<div class="row">
							<div class="col-md-offset-5 col-md-7">
								<button type="button" class="btn default">Kembali</button>
								<button type="submit" class="btn blue">Submit</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
 <script>
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
	addDetail = function(){
		$("#detailBarang").prepend('<tr id="tr'+index+'">\
										<td> \
										<select id="barang'+index+'" name="barang[]" class="form-control select2-ajax barang" onChange="changeBarang('+index+')">\
											\
										</select>\
										</td>\
										<td><input readonly id="berat'+index+'" type="text" name="berat[]" class="form-control berat" placeholder="Berat"></td>\
										<td><input id="panjang'+index+'" type="text" name="panjang[]" class="form-control number" placeholder="Panjang" onkeyup="getHargaJual('+index+')"></td>\
										<td> \
										<select id="finishing'+index+'" name="finishing[]" class="form-control select2-ajax finishing" onChange="changeFinish('+index+')">\
											\
										</select>\
										</td>\
										<td><input id="harga_beli'+index+'" type="text" name="harga_beli[]" class="form-control number" placeholder="Harga Beli"></td>\
										<td><input type="hidden" id="harga_lama'+index+'" name="harga_lama[]"><input id="harga_jual'+index+'" type="text" name="harga_jual[]" class="form-control number" placeholder="Harga Jual" onkeyup="getHargaJual('+index+')"></td>\
										<td><input readonly id="harga_pc'+index+'" type="text" name="harga_pc[]" class="form-control number" placeholder="Harga Jual"></td>\
										<td><input id="jumlah'+index+'" type="text" name="jumlah[]" class="form-control integer" placeholder="Jumlah"></td>\
										<td>\
										<button type="button" class="btn btn-icon-only red delete" onclick="deleteDetail('+index+')"  title="delete">\
										  <i class="fa fa-trash fa-lg"></i>\
										</button>\
										</td>\
									</tr>');
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
	deleteDetail = function(row){
		var hapus = false;
		swal({
			html : "Delete Data Detail ?",
			type: "warning",
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Yes, delete it!'
		}).then(function(){
		swal("Deleted!", "Data telah terhapus", "success");
			terhapus(row);
		});
	}
	terhapus = function(row){
		  for(var i=row+1; i<index;i++){
			  var la = i-1;
			  $("#barang"+la).html($("#barang"+ i).val());
			  $("#finishing"+la).html($("#finishing"+ i).val());
			  $("#panjang"+la).val($("#panjang"+ i).val());
			  $("#harga_beli"+la).val($("#harga_beli"+ i).val());
			  $("#harga_jual"+la).val($("#harga_jual"+ i).val());
			  $("#jumlah"+la).val($("#jumlah"+ i).val());
			}

			index--;
			$("#tr"+index).remove();
	}
	changeBarang = function(index){
		$.ajax({
		  method: "POST",
		  dataType: "Json",
		  url: "<?php echo site_url('Barang/getData')?>/"+$("#barang"+index).val(),
		}).done(function( msg ) {
			console.log(msg.tipe_barang);
			if(msg.tipe_barang != 3){
				$("#panjang"+index).val('0');
				$("#panjang"+index).attr('readonly', 'readonly');
				$("#finishing"+index).attr('disabled', 'disabled');
				$("#harga_jual"+index).attr('readonly', 'readonly');
				$("#harga_pc"+index).removeAttr('readonly', 'readonly');
				
				$("#harga_pc"+index).attr('name', 'harga_jual[]');
				$("#harga_jual"+index).attr('name', 'harga_pc[]');
			}else{
				$("#panjang"+index).removeAttr('readonly', 'readonly');
				$("#finishing"+index).removeAttr('disabled', 'disabled');
				$("#harga_jual"+index).removeAttr('readonly', 'readonly');
				$("#harga_pc"+index).attr('readonly', 'readonly');
				
				$("#harga_pc"+index).attr('name', 'harga_pc[]');
				$("#harga_jual"+index).attr('name', 'harga_jual[]');
				
				$("#berat"+index).val(msg.berat);
				getHargaJual(index);
			}
		});
	}
	changeFinish = function(index){
		$.ajax({
		  method: "POST",
		  dataType: "Json",
		  url: "<?php echo site_url('Finishing_barang/getData')?>/"+$("#finishing"+index).val(),
		}).done(function( msg ) {
			$("#harga_jual"+index).val(msg.harga);
			$("#harga_lama"+index).val(msg.harga);
			getHargaJual(index);
		});
	}
	getHargaJual = function(index){
		 //rumus
		//berat*panjang*harga jual/kg
		
		//getParam
		var berat  = $("#berat"+index).val();
		var panjang = $("#panjang"+index).val();;
		var harga = $("#harga_jual"+index).val();
		
		//remove .
		berat = berat.replace(".", "");
		panjang = panjang.replace(".", "");
		harga = harga.replace(".", "");
		
		//change , to .
		berat = berat.replace(",", ".");
		panjang = panjang.replace(",", ".");
		harga = harga.replace(",", ".");
		
		var harga_satuan = berat*panjang*harga;
		$("#harga_pc"+index).val(harga_satuan); 
	}
});
$('#input_form').submit(function(e) {
	e.preventDefault();
	main.submitAjaxModal($(this));
});
 </script>                               