<?php foreach($temaaktif as $tema){ ?><?php } ?>
<body class="background-<?php echo $tema->style ?>">
	<!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
  <!-- [ Pre-loader ] End -->
	<!-- [ navigation menu ] start -->
	<nav class="pcoded-navbar menu-light ">
		<div class="navbar-wrapper  ">
			<div class="navbar-content scroll-div " >
				
				<div class="">
					<div class="main-menu-header">
						<img class="img-radius" src="<?php echo base_url() ?>resources/images/pengguna/default.png" alt="User-Profile-Image">
						<div class="user-details">
							<div id="more-details"><?php echo $this->session->userdata("user_nama") ?> <i class="fa fa-caret-down"></i></div>
						</div>
					</div>
					<div class="collapse" id="nav-user-link">
						<ul class="list-inline">
							<li class="list-inline-item"><a href="user-profile.html" data-toggle="tooltip" title="View Profile"><i class="feather icon-user"></i></a></li>
							<li class="list-inline-item"><a href="email_inbox.html"><i class="feather icon-mail" data-toggle="tooltip" title="Messages"></i><small class="badge badge-pill badge-primary">0</small></a></li>
							<li class="list-inline-item"><a href="<?php echo base_url() ?>admin/dashboard/logout" data-toggle="tooltip" title="Logout" class="text-danger"><i class="feather icon-power"></i></a></li>
						</ul>
					</div>
				</div>
				
				<ul class="nav pcoded-inner-navbar ">
					
					<li class="nav-item pcoded-menu-caption">
					<span class="badge badge-info">PROSES <?php echo $this->benchmark->elapsed_time();?> | MEMORY <?php echo $this->benchmark->memory_usage();?></span>
					</li>

					<li class="nav-item">
						<a href="<?php echo base_url() ?>guru/dashboard" class="nav-link ">
							<span class="pcoded-micon"><i class="feather icon-home"></i></span>
							<span class="pcoded-mtext">Dashboard</span>
						</a>
					</li>		
					
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link ">
							<span class="pcoded-micon"><i class="feather icon-user"></i></span>
							<span class="pcoded-mtext">Biodata</span>
						</a>
						<ul class="pcoded-submenu">
							<li><a href="<?php echo base_url() ?>guru/dashboard/biodata/">Informasi Pribadi</a></li>
							<li><a href='<?php echo base_url() ?>guru/dashboard/biodatafoto/<?php echo $this->session->userdata("user_id") ?>'>Foto Pribadi</a></li>	
						</ul>
					</li>

					<!--<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link ">
							<span class="pcoded-micon"><i class="feather icon-airplay"></i></span>
							<span class="pcoded-mtext">E-Learning</span>
						</a>
						<ul class="pcoded-submenu">
							<li><a href='<?php echo base_url() ?>guru/dashboard/elearning'>E-Learning</a></li>	
						</ul>
					</li>-->

					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link ">
							<span class="pcoded-micon"><i class="feather icon-airplay"></i></span>
							<span class="pcoded-mtext">Pembelajaran</span>
						</a>
						<ul class="pcoded-submenu">
							<li><a href='<?php echo base_url() ?>guru/dashboard/bukudigital'>Buku Digital</a></li>
							<li><a href='<?php echo base_url() ?>guru/dashboard/videopembelajaran'>Video Pembelajaran</a></li>	
						</ul>
					</li>
				
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link ">
							<span class="pcoded-micon"><i class="feather icon-bell"></i></span>
							<span class="pcoded-mtext">Presensi</span>
						</a>
						<ul class="pcoded-submenu">
							<li><a href="<?php echo base_url() ?>guru/dashboard/kehadiranguru/">Presensi Masuk</a></li>	
						</ul>
					</li>
				
						<!--
					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link ">
							<span class="pcoded-micon"><i class="feather icon-book"></i></span>
							<span class="pcoded-mtext">E-Jurnal</span>
						</a>
						<ul class="pcoded-submenu">
							<li><a href="<?php echo base_url() ?>guru/dashboard/jadwalmengajar/">Jadwal Mengajar</a></li>
							<li><a href="<?php echo base_url() ?>guru/dashboard/jurnalguru/">Jurnal Guru</a></li>
						</ul>
					</li>
					-->

					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link ">
							<span class="pcoded-micon"><i class="feather icon-book"></i></span>
							<span class="pcoded-mtext">E-Kinerja</span>
						</a>
						<ul class="pcoded-submenu">
							<li><a href="<?php echo base_url() ?>guru/dashboard/dataekinerja/">Data E-Kinerja</a></li>
						</ul>
					</li>



					<li class="nav-item pcoded-hasmenu">
						<a href="#!" class="nav-link ">
							<span class="pcoded-micon"><i class="feather icon-book"></i></span>
							<span class="pcoded-mtext">E-Rapor</span>
						</a>
						<ul class="pcoded-submenu">
							<!--<li><a href="<?php echo base_url() ?>guru/dashboard/datakelasmengajar/">Data Kelas</a></li>-->
							<li><a href="<?php echo base_url() ?>guru/dashboard/datatahunsmt1/">Semester 1</a></li>
							<li><a href="<?php echo base_url() ?>guru/dashboard/datatahunsmt2/">Semester 2</a></li>
							<li><a href="<?php echo base_url() ?>guru/dashboard/datatahunsmt3/">Semester 3</a></li>
							<li><a href="<?php echo base_url() ?>guru/dashboard/datatahunsmt4/">Semester 4</a></li>
							<li><a href="<?php echo base_url() ?>guru/dashboard/datatahunsmt5/">Semester 5</a></li>
							<li><a href="<?php echo base_url() ?>guru/dashboard/datatahunsmt6/">Semester 6</a></li>
						</ul>
					</li>












          			<li class="nav-item"><a href="<?php echo base_url() ?>guru/dashboard/logout" class="nav-link ">
					  	<span class="pcoded-micon"><i class="feather icon-log-out"></i></span>
						<span class="pcoded-mtext">Keluar</span></a>
					</li>

				</ul>
				
				<div class="card text-center">
					<div class="card-block">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<i class="feather icon-sunset f-40"></i>
						<h6 class="mt-3">Butuh Bantuan ?</h6>
						<p>Silahkan hubungi Administrator anda bila menemui masalah</p>
						<a href="#!" target="_blank" class="btn btn-primary btn-sm text-white m-0">Support XCode V.<?php foreach($setting as $ver){ ?><?php echo $ver->version ?> <?php } ?></a>
					</div>
				</div>
				
			</div>
		</div>
	</nav>

  	<header class="navbar pcoded-header navbar-expand-lg navbar-light header-blue">
		
			
				<div class="m-header">
					<a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
					<a href="#!" class="b-brand">
						<!-- ========   change your logo hear   ============ -->
						
					</a>
					<a href="#!" class="mob-toggler">
						<i class="feather icon-more-vertical"></i>
					</a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item">
							<a href="#!" class="pop-search"><i class="feather icon-search"></i></a>
							<div class="search-bar">
								<input type="text" class="form-control border-0 shadow-none" placeholder="Search hear">
								<button type="button" class="close" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
						</li>
					</ul>

					
					<ul class="navbar-nav ml-auto">
						<li>
							<div class="dropdown">
								<a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="icon feather icon-bell"></i></a>
								<div class="dropdown-menu dropdown-menu-right notification">
									<div class="noti-head">
										<h6 class="d-inline-block m-b-0">Notifications</h6>
										<div class="float-right">
											<a href="#!" class="m-r-10">mark as read</a>
											<a href="#!">clear all</a>
										</div>
									</div>
									<ul class="noti-body">
										<li class="n-title">
											<p class="m-b-0">NEW</p>
										</li>
										<li class="notification">
											<div class="media">
												<img class="img-radius" src="<?php echo base_url() ?>assets/images/user/avatar-1.jpg" alt="Generic placeholder image">
												<div class="media-body">
													<p><strong>John Doe</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>5 min</span></p>
													<p>New ticket Added</p>
												</div>
											</div>
										</li>
										<li class="n-title">
											<p class="m-b-0">EARLIER</p>
										</li>
										<li class="notification">
											<div class="media">
												<img class="img-radius" src="<?php echo base_url() ?>assets/images/user/avatar-2.jpg" alt="Generic placeholder image">
												<div class="media-body">
													<p><strong>Joseph William</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>10 min</span></p>
													<p>Prchace New Theme and make payment</p>
												</div>
											</div>
										</li>
										<li class="notification">
											<div class="media">
												<img class="img-radius" src="<?php echo base_url() ?>assets/images/user/avatar-1.jpg" alt="Generic placeholder image">
												<div class="media-body">
													<p><strong>Sara Soudein</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>12 min</span></p>
													<p>currently login</p>
												</div>
											</div>
										</li>
										<li class="notification">
											<div class="media">
												<img class="img-radius" src="<?php echo base_url() ?>assets/images/user/avatar-2.jpg" alt="Generic placeholder image">
												<div class="media-body">
													<p><strong>Joseph William</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>30 min</span></p>
													<p>Prchace New Theme and make payment</p>
												</div>
											</div>
										</li>
									</ul>
									<div class="noti-footer">
										<a href="#!">show all</a>
									</div>
								</div>
							</div>
						</li>
						<li>
							<div class="dropdown drp-user">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="feather icon-user"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right profile-notification">
									<div class="pro-head">
										<img src="<?php echo base_url() ?>assets/images/user/avatar-1.jpg" class="img-radius" alt="User-Profile-Image">
										<span>John Doe</span>
										<a href="auth-signin.html" class="dud-logout" title="Logout">
											<i class="feather icon-log-out"></i>
										</a>
									</div>
									<ul class="pro-body">
										<li><a href="user-profile.html" class="dropdown-item"><i class="feather icon-user"></i> Profile</a></li>
										<li><a href="email_inbox.html" class="dropdown-item"><i class="feather icon-mail"></i> My Messages</a></li>
										<li><a href="auth-signin.html" class="dropdown-item"><i class="feather icon-lock"></i> Lock Screen</a></li>
									</ul>
								</div>
							</div>
						</li>
					</ul>
				</div>
				
			
	</header>
	<!-- [ Header ] end -->
	
	

<!-- [ Main Content ] start -->