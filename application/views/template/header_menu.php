<div class="page-header-menu">
                            <div class="container">
                                <!-- BEGIN MEGA MENU -->
                                <!-- DOC: Apply "hor-menu-light" class after the "hor-menu" class below to have a horizontal menu with white background -->
                                <!-- DOC: Remove data-hover="dropdown" and data-close-others="true" attributes below to disable the dropdown opening on mouse hover -->
                                <div class="hor-menu  ">
                                    <ul class="nav navbar-nav">
                                        <li>
											<a href="<?php echo site_url('Dashboard')?>"> <i class="fa fa-home fa-lg"></i>
											</a>
											</li>
										<?php 
										if(@$menu){
											foreach($menu as $m){?>
												<li aria-haspopup="true" class="menu-dropdown classic-menu-dropdown">
													<a href="<?php echo site_url($m->url)?>"> <?php echo $m->menu ?>
													</a>
												</li>
											<?php 
											}
										}
										?>
                                    </ul>
                                </div>
                                <!-- END MEGA MENU -->
                            </div>
                        </div>