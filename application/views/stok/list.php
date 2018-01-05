<div class="row">
	<div class="col-md-12">
		<!-- Begin: Demo Datatable 1 -->
		<div class="portlet light portlet-fit portlet-datatable ">
			<div class="portlet-title">
				<div class="caption">
					<i class="icon-settings font-dark"></i>
					<span class="caption-subject font-dark sbold uppercase"><?php echo $caption?><?php  echo $param ==9 ? ' Minus': ''?></span>
				</div>
			</div>
			<div class="portlet-body">
				<div class="table-container">
					<div class="table-actions-wrapper">
						
					</div>
					<table class="table table-striped table-bordered table-hover table-checkable" id="mytable">
						<thead>
                        <tr role="row" class="heading">
                            <th width="2%"><input type="checkbox" class="group-checkable"> </th>
                    
                            <th>Section</th>
                            <th>Panjang</th>
                            <th>Finisih</th>
                            <th>Stok</th>
                            <th width="2%">Action</th>
                        </tr>
                        <tr role="row" class="filter">
                            <td></td>
                    
                            <td><select name='barang' class='form-control form-filter select2-ajax' data-url='<?php echo site_url('form/dd/Barang_model') ?>'></select></td>
                           <td><input type="text" class="form-control form-filter input-sm" name="panjang"></td>
                            <td><select name='finish' class='form-control form-filter select2-ajax' data-url='<?php echo site_url('form/dd/Finishing_barang_model') ?>'></select></td>
                            <td><input type="text" class="form-control form-filter input-sm" name="stok"></td>
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
                "url": "<?php echo site_url('Stok_barang/getDatatable/'.$param) ?>", // ajax source
            },
            "order": [
                [1, "asc"]
            ],// set first column as a default sort by asc
        }
    });
</script>