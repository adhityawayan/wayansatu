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
										Tanggal
									</label>
									<div class="col-md-9">
										<input readonly type="text" name="tanggal" class="form-control" placeholder="Tanggal" value="<?php echo date("Y-m-d")?>">
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
										<th> Finishing</th>
										<th> Harga Sebelum </th>
										<th> Harga Koreksi </th>
										<th> Catatan </th>
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
									<select onchange="getHarga('+index+')" id="finishing'+index+'" name="finishing[]" class="form-control select2-ajax finishing" >\
										\
									</select>\
									</td>\
									<td><input readonly id="harga_sebelum'+index+'" type="text" name="harga_sebelum[]" class="form-control number" value="0"></td>\
									<td><input id="harga_koreksi'+index+'" type="text" name="harga_koreksi[]" class="form-control number"></td>\
									<td><textarea name="catatan_det[]" id="catatan'+index+'" class="form-control"></textarea></td>\
									<td>\
									<button type="button" class="btn btn-icon-only red delete" onclick="deleteDetail('+index+')"  title="delete">\
									  <i class="fa fa-trash fa-lg"></i>\
									</button>\
									</td>\
								</tr>');
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
	getHarga	= function(interval){
		$.ajax({
		  method: "POST",
		  dataType: "Json",
		  url: "<?php echo site_url('Finishing_barang/getData/')?>"+$("#finishing"+interval).val()
		}).done(function( msg ) {
			if(msg){
				$("#harga_sebelum"+interval).val(msg.harga);
			}else{
				$("#harga_sebelum"+interval).val(0);
			}
		  });
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
			  $("#finishing"+la).html($("#finishing"+ i).val());
			  $("#harga_sebelum"+la).val($("#harga_sebelum"+ i).val());
			  $("#harga_koreksi"+la).val($("#harga_koreksi"+ i).val());
			  $("#catatan"+la).val($("#catatan"+ i).val());
			}

			index--;
			$("#tr"+index).remove();
	  }
});
$('#input_form').submit(function(e) {
        e.preventDefault();
        main.submitAjaxModal($(this));
  });
</script>