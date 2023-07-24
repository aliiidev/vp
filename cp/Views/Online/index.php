<!-- [ Main Content ] start -->
<div class="pc-container">
	<div class="pc-content">
		<!-- [ breadcrumb ] start -->
		<div class="page-header">
			<div class="page-block">
				<div class="row align-items-center">
					<div class="col-md-12">
						<div class="page-header-title">
							<h2 class="mb-0">کاربران آنلاین</h2>
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
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-hover" id="pc-dt-simple">
								<thead>
									<tr>
										<th>نام کاربری</th>
										<th>IP</th>
										<th class="text-center">عملیات</th>
									</tr>
								</thead>
								<tbody>
                                <?php
                                $duplicate = [];
                                $m = 1;
                                $list = shell_exec("sudo lsof -i :" . PORT . " -n | grep -v root | grep ESTABLISHED");
        $onlineuserlist = preg_split("/\r\n|\n|\r/", $list);
                                $onlineuserlist = preg_split("/\r\n|\n|\r/", $list);
                                foreach ($onlineuserlist as $user) {
                                    $user = preg_replace("/\\s+/", " ", $user);
                                    if (strpos($user, ":AAAA") !== false) {
                                        $userarray = explode(":", $user);
                                    } else {
                                        $userarray = explode(" ", $user);
                                    }
                                    if (strpos($userarray[8], "->") !== false) {
                                        $userarray[8] = strstr($userarray[8], "->");
                                        $userarray[8] = str_replace("->", "", $userarray[8]);
                                        $userip = substr($userarray[8], 0, strpos($userarray[8], ":"));
                                    } else {
                                        $userip = $userarray[8];
                                    }
                                    $color = "#dc2626";
                                    if (!in_array($userarray[2], $duplicate)) {
                                        $color = "#269393";
                                        array_push($duplicate, $userarray[2]);
                                    }
                                    if (!empty($userarray[2]) && $userarray[2] !== "sshd") {
                                ?>
									<tr>
                                        <td><i style="color:<?php echo $color;?>!important;" data-feather="disc"></i> &nbsp;<?php echo $userarray[2];?></td>
										<td><?php echo $userip;?></td>
										<td class="text-center">
											<ul class="list-inline me-auto mb-0">
												<li class="list-inline-item align-bottom" >
                                                    <a href="online&kill-id=<?php echo $userarray[1];?>" class="btn btn-light-primary" >
													Kill ID
                                                    </a>
												</li>
												<li class="list-inline-item align-bottom" >
                                                    <a href="online&kill-user=<?php echo $userarray[2];?>" class="btn btn-light-danger" >
                                                        Kill USER
                                                    </a>
												</li>

											</ul>
										</td>
									</tr>
                                <?php
                                }
                                    $m++;
                                }
                                ?>
									</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<!-- [ sample-page ] end -->
		</div>
		<!-- [ Main Content ] end -->
	</div>
