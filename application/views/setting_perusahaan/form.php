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
					<input type="hidden" name="id" class="form-control" placeholder="Tipe User" value="<?php echo $id?>">
					<div class="form-body">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-md-3 control-label">
										Nama Perusahaan
									</label>
									<div class="col-md-9">
										<input readonly type="text" name="nama_perusahaan" class="form-control" value="<?php echo @$row->nama_perusahaan?>">
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-md-3 control-label">
										Alamat
									</label>
									<div class="col-md-9">
										<textarea rows="3" class="form-control" name="alamat"><?php echo @$row->alamat?></textarea>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-md-3 control-label">
										Telepon
									</label>
									<div class="col-md-9">
										<input type="text" name="telepon" class="form-control" value="<?php echo @$row->telepon?>">
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-md-3 control-label">
										Fax
									</label>
									<div class="col-md-9">
										<input type="text" name="fax" class="form-control" value="<?php echo @$row->fax?>">
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label class="col-md-3 control-label">
										Email
									</label>
									<div class="col-md-9">
										<input type="text" name="email" class="form-control" value="<?php echo @$row->email?>">
									</div>
								</div>
							</div>
						</div>
						<br>
						<br>
						<button type="button" class="btn btn-primary" onclick="tambahDetail()">Tambah Data</button>
						<br>
						<br>
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>Nama Akun</th>
									<th>Bank</th>
									<th>Nomor Akun</th>
									<th>Transaksi</th>
									<th>PPN</th>
									<th width="2%"></th>
								</tr>
							</thead>
							<tbody id="bankaccount">
								<?php if($bank){
									$index =1;
									foreach($bank as $b){?>
										<tr id="tr<?php echo $index;?>">
											<td><input type="text" id="nama<?php echo $index;?>" name="nama_akun[]" class="form-control" value="<?php echo $b->nama_akun?>"></td>
											<td><input type="text" id="bank<?php echo $index;?>" name="bank[]" class="form-control" value="<?php echo $b->bank?>"></td>
											<td><input type="text" id="nomor<?php echo $index;?>" name="nomor_akun[]" class="form-control" value="<?php echo $b->nomor_akun?>"></td>
											<td>
												<select id="transaksi<?php echo $index;?>" name="transaksi[]" class="form-control">
													<option value="1" <?php echo @$b->transaksi == 1 ? "Selected": ""?>>Penjualan</option>
													<option value="2" <?php echo @$b->transaksi == 2 ? "Selected": ""?>>Distribusi</option>
												</select>
											</td>
											<td>
												<select id="ppn<?php echo $index;?>" name="ppn[]" class="form-control">
													<option value="1" <?php echo @$b->transaksi == 2 ? "pajak_stat": ""?>>PPN</option>
													<option value="2" <?php echo @$b->transaksi == 2 ? "pajak_stat": ""?>>Non PPN</option>
												</select>
											</td>
											<td>
												<input type="hidden" id="id<?php echo $index;?>" name="id_det[]" class="form-control" value="<?php echo $b->id?>">
												<button type="button" class="btn btn-icon-only red delete" onclick="deleteDetail(<?php echo $index;?>)"  title="delete">
													<i class="fa fa-trash fa-lg"></i>
												</button>
											</td>
										</tr>
									<?php $index++; }
								}?>
							</tbody>
						</table>
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
	  var index = <?php echo @$index ? $index : '1'?>;
	  tambahDetail = function(){
		  $("#bankaccount").append('<tr id="tr'+index+'">\
		  <td><input type="text" id="nama'+index+'" name="nama_akun[]" class="form-control"></td>\
		  <td><input type="text" id="bank'+index+'" name="bank[]" class="form-control"></td>\
		  <td><input type="text" id="nomor'+index+'" name="nomor_akun[]" class="form-control"></td>\
		  <td>\
			<select id="transaksi'+index+'" name="transaksi[]" class="form-control">\
				<option value="1">\
					Penjulan\
				</option>\
				<option value="2">\
				Distribusi\
				</option>\
			</select>\
		  </td>\
		  <td>\
			<select id="ppn'+index+'" name="ppn[]" class="form-control">\
				<option value="1">\
					PPN\
				</option>\
				<option value="2">\
					Non PNP\
				</option>\
			</select>\
		  </td>\
		  <td>\
		  <input type="hidden" id="id'+index+'" name="id_det[]" class="form-control">\
		  <button type="button" class="btn btn-icon-only red delete" onclick="deleteDetail('+index+')"  title="delete">\
		  <i class="fa fa-trash fa-lg"></i>\
		  </button>\
		  </td>\
		  </tr>');
		  
		  index++;
	  }
	  deleteDetail = function(row){
		  var hapus = false;
		  swal({
		  html : "Delete Data Bank ?",
		  type: "warning",
		  showCancelButton: true,
		  confirmButtonColor: '#3085d6',
		  cancelButtonColor: '#d33',
		  confirmButtonText: 'Yes, delete it!'
		}).then(function(){
			if($("#id"+row).val() !=""){
				$.post('<?php echo site_url('Perusahaan_bank/delete')?>/'+$("#id"+row).val(), function(data, textStatus, xhr) {
					if (data.success == true) {
						swal("Deleted!", "Data telah terhapus", "success");
						terhapus(row);
					}else{
						swal("Opps!", data.message, "warning");
					}
				});
			}else{
				swal("Deleted!", "Data telah terhapus", "success");
				terhapus(row);
			}
		});
	  }
	  terhapus = function(row){
		  for(var i=row+1; i<index;i++){
			  var la = i-1;
			  $("#nama"+la).val($("#nama"+ i).val());
			  $("#bank"+la).val($("#bank"+ i).val());
			  $("#nomor"+la).val($("#nomor"+ i).val());
			  $("#transaksi"+la).val($("#transaksi"+ i).val());
			  $("#ppn"+la).val($("#ppn"+ i).val());
			  $("#id"+la).val($("#id"+ i).val());
			}

			index--;
			$("#tr"+index).remove();
	  }
  });
</script>  