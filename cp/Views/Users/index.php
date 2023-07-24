<!-- [ Main Content ] start -->
<div class="pc-container">
    <div class="pc-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h2 class="mb-0">کاربران</h2>
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
                <div class="card table-card">
                    <div class="card-body">
                        <div class="text-end p-4 pb-0">
                            <a href="#" class="btn btn-primary d-inline-flex align-items-center"
                               style="margin-bottom: 5px;" data-bs-toggle="modal" data-bs-target="#customer_add-modal">
                                <i class="ti ti-plus f-18"></i>کاربر جدید
                            </a>

                            <a href="#" class="btn btn-primary d-inline-flex align-items-center" data-bs-toggle="modal"
                               data-bs-target="#customer_bulk-modal">
                                <i class="ti ti-plus f-18"></i>ساخت کاربر عمده
                            </a>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover" id="pc-dt-simple">
                                <thead>
                                <tr>
                                    <th>#ID</th>
                                    <th>نام کاربری</th>
                                    <th>کلمه عبور</th>
                                    <th>ترافیک</th>
                                    <th>محدودیت کاربر</th>
                                    <th>اطلاعات تماس</th>
                                    <th>تاریخ</th>
                                    <th>وضعیت</th>
                                    <td style="display:none;"></td>
                                    <td style="display:none;"></td>
                                    <td style="display:none;"></td>
                                    <td style="display:none;"></td>
                                    <td style="display:none;"></td>
                                    <td style="display:none;"></td>
                                    <th class="text-center">عملیات</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach ($data['for'] as $datum) {
                                    if ($datum["traffic"] !== "0") {
                                        if (1024 <= $datum["traffic"]) {
                                            $traffic = $datum["traffic"] / 1024 . " گیگابایت";
                                        } else {
                                            $traffic = $datum["traffic"] . " مگابایت";
                                        }
                                    } else {
                                        $traffic = "نامحدود";
                                    }

                                    if (1024 < $datum["total"]) {
                                        $to = round($datum["total"] / 1024, 2) . " گیگابایت";
                                    } else {
                                        $to = $datum["total"] . " مگابایت";
                                    }


                                    if ($datum["enable"] == "true") {
                                        $status = "<span class='badge bg-light-success rounded-pill f-12'>فعال</span>";
                                    }
                                    if ($datum["enable"] == "false") {
                                        $status = "<span class='badge bg-light-danger rounded-pill f-12'>غیرفعال</span>";
                                    }
                                    if ($datum["enable"] == "expired") {
                                        $status = "<span class='badge bg-light-warning rounded-pill f-12'>منقضی شده</span>";
                                    }
                                    if ($datum["enable"] == "traffic") {
                                        $status = "<span class='badge bg-light-primary rounded-pill f-12'>اتمام ترافیک</span>";
                                    }
                                    ?>
                                    <tr>
                                        <td><?php echo $datum['id']; ?></td>
                                        <td><?php echo $datum['username']; ?></td>
                                        <td><?php echo $datum['password']; ?></td>
                                        <td><?php echo $traffic; ?>
                                            <br>
                                            <small>
                                                حجم مصرفی: <?php echo $to;?>
                                            </small></td>
                                        <td><?php echo $datum['multiuser']; ?></td>
                                        <td><?php echo $datum['mobile']; ?><br>
                                            <small><?php echo $datum['email']; ?></small></td>
                                        <td><small>
                                                ثبت: <?php echo $datum['startdate']; ?>
                                                <br>
                                                انقضا: <?php echo $datum['finishdate']; ?>
                                            </small></td>
                                        <td><?php echo $status; ?></td>
                                        <td data-type=ip style=display:none;><?php echo $_SERVER["SERVER_NAME"];?></td>
                                        <td data-type=port style=display:none;><?php echo PORT ;?></td>
                                        <td data-type=user style=display:none;><?php echo $datum['username'];?></td>
                                        <td data-type=pass style=display:none;><?php echo $datum['password'];?></td>
                                        <td data-type=start style=display:none;><?php echo $datum['startdate'];?></td>
                                        <td data-type=end style=display:none;><?php echo $datum['finishdate'];?></td>
                                        <td class="text-center">
                                            <ul class="list-inline me-auto mb-0">
                                                <li class="list-inline-item align-bottom" >
                                                        <button class="avtar avtar-xs btn-link-success btn-pc-default" style="border:none" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ti ti-adjustments f-18"></i></button>
                                                        <div class="dropdown-menu">
                                                            <a class="dropdown-item" href="users&active=<?php echo $datum['username']; ?>">فعال کردن</a>
                                                            <a class="dropdown-item" href="users&deactive=<?php echo $datum['username']; ?>">غیرفعال کردن</a>
                                                            <a class="dropdown-item" href="users&reset-traffic=<?php echo $datum['username']; ?>">ریست ترافیک</a>
                                                            <a class="dropdown-item" href="users&delete=<?php echo $datum['username']; ?>">حذف</a>
                                                        </div>
                                                </li>
                                                <li class="list-inline-item align-bottom" data-bs-toggle="tooltip"
                                                    title="ویرایش">
                                                    <a href="edituser&username=<?php echo $datum['username']; ?>" class="avtar avtar-xs btn-link-success btn-pc-default">
                                                        <i class="ti ti-edit-circle f-18"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item align-bottom" data-bs-toggle="tooltip"
                                                    title="اشتراک گذاری">
                                        <button class="avtar avtar-xs btn-link-success btn-pc-default" style="border:none" data-clipboard="true" data-clipboard-text="Host:<?php echo $_SERVER["SERVER_NAME"];?>&nbsp;
Port:<?php echo PORT ;?>&nbsp;
Username:<?php echo $datum['username'];?>&nbsp;
Password:<?php echo $datum['password'];?>&nbsp;
StartTime:<?php echo $datum['startdate'];?>&nbsp;
EndTime:<?php echo $datum['finishdate'];?>">
                                            <i class="ti ti-copy f-18"></i>
                                        </button>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                <?php } ?>
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
<div class="modal fade" id="customer_add-modal" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <form class="modal-content" action="" method="post" enctype="multipart/form-data" onsubmit="return confirm('از انجام این عملیات مطمئن هستید؟');">

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
                                        <input type="text" name="username" class="form-control"
                                               placeholder="نام کاربری" required>
                                        <small class="form-text text-muted">نام کاربری را وارد کنید</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="feather icon-lock"></i></span>
                                            <input type="text" name="password" class="form-control"
                                                   placeholder="کلمه عبور" required>
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
                                        <input type="text" name="email" class="form-control" placeholder="ایمیل">
                                        <small class="form-text text-muted">ایمیل را وارد کنید</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="input-group">
                                            <input type="text" name="mobile" class="form-control"
                                                   placeholder="شماره تماس">
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
                                        <input type="text" name="multiuser" class="form-control" value="1"
                                               placeholder="کاربر همزمان" required>
                                        <small class="form-text text-muted">تعداد کاربران همزمان را وارد کنید</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="input-group">
                                            <input type="text" name="connection_start" class="form-control"
                                                   placeholder="30">
                                        </div>
                                        <small class="form-text text-muted">تاریخ انقضا (با اولین اتصال) </small>
                                        <small style="color:red">اگر قصد دارید با اولین اتصال تاریخ انقضا برا کاربر ثبت
                                            و محاسبه شود تعداد روز اعتبار را در فیلد بالا وارد نمائید</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <input type="text" name="traffic" class="form-control" value="0">
                                        <br>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" class="form-check-input input-primary"
                                                   name="type_traffic" value="mb" checked="">
                                            <label class="form-check-label" for="customCheckinl311">مگابایت</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" class="form-check-input input-primary"
                                                   name="type_traffic" value="gb">
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
                                            <input type="date" class="form-control" name="expdate" id="date" data-gtm-form-interact-field-id="0">
                                        </div>
                                        <small class="form-text text-muted">تاریخ انقضا</small>
                                        <small style="color:red">در صورت تنظیم تاریخ انقضا به صورت خودکار این فیلد را
                                            خالی بگذارید</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">توضیحات</label>
                            <textarea class="form-control" rows="3" name="desc" placeholder="توضیحات"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <div class="flex-grow-1 text-end">
                    <button type="button" class="btn btn-link-danger btn-pc-default" data-bs-dismiss="modal">انصراف
                    </button>
                    <button type="submit" class="btn btn-primary" value="submit" name="submit">ذخیره</button>
                </div>
            </div>
            </form>
    </div>
