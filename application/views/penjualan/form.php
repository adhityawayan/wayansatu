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
				<form  id="input_form" role="form" class="form-horizontal" method="POST" action="<?php echo site_url($action) ?>">
				<input type="hidden" name="id" class="form-control" value="<?php echo @$id ?>">
					<div class="form-body">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-md-3 control-label">
										Customer
										<span class="required" aria-required="true"> * </span>
									</label>
									<div class="col-md-9">
									<?php
									  $customer = (isset($row)) ? $row->customer : '';
									  if (!empty($customer)) {
										$customer_nama = $this->Customer_model->get($customer)->{$this->Customer_model->label};
									  }else{
										$customer_nama = '';
									  }
									 ?>
									  <select name='customer' class='form-control select2-ajax' data-url='<?php echo site_url('form/dd/Customer_model') ?>'>
										<option value="<?php echo $customer; ?>" selected="selected"><?php echo $customer_nama; ?></option>
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
										<input readonly type="text" name="tanggal" class="form-control" placeholder="tanggal" value="<?php echo @$row->tanggal ? $row->tanggal: date('Y-m-d H:i:s'); ?>">
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-md-3 control-label">
										Total
									</label>
									<div class="col-md-9">
										<div class="input-group">
											<span class="input-group-addon" id="sizing-addon1">Rp</span>
											<input readonly id="total_awal" type="text" name="totalawal" class="form-control number" placeholder="Total" value="<?php echo @$row->total ? $row->total: '0'; ?>">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-md-3 control-label">
										Diskon
									</label>
									<div class="col-md-3">
										<select id="diskon" class="form-control" name="diskon_type" onchange="coutnGrandTotal()">
											<option value="1">%</option>
											<option value="2">Rp</option>
										</select>
									</div>
									<div class="col-md-6">
										<input id="diskonvalue" type="text" onkeyup="coutnGrandTotal()" name="diskon" class="form-control number" placeholder="Diskon" value="<?php echo @$row->diskon ? $row->diskon: '0'; ?>">
									</div>
								</div>
							</div>
						</div>
						<div class="row" style="display:none" id="disppn">
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-md-3 control-label">
										PPN
									</label>
									<div class="col-md-3">
										<div class="input-group">
											<input readonly type="text" id="ppnpersen" name="ppn" class="form-control number" value="0">
											<span class="input-group-addon" id="sizing-addon1">%</span>
										</div>
									</div>
									<div class="col-md-6">
										<input readonly type="text" id="ppnidr" class="form-control number" value="0">
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-md-3 control-label">
										GRAND TOTAL
									</label>
									<div class="col-md-9">
										<div class="input-group">
										<span class="input-group-addon" id="sizing-addon1">Rp</span>
										<input readonly id="grandtotal" type="text" name="grand_total" class="form-control input-lg number" placeholder="Grand Total">
										</div>
									</div>
								</div>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-md-3 control-label">
										PPN Status
									</label>
									<div class="col-md-6">
										<select class="form-control" name="ppn_stat" id="ppn_status"onchange="ppnchange()">
											<option value="2">Non PPN</option>
											<option value="1">PPN</option>
										</select>
									</div>
								</div>
							</div>
						
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-md-3 control-label">
										Jenis Pembayaran
									</label>
									<div class="col-md-9">
										<select onchange="changePembayaran()" class="form-control" name="tipe" id="tipe_pembayaran">
											<option value="1">Cash</option>
											<option value="2">Debit Card</option>
											<option value="3">Kredit Card</option>
											<option value="4">Kredit</option>
										</select>
									</div>
								</div>
							</div>
						</div>
						<div class="row kredit" style="display:none">
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-md-3 control-label">
										TOP(Term Of Payment)
									</label>
									<div class="col-md-9">
										<input type="text" name="top" class="form-control" placeholder="Telepon">
									</div>
								</div>
							</div>
						</div>
						<div class="row kartu" style="display:none">
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-md-3 control-label">
										Nama Bank
									</label>
									<div class="col-md-9">
										<input type="text" name="bank" class="form-control" placeholder="Telepon">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-md-3 control-label">
										Nomor Account
									</label>
									<div class="col-md-9">
										<input type="text" name="nomor" class="form-control" placeholder="Telepon">
									</div>
								</div>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-md-3 control-label">
										Catatan
									</label>
									<div class="col-md-9">
										<textarea name="catatan" class="form-control" cols="3"></textarea>
									</div>
								</div>
							</div>
						</div>
						<br>
						<button type="button" onclick="addDetail()" class="btn green" style="margin-left: 30px">Tambah Barang</button>
						<div class="table-scrollable">
							<table class="table table-bordered table-hover">
								<thead>
									<tr>
										<th> Section</th>
										<th> Berat (Kg/Meter)</th>
										<th> Panjang (Meter)</th>
										<th> Finishing </th>
										<th> Harga Dasar (Rp/Kg)</th>
										<th> Harga Jual(Rp/Pc)</th>
										<th> Stok </th>
										<th> Qty </th>
										<th> Total </th>
										<th></th>
									</tr>
								</thead>
								<tbody id="bodyDetail">
									
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
	changePembayaran = function(){
		var jenisId = $("#tipe_pembayaran").val();
		if(jenisId == 1){
			console.log('1');
			$(".kredit").hide();
			$(".kartu").hide();
		}else if(jenisId == 4){
			console.log('4');
			$(".kredit").show();
			$(".kartu").hide();
		}else{
			console.log('23');
			$(".kredit").hide();
			$(".kartu").show();
		}
	}
	addDetail = function(){
		$('#bodyDetail').append('<tr>\
							<td> \
							<select onchange="changeBarang('+index+')" class="form-control barang" name="barang[]" id="barang'+index+'">\
							<input readonly type="hidden" id="barang_this'+index+'" class="form-control" name="barang_this[]">\
							</select>\
							</td>\
							<td><input readonly type="text" id="berat'+index+'" name="berat[]" class="form-control berat" placeholder="Berat"></td>\
							<td><input readonly type="text" id="panjang'+index+'" name="panjang[]" class="form-control number" placeholder="Panjang"></td>\
							<td><input readonly type="text" id="finish'+index+'" name="finish[]" class="form-control" placeholder="Finish"></td>\
							<td><input readonly type="text" id="harga_dasar'+index+'"name="harga_dasar[]" class="form-control number" placeholder="Harga Dasar"></td>\
							<td><input readonly type="text" id="harga'+index+'"name="harga[]" class="form-control number" placeholder="Harga"></td>\
							<td><input readonly type="text" id="stok'+index+'"name="stok[]" class="form-control integer" placeholder="Stok"></td>\
							<td><input type="text" onkeyup="changeQty('+index+')" name="qty[]" id="qty'+index+'" class="form-control integer" placeholder="Qty"></td>\
							<td><input readonly type="text" id="total'+index+'" class="total form-control number" name="total[]" placeholder="Total"></td>\
							<td></td>\
						</tr>');
						
		$(".barang").select2({
			 placeholder: "Select",
			 allowClear: false,
			 width: "off",
			 ajax: {
				 url: '<?php echo site_url('Stok_barang/getStokDropdown') ?>',
				 dataType: 'json',
				 delay: 250,
				 data: function(params) {
					 return {
						 q: params.term, // search term
						 page: params.page
					 };
				 },
				 processResults: function(data, params) {
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
			 },
			 minimumInputLength: 0,
			 templateResult: formatRepo,
			 templateSelection: formatRepoSelection
		 });
		 index++;
		 FormInputMask.init();
	}
	changeBarang = function(id){
		$.ajax({
		  method: "POST",
		  url: "<?php echo site_url('Stok_barang/getStok')?>/"+ $("#barang"+id).val(),
		  dataType: "Json"
		}).done(function( msg ) {
			if(!msg){
				var stok  =0;
				var berat  =0;
				var harga_dasar  =0;
				var harga  =0;
				var barang  =0;
				var panjang  =0;
				var finish  ="";
				$("#qty"+index).attr("readonly");
			}else{
				var berat = msg.barang.berat;
				var stok = msg.stok;
				var harga_dasar = msg.finishing.harga;
				var harga = msg.finishing.harga*msg.barang.berat*msg.panjang;
				var barang = msg.barang.id;
				var panjang = msg.panjang;
				var finish = msg.finishing.finishing;
				$("#qty"+index).removeAttr("readonly");
			}
			$("#berat"+id).val(berat);
			$("#barang_this"+id).val(barang);
			$("#stok"+id).val(stok);
			$("#harga_dasar"+id).val(harga_dasar);
			$("#harga"+id).val(harga);
			$("#finish"+id).val(finish);
			$("#panjang"+id).val(panjang);
			changeQty(id);
		  });
	}
	changeQty = function(id){
		//rumus
		//qty*harga
		
		//getParam
		var qty = $("#qty"+id).val();
		var harga = $("#harga"+id).val();
		
		//remove .
		qty = qty.replace(".", "");
		harga = harga.replace(".", "");
		
		//change , to .
		qty = qty.replace(",", ".");
		harga = harga.replace(",", ".");
		
		var total =  qty* harga;
		$("#total"+id).val(total);
		changeTotal();
	}
	changeTotal = function(){
		var arr = $('.total');
		var tot = 0;
		for(var i=0;i<arr.length;i++){
			var harga = arr[i].value;
			harga = harga.replace(".", "");
			harga = harga.replace(",", ".");
		
			if(parseInt(harga))
				tot += parseInt(harga);
		}
		document.getElementById('total_awal').value = tot;
		coutnGrandTotal();
	}
	coutnGrandTotal = function(){
		var diskon_type = parseInt($("#diskon").val());
		var ppnstat = $("#ppn_status").val();
		
		var diskon_value = $("#diskonvalue").val();
		var total = $("#total_awal").val();
		
		diskon_value = diskon_value.replace(".", "");
		total = total.replace(".", "");
		
		
		diskon_value = diskon_value.replace(",", ".");
		total = total.replace(",", ".");
		
		diskon_value = parseInt(diskon_value);
		total = parseInt(total);
		
		var grandtotal = 0;
		if(diskon_value == 0){
			grandtotal = total;
			// $("#grandtotal").val(total);
		}else{
			if(diskon_type == 1){//persen
				grandtotal = total - ((diskon_value/100)*total);
				// $("#grandtotal").val(grandtotal);
			}else{//val
				grandtotal = total - diskon_value;
				// $("#grandtotal").val(grandtotal);
			}
		}
		
		if(ppnstat == 2){//nonppn
			
		}else{
			var persen = $("#ppnpersen").val();
			var value = grandtotal * (persen/100);
			$("#ppnidr").val(value);
			grandtotal = grandtotal+value;
		}
		$("#grandtotal").val(grandtotal);
	}
	ppnchange =function(){
		var ppnstat = $("#ppn_status").val();
		
		if(ppnstat == 2){//nonppn
			$("#disppn").hide();
		}else{//ppn
			$("#disppn").show();
			$.ajax({
			  method: "POST",
			  dataType: "Json",
			  url: "<?php echo site_url("Setting_pajak/getPajak")?>"
			}).done(function( msg ) {
				$("#ppnpersen").val(msg.value);
			});
		}
		setTimeout(function(){ coutnGrandTotal(); }, 500);
		
	}
});
$('#input_form').submit(function(e) {
	e.preventDefault();
	main.submitAjaxModal($(this));
});
</script>