 <!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
	<div class="tiles">
	<?php foreach(@$menu as $m){?>
		<a href="<?php echo site_url($m->url)?>">
		<div class="tile bg-<?php echo $m->color?>" >
			<div class="tile-body">
				<i class="<?php echo $m->icon?>"></i>
			</div>
			<div class="tile-object">
				<div class="custom-tile-name" style="bottom: 0;left: 0;margin-bottom: 5px; margin-left: 10px;margin-right: 10px;font-weight: 400;font-size: 13px;color: #fff;text-align: center;font-weight: bold;"> <?php echo $m->menu?> </div>
			</div>
		</div>
		</a>
	<?php }?>
	</div>
	</div>
	<!-- END CONTENT -->