</div>

<!-- Bulk -->
<div class="modal fade" id="customer_bulk-modal" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
        <form class="modal-content" action="" method="post" enctype="multipart/form-data" onsubmit="return confirm('از انجام این عملیات مطمئن هستید؟');">

            <div class="modal-header">
                <h5 class="mb-0">ساخت کاربر عمده</h5>
                <a href="#" class="avtar avtar-s btn-link-danger btn-pc-default" data-bs-dismiss="modal">
                    <i class="ti ti-x f-20"></i>
                </a>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group row">
                            <div class="col-lg-3">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <input type="text" name="count_user" class="form-control" value="5" placeholder="تعداد ساخت کاربر" required>
                                        <small class="form-text text-muted">تعداد ساخت یوزر را وارد کنید</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <input type="text" name="start_user" class="form-control" value="xpuser" placeholder="اعبارت ابتدایی نام کاربری" required>
                                        <small class="form-text text-muted">عبارت ابتدایی نام کاربری را وارد کنید</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <input type="text" name="start_number" class="form-control" value="100" placeholder="عدد شروع" required>
                                        <small class="form-text text-muted">این عدد بعد از عبارت ابتدایی نام کاربری قرار میگرد</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="input-group">
                                        <span class="input-group-text"><i class="feather icon-lock"></i></span>
                                        <input type="text" name="password" class="form-control" placeholder="کلمه عبور">
                                        </div>
                                        <small class="form-text text-muted">در صورتی که قصد دارید کلمه عبور راندم باشد فیلد بالا را خالی بگذارید</small>
                                        <br>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" class="form-check-input input-primary" name="pass_random" value="number" checked="">
                                            <label class="form-check-label" for="customCheckinl311">ترکیب اعداد</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" class="form-check-input input-primary" name="pass_random" value="nmuber_az">
                                            <label class="form-check-label" for="customCheckinl311">ترکیب حروف و اعداد</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="input-group">
                                            <input type="text" name="char_pass" class="form-control" value="6" placeholder="تعداد کاراکتر کلمه عبور" required>
                                        </div>
                                        <small class="form-text text-muted">تعدا کاراکتر کلمه عبور را وارد کنید</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <input type="text" name="multiuser" class="form-control" value="1"
                                               placeholder="کاربر همزمان" required>
                                        <small class="form-text text-muted">تعداد کاربران همزمان را وارد کنید</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="input-group">
                                            <input type="text" name="connection_start" class="form-control"
                                                   value="30" placeholder="30" required>
                                        </div>
                                        <small class="form-text text-muted">تاریخ انقضا (با اولین اتصال) </small>
                                        <small style="color:red">اگر قصد دارید با اولین اتصال تاریخ انقضا برا کاربر ثبت
                                            و محاسبه شود تعداد روز اعتبار را در فیلد بالا وارد نمائید</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <input type="text" name="traffic" class="form-control" value="0" required>
                                        <br>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" class="form-check-input input-primary"
                                                   name="type_traffic" value="mb" checked="">
                                            <label class="form-check-label" for="customCheckinl311">مگابایت</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" class="form-check-input input-primary"
                                                   name="type_traffic" value="gb">
                                            <label class="form-check-label" for="customCheckinl32">گیگ</label>
                                        </div>
                                        <small class="form-text text-muted">ترافیک را وارد نمائید</small>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="alert alert-warning" role="alert">
                                        توجه داشته باشید در صورتی که کاربر قبلا ثبت شده باشد سیستم اجازه ثبت را نخواهد داد
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <div class="flex-grow-1 text-end">
                    <button type="button" class="btn btn-link-danger btn-pc-default" data-bs-dismiss="modal">انصراف
                    </button>
                    <button type="submit" class="btn btn-primary" value="bulk" name="bulk">افزودن</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- [ Main Content ] end -->
