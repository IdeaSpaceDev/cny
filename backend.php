<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $title_for_layout ?></title>
        <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/images/favicon.png'); ?>">

        <?php echo $this->layouts->print_meta(); ?>
        
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/cloud-admin.css">
	    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/themes/night.css">
	    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/responsive.css">
	
	    <link href="<?php echo base_url() ?>assets/css/font-awesome.min.css" rel="stylesheet">
	    <!-- JQUERY UI-->
	    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>js/jquery-ui-1.10.3.custom/css/custom-theme/jquery-ui-1.10.3.custom.min.css" />
	    <!-- DATE RANGE PICKER -->
	    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>js/bootstrap-daterangepicker/daterangepicker-bs3.css" />
	    <!-- DATA TABLES -->
	    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>js/datatables/media/assets/css/datatables.min.css" />
	    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>js/datatables/extras/TableTools/media/css/TableTools.min.css" />
	    <!-- FUELUX TREE -->
	    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>js/fuelux-tree/fuelux.min.css" />
	    <!-- BOOTSTRAP SWITCH -->
	    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>js/bootstrap-switch/bootstrap-switch.min.css" />
	    <!-- FONTS -->
	    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
    </head>
    <body id="page">
    
    <!-- HEADER -->
	<header class="navbar clearfix" id="header">
		<div class="container">
				<div class="navbar-brand">
					<!-- SIDEBAR COLLAPSE -->
					<div id="sidebar-collapse" class="sidebar-collapse btn">
						<i class="fa fa-bars" 
							data-icon1="fa fa-bars" 
							data-icon2="fa fa-bars" ></i>
					</div>
					<!-- /SIDEBAR COLLAPSE -->
				</div>
				<!-- BEGIN TOP NAVIGATION MENU -->					
				<ul class="nav navbar-nav pull-right">
					<!-- BEGIN NOTIFICATION DROPDOWN -->	
					<li class="dropdown" id="header-notification">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="fa fa-bell"></i>
							<span class="badge"></span>						
						</a>
						<ul class="dropdown-menu notification">
							<li class="dropdown-title">
								<span><i class="fa fa-bell"></i> 2 Notifications</span>
							</li>
							<li>
								<a href="<?php echo base_url('Product/out') ?>">
									<span class="label label-warning"><i class="fa fa-dropbox"></i></span>
									<span class="body">
										<span class="message">ALCOHOL-LP.180CC.</span>
										<span class="time">
											<i class="fa fa-clock-o"></i>
											<span>Just now</span>
										</span>
									</span>
								</a>
							</li>
							<li>
								<a href="<?php echo base_url('Product/expire') ?>">
									<span class="label label-danger"><i class="fa fa-trash-o"></i></span>
									<span class="body">
										<span class="message">FOAM (แดง) 100G.</span>
										<span class="time">
											<i class="fa fa-clock-o"></i>
											<span>19 mins</span>
										</span>
									</span>
								</a>
							</li>
							<!--<li>
								<a href="#">
									<span class="label label-warning"><i class="fa fa-lock"></i></span>
									<span class="body">
										<span class="message">DW1 server locked.</span>
										<span class="time">
											<i class="fa fa-clock-o"></i>
											<span>32 mins</span>
										</span>
									</span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="label label-info"><i class="fa fa-twitter"></i></span>
									<span class="body">
										<span class="message">Twitter connected.</span>
										<span class="time">
											<i class="fa fa-clock-o"></i>
											<span>55 mins</span>
										</span>
									</span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="label label-danger"><i class="fa fa-heart"></i></span>
									<span class="body">
										<span class="message">Jane liked. </span>
										<span class="time">
											<i class="fa fa-clock-o"></i>
											<span>2 hrs</span>
										</span>
									</span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="label label-warning"><i class="fa fa-exclamation-triangle"></i></span>
									<span class="body">
										<span class="message">Database overload.</span>
										<span class="time">
											<i class="fa fa-clock-o"></i>
											<span>6 hrs</span>
										</span>
									</span>
								</a>
							</li>-->
							<li class="footer">
								<a href="#">See all notifications <i class="fa fa-arrow-circle-right"></i></a>
							</li>
						</ul>
					</li>
					<!-- END NOTIFICATION DROPDOWN -->
					<!-- BEGIN USER LOGIN DROPDOWN -->
					<li class="dropdown user" id="header-user">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<img alt="" src="<?php echo base_url('uploads/logo.png') ?>" />
							<span class="username">CNY HEALTH CARE</span>
							<i class="fa fa-angle-down"></i>
						</a>
						<ul class="dropdown-menu">
							<li><a href="#"><i class="fa fa-user"></i> My Profile</a></li>
							<li><a href="#"><i class="fa fa-cog"></i> Account Settings</a></li>
							<li><a href="#"><i class="fa fa-eye"></i> Privacy Settings</a></li>
							<li><a href="<?php echo base_url('auth/logout'); ?>"><i class="fa fa-power-off"></i> Log Out</a></li>
						</ul>
					</li>
					<!-- END USER LOGIN DROPDOWN -->
				</ul>
				<!-- END TOP NAVIGATION MENU -->
		</div>
	</header>
	<!--/HEADER -->
           
    <section id="page">
	            <!-- SIDEBAR -->
				<div id="sidebar" class="sidebar">
					<div class="sidebar-menu nav-collapse">
						<div class="divide-30"></div>	
						<h3 style="color:white">&nbsp;&nbsp;&nbsp;CNY HEALTH CARE</h3>
						<!-- SIDEBAR QUICK-LAUNCH -->
						<!-- <div id="quicklaunch"-->
						<!-- /SIDEBAR QUICK-LAUNCH -->
						
						<!-- SIDEBAR MENU -->
						<ul>
							<?php if($activeMenu == "home") { ?>
							<li class="active">
							<?php } else { ?>
							<li>
							<?php } ?>
								<a href="<?php echo base_url() ?>">
								<i class="fa fa-flag"></i> <span class="menu-text">แผงควบคุม</span>
								<span class="selected"></span>
								</a>					
							</li>
							<?php if($activeMenu == "sell") { ?>
							<li class="active">
							<?php } else { ?>
							<li>
							<?php } ?>
								<a class="" href="<?php echo base_url('Sell') ?>"><i class="fa fa-shopping-cart"></i> <span class="menu-text">รายการขาย</span></a>
							</li>
							<?php if($activeMenu == "product") { ?>
							<li class="has-sub active">
								<a href="javascript:;" class="">
								<i class="fa fa-medkit"></i> <span class="menu-text">สินค้า</span>
								<span class="arrow open"></span>
								<span class="selected"></span>
							<?php } else { ?>
							<li class="has-sub">
								<a href="javascript:;" class="">
								<i class="fa fa-medkit"></i> <span class="menu-text">สินค้า</span>
								<span class="arrow"></span>
							<?php } ?>
								</a>
								<ul class="sub">
									<?php if($activeSubMenu == "product") { ?>
							        <li class="current">
							        <?php } else { ?>
							        <li>
							        <?php } ?>
										<a class="" href="<?php echo base_url('Product') ?>"><span class="sub-menu-text">สินค้า</span></a>
									<?php if($activeSubMenu == "product_set") { ?>
							        <li class="current">
							        <?php } else { ?>
							        <li>
							        <?php } ?>
									    <a class="" href="<?php echo base_url('Product_Set') ?>"><span class="sub-menu-text">ชุดสินค้า</span></a>
									</li>
									<?php if($activeSubMenu == "promotion") { ?>
							        <li class="current">
							        <?php } else { ?>
							        <li>
							        <?php } ?>
										<a class="" href="<?php echo base_url('Product/promotion') ?>"><span class="sub-menu-text">โปรโมชั่น</span></a>
									</li>
								</ul>
							</li>
							<?php if($activeMenu == "stock") { ?>
							<li class="has-sub active">
								<a href="javascript:;" class="">
								<i class="fa fa-dropbox"></i> <span class="menu-text">สต๊อกสินค้า</span>
								<span class="arrow open"></span>
								<span class="selected"></span>
							<?php } else { ?>
							<li class="has-sub">
								<a href="javascript:;" class="">
								<i class="fa fa-dropbox"></i> <span class="menu-text">สต๊อกสินค้า</span>
								<span class="arrow"></span>
							<?php } ?>
								</a>
								<ul class="sub">
									<?php if($activeSubMenu == "stock") { ?>
							        <li class="current">
							        <?php } else { ?>
							        <li>
							        <?php } ?>
										<a class="" href="<?php echo base_url('Stock') ?>"><span class="sub-menu-text">สต๊อกสินค้า</span></a>
									</li>
									<?php if($activeSubMenu == "warehouse") { ?>
							        <li class="current">
							        <?php } else { ?>
							        <li>
							        <?php } ?>
										<a class="" href="<?php echo base_url('Warehouse') ?>"><span class="sub-menu-text">คลังสินค้า</span></a>
									</li>
									<?php if($activeSubMenu == "adjust") { ?>
							        <li class="current">
							        <?php } else { ?>
							        <li>
							        <?php } ?>
										<a class="" href="<?php echo base_url('Adjust') ?>"><span class="sub-menu-text">รายการปรับสต็อก</span></a>
									</li>
									<?php if($activeSubMenu == "transfer") { ?>
							        <li class="current">
							        <?php } else { ?>
							        <li>
							        <?php } ?>
										<a class="" href="<?php echo base_url('Transfer') ?>"><span class="sub-menu-text">โอนย้ายสินค้า</span></a>
									</li>
								</ul>
							</li>
							<?php if($activeMenu == "order") { ?>
							<li class="has-sub active">
								<a href="javascript:;" class="">
								<i class="fa fa-file-text-o"></i> <span class="menu-text">สั่งซื้อและรับสินค้า</span>
								<span class="arrow open"></span>
								<span class="selected"></span>
							<?php } else { ?>
							<li class="has-sub">
								<a href="javascript:;" class="">
								<i class="fa fa-file-text-o"></i> <span class="menu-text">สั่งซื้อและรับสินค้า</span>
								<span class="arrow"></span>
							<?php } ?>
								<ul class="sub">
									<?php if($activeSubMenu == "order") { ?>
							        <li class="current">
							        <?php } else { ?>
							        <li>
							        <?php } ?>
										<a class="" href="<?php echo base_url('Order') ?>"><span class="sub-menu-text">ใบสั่งซื้อสินค้า</span></a>
									</li>
									<?php if($activeSubMenu == "bill") { ?>
							        <li class="current">
							        <?php } else { ?>
							        <li>
							        <?php } ?>
										<a class="" href="<?php echo base_url('Bill') ?>"><span class="sub-menu-text">ใบรับสินค้า</span></a>
									</li>
									<?php if($activeSubMenu == "back") { ?>
							        <li class="current">
							        <?php } else { ?>
							        <li>
							        <?php } ?>
										<a class="" href="<?php echo base_url('Back') ?>"><span class="sub-menu-text">ใบส่งคืนสินค้า</span></a>
									</li>
								</ul>
							</li>
							<?php if($activeMenu == "member") { ?>
							<li class="has-sub active">
								<a href="javascript:;" class="">
								<i class="fa fa-users"></i> <span class="menu-text">สมาชิกการค้า</span>
								<span class="arrow open"></span>
								<span class="selected"></span>
							<?php } else { ?>
							<li class="has-sub">
								<a href="javascript:;" class="">
								<i class="fa fa-users"></i> <span class="menu-text">สมาชิกการค้า</span>
								<span class="arrow"></span>
							<?php } ?>
								</a>
								<ul class="sub">
									<?php if($activeSubMenu == "customer") { ?>
							        <li class="current">
							        <?php } else { ?>
							        <li>
							        <?php } ?>
										<a class="" href="<?php echo base_url('Customer') ?>"><span class="sub-menu-text">ลูกค้า</span></a>
									</li>
									<?php if($activeSubMenu == "supplier") { ?>
							        <li class="current">
							        <?php } else { ?>
							        <li>
							        <?php } ?>
										<a class="" href="<?php echo base_url('Supplier') ?>"><span class="sub-menu-text">ตัวแทนจำหน่าย</span></a>
									</li>
									<?php if($activeSubMenu == "producer") { ?>
							        <li class="current">
							        <?php } else { ?>
							        <li>
							        <?php } ?>
										<a class="" href="<?php echo base_url('Producer') ?>"><span class="sub-menu-text">ตัวแทนการผลิต</span></a>
									</li>
									<?php if($activeSubMenu == "communicant") { ?>
							        <li class="current">
							        <?php } else { ?>
							        <li>
							        <?php } ?>
										<a class="" href="<?php echo base_url('Communicant') ?>"><span class="sub-menu-text">ผู้ติดต่อ</span></a>
									</li>
								</ul>
							</li>
							<?php if($activeMenu == "channel") { ?>
							<li class="active">
							<?php } else { ?>
							<li>
							<?php } ?>
								<a class="" href="<?php echo base_url('Channel') ?>"><i class="fa fa-tasks"></i> <span class="menu-text">ช่องทางการขาย</span></a>
							</li>
							<?php if($activeMenu == "report") { ?>
							<li class="active">
							<?php } else { ?>
							<li>
							<?php } ?>
							    <a class="" href="<?php echo base_url('Report') ?>"><i class="fa fa-bar-chart-o"></i> <span class="menu-text">รายงาน</span></a>
							</li>
							<?php if($activeMenu == "setting") { ?>
							<li class="has-sub active">
								<a href="javascript:;" class="">
								<i class="fa fa-cog"></i> <span class="menu-text">ตั้งค่า</span>
								<span class="arrow open"></span>
								<span class="selected"></span>
							<?php } else { ?>
							<li class="has-sub">
								<a href="javascript:;" class="">
								<i class="fa fa-cog"></i> <span class="menu-text">ตั้งค่า</span>
								<span class="arrow"></span>
							<?php } ?>
								</a>
								<ul class="sub">
									<?php if($activeSubMenu == "user") { ?>
							        <li class="current">
							        <?php } else { ?>
							        <li>
							        <?php } ?>
										<a class="" href="<?php echo base_url('User') ?>"><span class="sub-menu-text">ผู้ใช้งานระบบ</span></a>
									</li>
									<?php if($activeSubMenu == "permission") { ?>
							        <li class="current">
							        <?php } else { ?>
							        <li>
							        <?php } ?>
										<a class="" href="<?php echo base_url('Permission') ?>"><span class="sub-menu-text">สิทธิผู้ใช้งาน</span></a>
									</li>
									<?php if($activeSubMenu == "company") { ?>
							        <li class="current">
							        <?php } else { ?>
							        <li>
							        <?php } ?>
										<a class="" href="<?php echo base_url('Company') ?>"><span class="sub-menu-text">ข้อมูลบริษัท</span></a>
									</li>
									<?php if($activeSubMenu == "branch") { ?>
							        <li class="current">
							        <?php } else { ?>
							        <li>
							        <?php } ?>
										<a class="" href="<?php echo base_url('Branch') ?>"><span class="sub-menu-text">ข้อมูลสาขา</span></a>
									</li>
									<?php if($activeSubMenu == "type") { ?>
							        <li class="current">
							        <?php } else { ?>
							        <li>
							        <?php } ?>
										<a class="" href="<?php echo base_url('Product/type') ?>"><span class="sub-menu-text">ประเภทสินค้า</span></a>
									</li>
									<?php if($activeSubMenu == "drug") { ?>
							        <li class="current">
							        <?php } else { ?>
							        <li>
							        <?php } ?>
										<a class="" href="<?php echo base_url('Product/drug') ?>"><span class="sub-menu-text">สามัญยา</span></a>
									</li>
									<?php if($activeSubMenu == "report") { ?>
							        <li class="current">
							        <?php } else { ?>
							        <li>
							        <?php } ?>
										<a class="" href="<?php echo base_url('Product/report') ?>"><span class="sub-menu-text">รายงาน ขย.</span></a>
									</li>
									<?php if($activeSubMenu == "group") { ?>
							        <li class="current">
							        <?php } else { ?>
							        <li>
							        <?php } ?>
										<a class="" href="<?php echo base_url('Group') ?>"><span class="sub-menu-text">กลุ่มลูกค้า</span></a>
									</li>
									<?php if($activeSubMenu == "payment") { ?>
							        <li class="current">
							        <?php } else { ?>
							        <li>
							        <?php } ?>
										<a class="" href="<?php echo base_url('Payment') ?>"><span class="sub-menu-text">การชำระเงิน</span></a>
									</li>
									<?php if($activeSubMenu == "express") { ?>
							        <li class="current">
							        <?php } else { ?>
							        <li>
							        <?php } ?>
										<a class="" href="<?php echo base_url('Express') ?>"><span class="sub-menu-text">การจัดส่ง</span></a>
									</li>
									<?php if($activeSubMenu == "label") { ?>
							        <li class="current">
							        <?php } else { ?>
							        <li>
							        <?php } ?>
										<a class="" href="<?php echo base_url('Label') ?>"><span class="sub-menu-text">ตั้งค่าฉลากยา</span></a>
									</li>
									<?php if($activeSubMenu == "printer") { ?>
							        <li class="current">
							        <?php } else { ?>
							        <li>
							        <?php } ?>
										<a class="" href="<?php echo base_url('Printer') ?>"><span class="sub-menu-text">ตั้งค่าเครื่องพิมพ์</span></a>
									</li>
								</ul>
							</li>
						</ul>
						<!-- /SIDEBAR MENU -->
					</div>
				</div>
				<!-- /SIDEBAR -->
	    
	    		<?php echo $content_for_layout; ?>

        <!-- JAVASCRIPTS -->
	    <!-- Placed at the end of the document so the pages load faster -->
	    <!-- JQUERY -->
	    <script src="<?php echo base_url() ?>js/jquery/jquery-2.0.3.min.js"></script>
	    <!-- JQUERY UI-->
	    <script src="<?php echo base_url() ?>js/jquery-ui-1.10.3.custom/js/jquery-ui-1.10.3.custom.min.js"></script>
	    <!-- BOOTSTRAP -->
	    <script src="<?php echo base_url() ?>bootstrap-dist/js/bootstrap.min.js"></script>
		
	    <!-- DATE RANGE PICKER -->
	    <script src="<?php echo base_url() ?>js/bootstrap-daterangepicker/moment.min.js"></script>
	
	    <script src="<?php echo base_url() ?>js/bootstrap-daterangepicker/daterangepicker.min.js"></script>
	    <!-- SLIMSCROLL -->
	    <script type="text/javascript" src="<?php echo base_url() ?>js/jQuery-slimScroll-1.3.0/jquery.slimscroll.min.js"></script><script type="text/javascript" src="<?php echo base_url() ?>js/jQuery-slimScroll-1.3.0/slimScrollHorizontal.min.js"></script>
	    <!-- BLOCK UI -->
	    <script type="text/javascript" src="<?php echo base_url() ?>js/jQuery-BlockUI/jquery.blockUI.min.js"></script>
	    <!-- DATA TABLES -->
	    <script type="text/javascript" src="<?php echo base_url() ?>js/datatables/media/js/jquery.dataTables.min.js"></script>
	    <script type="text/javascript" src="<?php echo base_url() ?>js/datatables/media/assets/js/datatables.min.js"></script>
	    <script type="text/javascript" src="<?php echo base_url() ?>js/datatables/extras/TableTools/media/js/TableTools.min.js"></script>
	    <script type="text/javascript" src="<?php echo base_url() ?>js/datatables/extras/TableTools/media/js/ZeroClipboard.min.js"></script>
	    <!-- FUELUX TREE -->
	    <script type="text/javascript" src="<?php echo base_url() ?>js/fuelux-tree/fuelux.tree-sampledata.js"></script>
	    <script type="text/javascript" src="<?php echo base_url() ?>js/fuelux-tree/fuelux.tree.min.js"></script>
	    <!-- BOOTSTRAP SWITCH -->
	    <script type="text/javascript" src="<?php echo base_url() ?>js/bootstrap-switch/bootstrap-switch.min.js"></script>
	    <!-- COOKIE -->
	    <script type="text/javascript" src="<?php echo base_url() ?>js/jQuery-Cookie/jquery.cookie.min.js"></script>

        <script type="text/javascript" src="<?php echo base_url() ?>js/clinicya.js"></script>

	    <!-- CUSTOM SCRIPT -->
		<script type="text/javascript" src="<?php echo base_url() ?>js/script.js"></script>
		<script type="text/javascript" src="<?php echo base_url() ?>assets/js/script.js"></script>
		
	    <script>
		    jQuery(document).ready(function() {		
			    App.setPage("dynamic_table");  //Set current page
			    App.init(); //Initialise plugins and elements
		    });
	    </script>
	    <!-- /JAVASCRIPTS -->
	    

    </body>
</html>
