<div class="row">
	<div class="col-md-12">
		<!-- Begin: Demo Datatable 1 -->
		<div class="portlet light portlet-fit portlet-datatable ">
			<div class="portlet-title">
				<div class="caption">
					<i class="icon-settings font-dark"></i>
					<span class="caption-subject font-dark sbold uppercase"><?php echo $caption?></span>
				</div>
				<div class="actions">
					<div class="btn-group" >
							<?php echo anchor('Penjualan/form/','<i class="fa fa-pencil"></i> Tambah Data',array('class'=>'btn btn-circle btn-info btn-sm'));?>
					</div>
				</div>
			</div>
			<div class="portlet-body">
				<div class="table-container">
					<div class="table-actions-wrapper">
						<span> </span>
						<select class="table-group-action-input form-control input-inline input-small input-sm">
							<option value="">Select...</option>
							<option value="delete">Delete</option>
						</select>
						<button class="btn btn-sm green table-group-action-submit">
							<i class="fa fa-check"></i> Submit</button>
					</div>
					<table class="table table-striped table-bordered table-hover table-checkable" id="mytable">
						<thead>
                        <tr role="row" class="heading">
                            <th width="2%"><input type="checkbox" class="group-checkable"> </th>
                    
                            <th>Nomor Surat Jalan</th>
                            <th>Customer</th>
                            <th>Suplier</th>
                            <th>Tanggal Kirim</th>
                            <th>Tujuan Pengiriman</th>
                            <th width="2%">Action</th>
                        </tr>
                        <tr role="row" class="filter">
                            <td></td>
                    
                            <td><input type="text" class="form-control form-filter input-sm" name="nomor_surat_jalan"></td>
                            <td><select name='customer' class='form-control form-filter select2-ajax' data-url='<?php echo site_url('form/dd/Customer_model') ?>'></select></td>
                            <td><select name='supplier' class='form-control form-filter select2-ajax' data-url='<?php echo site_url('form/dd/Supplier_model') ?>'></select></td>
                            <td>
								<input class="form-control form-filter input-sm date-decade " readonly name="tanggal_start"  type="text" value="" />
                                <input class="form-control form-filter input-sm date-decade " readonly name="tanggal_end"  type="text" value="" />
							</td>
							<td><input type="text" class="form-control form-filter input-sm" name="tujuan_pengiriman"></td>
                            <td>
                                <div class="margin-bottom-5">
                                    <button class="btn btn-sm green btn-outline filter-submit margin-bottom">
                                    <i class="fa fa-search"></i> Search</button>
                                </div>
                                <button class="btn btn-sm red btn-outline filter-cancel">
                                <i class="fa fa-times"></i> Reset</button>
                            </td>
                        </tr>
                    </thead>
						<tbody> </tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
    var datatableAjax = new Datatable();
    datatableAjax.init({
        src: $("#mytable"),
        dataTable: {
            "ajax": {
                "url": "<?php echo site_url('Pengiriman/getDatatable/') ?>", // ajax source
            },
            "order": [
                [1, "asc"]
            ],// set first column as a default sort by asc
        }
    });
</script>