</div>
<div class="modal fade" id="customer-modal" data-bs-keyboard="false" tabindex="-1"
	aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
		<div class="modal-content">
			<div class="modal-header border-0 pb-0">
				<h5 class="mb-0">Customer Details</h5>
				<a href="#" class="avtar avtar-s btn-link-danger btn-pc-default" data-bs-dismiss="modal">
					<i class="ti ti-x f-20"></i>
				</a>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-lg-4">
						<div class="card">
							<div class="card-body position-relative">
								<div class="position-absolute end-0 top-0 p-3">
									<span class="badge bg-primary">Single</span>
								</div>
								<div class="text-center mt-3">
									<div class="chat-avtar d-inline-flex mx-auto">
										<img class="rounded-circle img-fluid wid-60" src="../assets/images/user/avatar-5.jpg"
											alt="User image">
									</div>
									<h5 class="mb-0">Aaron Poole</h5>
									<p class="text-muted text-sm">Manufacturing Director</p>
									<hr class="my-3 border border-secondary-subtle">
									<div class="row g-3">
										<div class="col-4">
											<h5 class="mb-0">45</h5>
											<small class="text-muted">Age</small>
										</div>
										<div class="col-4 border border-top-0 border-bottom-0">
											<h5 class="mb-0">86%</h5>
											<small class="text-muted">Progress</small>
										</div>
										<div class="col-4">
											<h5 class="mb-0">7634</h5>
											<small class="text-muted">Visits</small>
										</div>
									</div>
									<hr class="my-3 border border-secondary-subtle">
									<div class="d-inline-flex align-items-center justify-content-between w-100 mb-3">
										<i class="ti ti-mail"></i>
										<p class="mb-0">bo@gmail.com</p>
									</div>
									<div class="d-inline-flex align-items-center justify-content-between w-100 mb-3">
										<i class="ti ti-phone"></i>
										<p class="mb-0">+1 (247) 849-6968</p>
									</div>
									<div class="d-inline-flex align-items-center justify-content-between w-100 mb-3">
										<i class="ti ti-map-pin"></i>
										<p class="mb-0">Lesotho</p>
									</div>
									<div class="d-inline-flex align-items-center justify-content-between w-100">
										<i class="ti ti-link"></i>
										<a href="#" class="link-primary">
											<p class="mb-0">https://anshan.dh.url</p>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-8">
						<div class="card">
							<div class="card-header">
								<h5>Personal Details</h5>
							</div>
							<div class="card-body">
								<ul class="list-group list-group-flush">
									<li class="list-group-item px-0 pt-0">
										<div class="row">
											<div class="col-md-6">
												<p class="mb-1 text-muted">Full Name</p>
												<h6 class="mb-0">Aaron Poole</h6>
											</div>
											<div class="col-md-6">
												<p class="mb-1 text-muted">Father Name</p>
												<h6 class="mb-0">Mr. Ralph Sabatini</h6>
											</div>
										</div>
									</li>
									<li class="list-group-item px-0">
										<div class="row">
											<div class="col-md-6">
												<p class="mb-1 text-muted">Country</p>
												<h6 class="mb-0">Lesotho</h6>
											</div>
											<div class="col-md-6">
												<p class="mb-1 text-muted">Zip Code</p>
												<h6 class="mb-0">247 849</h6>
											</div>
										</div>
									</li>
									<li class="list-group-item px-0 pb-0">
										<p class="mb-1 text-muted">Address</p>
										<h6 class="mb-0">507 Sulnek Grove, Tudzovgeh, United States - 37173</h6>
									</li>
								</ul>
							</div>
						</div>
						<div class="card">
							<div class="card-header">
								<h5>About me</h5>
							</div>
							<div class="card-body">
								<p class="mb-0">Hello, I’m Aaron Poole Manufacturing Director based in international company, Void
									jiidki me na fep juih ced gihhiwi launke cu mig tujum peodpo.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="customer-edit_add-modal" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="mb-0">کاربر جدید</h5>
				<a href="#" class="avtar avtar-s btn-link-danger btn-pc-default" data-bs-dismiss="modal">
					<i class="ti ti-x f-20"></i>
				</a>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-sm-12">
						<div class="form-group row">
                    <div class="col-lg-6">
                      <div class="row">
                        <div class="col-lg-12">
                          <input type="email" class="form-control" placeholder="نام کاربری">
                          <small class="form-text text-muted">نام کاربری را وارد کنید</small>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="input-group">
                            <span class="input-group-text"><i class="feather icon-lock"></i></span>
                            <input type="password" class="form-control" placeholder="کلمه عبور">
                          </div>
                          <small class="form-text text-muted">کلمه عبور را وارد کنید</small>
                        </div>
                      </div>
                    </div>
                  </div>
									<div class="form-group row">
			                    <div class="col-lg-6">
			                      <div class="row">
			                        <div class="col-lg-12">
			                          <input type="email" class="form-control" placeholder="ایمیل">
			                          <small class="form-text text-muted">ایمیل را وارد کنید</small>
			                        </div>
			                      </div>
			                    </div>
			                    <div class="col-lg-6">
			                      <div class="row">
			                        <div class="col-lg-12">
			                          <div class="input-group">
			                            <input type="password" class="form-control" placeholder="شماره تماس">
			                          </div>
			                          <small class="form-text text-muted">شماره تماس را وارد کنید</small>
			                        </div>
			                      </div>
			                    </div>
			                  </div>

												<div class="form-group row">
																<div class="col-lg-6">
																	<div class="row">
																		<div class="col-lg-12">
																			<input type="email" class="form-control" placeholder="کاربر همزمان">
																			<small class="form-text text-muted">تعداد کاربران همزمان را وارد کنید</small>
																		</div>
																	</div>
																</div>
																<div class="col-lg-6">
																	<div class="row">
																		<div class="col-lg-12">
																			<div class="input-group">
																				<input type="password" class="form-control" placeholder="30">
																			</div>
																			<small class="form-text text-muted">تاریخ انقضا (با اولین اتصال) </small>
																			<small style="color:red">اگر قصد دارید با اولین اتصال تاریخ انقضا برا کاربر ثبت و محاسبه شود تعداد روز اعتبار را در فیلد بالا وارد نمائید</small>
																		</div>
																	</div>
																</div>
															</div>

										<div class="form-group row">
			                    <div class="col-lg-6">
			                      <div class="row">
			                        <div class="col-lg-12">
			                          <input type="email" class="form-control" value="0">
                        <br>
												<div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input input-primary" name="customCheckinl311" checked="">
                        <label class="form-check-label" for="customCheckinl311">مگابایت</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input input-primary" name="customCheckinl311">
                        <label class="form-check-label" for="customCheckinl32">گیگ</label>
                      </div>
			                          <small class="form-text text-muted">ترافیک را وارد نمائید</small>
			                        </div>
			                      </div>
			                    </div>
			                    <div class="col-lg-6">
			                      <div class="row">
			                        <div class="col-lg-12">
			                          <div class="input-group">
			                            <span class="input-group-text"><i class="feather icon-lock"></i></span>
			                            <input type="password" class="form-control" placeholder="تاریخ انقضا">
			                          </div>
			                          <small class="form-text text-muted">تاریخ انقضا</small>
																<small style="color:red">در صورت تنظیم تاریخ انقضا به صورت خودکار این فیلد را خالی بگذارید</small>
			                        </div>
			                      </div>
			                    </div>
			                  </div>
						<div class="form-group">
							<label class="form-label" >توضیحات</label>
							<textarea class="form-control" rows="3" placeholder="توضیحات"></textarea>
						</div>
						</div>
				</div>
			</div>
			<div class="modal-footer justify-content-between">
				<ul class="list-inline me-auto mb-0">
					<li class="list-inline-item align-bottom">
						<a href="#" class="avtar avtar-s btn-link-danger btn-pc-default w-sm-auto" data-bs-toggle="tooltip" title="حذف">
							<i class="ti ti-trash f-18"></i>
						</a>
					</li>
				</ul>
				<div class="flex-grow-1 text-end">
					<button type="button" class="btn btn-link-danger btn-pc-default" data-bs-dismiss="modal">انصراف</button>
					<button type="button" class="btn btn-primary" data-bs-dismiss="modal">ذخیره</button>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- [ Main Content ] end -->
