<!-- [ Main Content ] start -->
<div class="pc-container">
	<div class="pc-content">
		<!-- [ breadcrumb ] start -->
		<div class="page-header">
			<div class="page-block">
				<div class="row align-items-center">
					<div class="col-md-12">
						<div class="page-header-title">
							<h2 class="mb-0">تنظیمات</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- [ breadcrumb ] end -->


		<!-- [ Main Content ] start -->
		<div class="row">
			<!-- [ sample-page ] start -->
			<div class="col-sm-12">
				<div class="card">
              <div class="card-body border-bottom pb-0">
                <ul class="nav nav-tabs analytics-tab" id="myTab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <a href="Settings&sort=chengepass" class="nav-link <?php $sort= sort; if(empty($sort)){echo 'active';} if($sort=='chengepass'){echo 'active';}?>" type="button" role="tab"  aria-selected="true">تغییر کلمه عبور </a>
                  </li>
                  <li class="nav-item" role="presentation">
                    <a href="Settings&sort=port" class="nav-link <?php if($sort=='port'){echo 'active';}?>" type="button" role="tab" aria-selected="false" tabindex="-1">پورت SSH</a>
                  </li>
									<li class="nav-item" role="presentation">
                    <a href="Settings&sort=user" class="nav-link <?php if($sort=='user'){echo 'active';}?>" type="button" role="tab" aria-selected="false" tabindex="-1">محدودیت کاربر</a>
                  </li>
									<li class="nav-item" role="presentation">
                    <a href="Settings&sort=telegram" class="nav-link <?php if($sort=='telegram'){echo 'active';}?>" type="button" role="tab" aria-selected="false" tabindex="-1">ربات تلگرام</a>
                  </li>
									<li class="nav-item" role="presentation">
                    <a href="Settings&sort=multiserver" class="nav-link <?php if($sort=='multiserver'){echo 'active';}?>" type="button" role="tab" aria-selected="false" tabindex="-1">مولتی سرور</a>
                  </li>
									<li class="nav-item" role="presentation">
                    <a href="Settings&sort=backup" class="nav-link <?php if($sort=='backup'){echo 'active';}?>" type="button" role="tab" aria-selected="false" tabindex="-1">بکاپ و ریستور</a>
                  </li>
									<li class="nav-item" role="presentation">
                    <a href="Settings&sort=api" class="nav-link <?php if($sort=='api'){echo 'active';}?>" type="button" role="tab" aria-selected="false" tabindex="-1">API</a>
                  </li>
									<li class="nav-item" role="presentation">
                    <a href="Settings&sort=block" class="nav-link <?php if($sort=='block'){echo 'active';}?>" type="button" role="tab" aria-selected="false" tabindex="-1">بلاک IP
                    &nbsp;<span style="background: red;color: #ffff;padding: 2px;font-size: 8px;border-radius: 4px;">جدید</span></a>
                  </li>
                    <li class="nav-item" role="presentation">
                        <a href="Settings&sort=fakeaddress" class="nav-link <?php if($sort=='fakeaddress'){echo 'active';}?>" type="button" role="tab" aria-selected="false" tabindex="-1">آدرس فیک
                        &nbsp;<span style="background: red;color: #ffff;padding: 2px;font-size: 8px;border-radius: 4px;">جدید</span></a>
                    </li>
                </ul>
              </div>
              <div class="tab-content" id="myTabContent">
								<?php
                                    foreach($data['for'] as $val)
                                    {
                                        $adminuser=$val['adminuser'];
                                        $adminpassword=$val['adminpassword'];
                                    }
                                    $sort= sort;
									if($sort=='chengepass') {include("chengepass.php");}
									if($sort=='port') {require("sshport.php");}
									if($sort=='user') {require("user.php");}
									if($sort=='telegram') {require("telegram.php");}
									if($sort=='multiserver') {require("multiserver.php");}
									if($sort=='backup') {require("backup.php");}
									if($sort=='api') {require("api.php");}
									if($sort=='block') {require("block.php");}
									if($sort=='fakeaddress') {require("fakeaddress.php");}

								?>
								</div>
            </div>
				</div>
			<!-- [ sample-page ] end -->
		</div>
		<!-- [ Main Content ] end -->
	</div>
</div>
<!-- [ Main Content ] end -->
