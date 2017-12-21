<div class="top-menu">
	<ul class="nav navbar-nav pull-right">
		<!-- BEGIN NOTIFICATION DROPDOWN -->
		<!-- DOC: Apply "dropdown-hoverable" class after "dropdown" and remove data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to enable hover dropdown mode -->
		<!-- DOC: Remove "dropdown-hoverable" and add data-toggle="dropdown" data-hover="dropdown" data-close-others="true" attributes to the below A element with dropdown-toggle class -->
		<li class="dropdown dropdown-extended dropdown-notification dropdown-dark" id="header_notification_bar">
			<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
				<i class="icon-bell"></i>
				<span class="badge badge-default"><?php echo $notif?></span>
			</a>
			<ul class="dropdown-menu">
				<li class="external">
					<h3>Terdapat
						<strong><?php echo $notif?></strong> Item Barang dengan stok kurang dari 0</h3>
					<a href="<?php echo base_url('Stok_barang/index/9')?>">view all</a>
				</li>
			</ul>
		</li>
		<!-- END NOTIFICATION DROPDOWN -->
		
		<li class="droddown dropdown-separator">
			<span class="separator"></span>
		</li>
		<!-- BEGIN USER LOGIN DROPDOWN -->
		<li class="dropdown dropdown-user dropdown-dark">
			<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
				
				<img alt="" class="img-circle" src="<?php echo load_thumb('uploads/foto_profile/'.@$user->id.'/'.@$user->foto) ?>">
				<span class="username username-hide-mobile"></span>
			</a>
			<ul class="dropdown-menu dropdown-menu-default">
				<li>
					<a href="<?php echo site_url('Auth/logout')?>">
						<i class="icon-key"></i> Log Out </a>
				</li>
			</ul>
		</li>
		<!-- END USER LOGIN DROPDOWN -->
	</ul>
</div>