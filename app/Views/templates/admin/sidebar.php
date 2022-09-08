<?php
		$uri = current_url(true);
		//echo (string) $uri;  // http://example.com/index.php
		$segments = $uri->getSegments(); 
		//echo $segments[1]."-".$segments[2] ;
?>
		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2">			
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
						<?php if(!empty(session()->get('imageProfile'))): ?>
							<img src="<?=base_url()?>/uploads/profile/<?=session()->get('imageProfile');?>" class="avatar-img rounded-circle">
						<?php else:  ?>
							<img src="<?=base_url()?>/uploads/profile/no_image.jpg" class="avatar-img rounded-circle">
						<?php endif ?>
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
									<?= session()->get('firstName').' '.session()->get('lastName'); ?>
									<span class="user-level"><?= session()->get('role'); ?></span>
									<span class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample">
								<ul class="nav">
									<li>
										<a href="<?= base_url('/admin/profile'); ?>">
											<span class="link-collapse">ข้อมูลส่วนตัว</span>
										</a>
									</li>
									<li>
										<a href="<?= base_url('/admin/changePassword'); ?>">
											<span class="link-collapse">เปลี่ยนรหัสผ่าน</span>
										</a>
									</li>
									<li>
										<a href="<?= base_url('/logout'); ?>">
											<span class="link-collapse">ออกจากระบบ</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<ul class="nav nav-primary">
						<li class="nav-item <?php if($segments[1]=='admin' and ($segments[2]=='' or !isset($segments[2])) ): echo "active"; endif;?>">
							<a href="<?= base_url(); ?>/admin" class="collapsed" aria-expanded="false">
								<i class="fas fa-home"></i>
								<p>หน้าแรก</p>
							</a>
						</li>
						<!--<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">จัดการระบบ</h4>
						</li>-->
						<li class="nav-item <?php if($segments[1]=='admin' and $segments[2]=='item9' or ($segments[5]>0 and $segments[5]<34)): echo "active"; endif;?>">
							<a data-toggle="collapse" href="#O9" class="collapsed" aria-expanded="false">
								<i class="fas fa-layer-group"></i>
								<p>9.การเปิดเผยข้อมูล</p>
								<span class="caret"></span>
							</a>
							<div class="collapse <?php if($segments[1]=='admin' and $segments[2]=='item9' or ($segments[5]>0 and $segments[5]<34)): echo "show"; endif;?>" id="O9">
								<ul class="nav nav-collapse">
									<li class="<?php if($segments[1]=='admin' and $segments[2]=='item9' and $segments[3]=='1' and $segments[4]=='1' or ($segments[5] >0 and $segments[5]<10) ): echo "active"; endif;?>">
										<a href="<?=base_url('admin/item9/1/1')?>">
											<span class="sub-item">9.1 ข้อมูลพื้นฐาน</span>
										</a>
									</li>
									<li class="<?php if($segments[1]=='admin' and $segments[2]=='item9' and $segments[3]=='1' and $segments[4]=='2' or ($segments[5] >9 and $segments[5]<18) ): echo "active"; endif;?>">
										<a href="<?=base_url('admin/item9/1/2')?>">
											<span class="sub-item">9.2 การบริหารงาน</span>
										</a>
									</li>
									<li class="<?php if($segments[1]=='admin' and $segments[2]=='item9' and $segments[3]=='1' and $segments[4]=='3' or ($segments[5] >17 and $segments[5]<25) ): echo "active"; endif;?>">
										<a href="<?=base_url('admin/item9/1/3')?>">
											<span class="sub-item">9.3 การเงินงบประมาณ</span>
										</a>
									</li>
									<li class="<?php if($segments[1]=='admin' and $segments[2]=='item9' and $segments[3]=='1' and $segments[4]=='4' or ($segments[5] >24 and $segments[5]<29) ): echo "active"; endif;?>">
										<a href="<?=base_url('admin/item9/1/4')?>">
											<span class="sub-item">9.4 การพัฒนาบุคคล</span>
										</a>
									</li>
									<li class="<?php if($segments[1]=='admin' and $segments[2]=='item9' and $segments[3]=='1' and $segments[4]=='5' or ($segments[5] >28 and $segments[5]<34) ): echo "active"; endif;?>">
										<a href="<?=base_url('admin/item9/1/5')?>">
											<span class="sub-item">9.5 ส่งเสริมความโปร่งใส</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<li class="nav-item <?php if($segments[1]=='admin' and $segments[2]=='item10' or ($segments[5]>33 and $segments[5]<44)): echo "active"; endif;?>">
							<a data-toggle="collapse" href="#O10" class="collapsed" aria-expanded="false">
								<i class="fas fa-th-list"></i>
								<p>10.ป้องกันการทุจริต</p>
								<span class="caret"></span>
							</a>
							<div class="collapse <?php if($segments[1]=='admin' and $segments[2]=='item10' or ($segments[5]>33 and $segments[5]<44)): echo "show"; endif;?>" id="O10">
								<ul class="nav nav-collapse">
									<li class="<?php if($segments[1]=='admin' and $segments[2]=='item10' and $segments[3]=='2' and $segments[4]=='1' or ($segments[5] >33 and $segments[5]<42) ): echo "active"; endif;?>">
										<a href="<?=base_url('admin/item10/2/1')?>">
											<span class="sub-item">10.1 เจตจำนงผู้บริหาร</span>
										</a>
									</li>
									<li class="<?php if($segments[1]=='admin' and $segments[2]=='item10' and $segments[3]=='2' and $segments[4]=='2' or ($segments[5] >41 and $segments[5]<44) ): echo "active"; endif;?>">
										<a href="<?=base_url('admin/item10/2/2')?>">
											<span class="sub-item">10.2 มาตรเพื่อป้องกัน</span>
										</a>
									</li>
								</ul>
							</div>
						</li>
						<!--<li class="nav-section">
							<span class="sidebar-mini-icon">
								<i class="fa fa-ellipsis-h"></i>
							</span>
							<h4 class="text-section">ข้อมูลส่วตัว</h4>
						</li>-->
						<li class="nav-item <?php if($segments[1]=='admin' and $segments[2]=='profile' ): echo "active"; endif;?>">
							<a  href="<?= base_url(session()->get('role').'/profile')?>">
								<i class="fas fa-user"></i>
								<p>ข้อมูลส่วนตัว</p>
							</a>
						</li>
						<li class="nav-item <?php if($segments[1]=='admin' and $segments[2]=='changePassword' ): echo "active"; endif;?>">
							<a  href="<?= base_url(session()->get('role').'/changePassword')?>">
								<i class="fas fa-key"></i>
								<p>เปลี่ยนรหัสผ่าน</p>
							</a>
						</li>
						<li class="nav-item">
							<a  href="<?= base_url('logout')?>">
								<i class="fas fa-power-off"></i>
								<p>ออกจากระบบ</p>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->

		<div class="main-panel">
			<div class="content">
			<?php if($segments[1]=='admin' and ($segments[2] !='' or isset($segments[2])) ): echo "<div class=\"page-inner\">"; endif;?>

			