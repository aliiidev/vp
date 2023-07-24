<!-- [ Main Content ] start -->
<div class="pc-container">
    <div class="pc-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h2 class="mb-0">ویرایش کاربر</h2>
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
                    <div class="row">
                        <?php

                        foreach ($data['for'] as $datum) {
                        ?>
                        <form class="modal-content" action="" method="post" enctype="multipart/form-data" onsubmit="return confirm('از انجام این عملیات مطمئن هستید؟');">

                        <div class="">
                            <div class="form-group row">
                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <input type="text" class="form-control" placeholder="نام کاربری" value="<?php echo $datum['username'];?>" disabled="">
                                            <input type="hidden" name="username" class="form-control" placeholder="نام کاربری" value="<?php echo $datum['username'];?>" >
                                            <small class="form-text text-muted">نام کاربری را وارد کنید</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="feather icon-lock"></i></span>
                                                <input type="text" name="password" class="form-control" placeholder="کلمه عبور" required="" value="<?php echo $datum['password'];?>">
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
                                            <input type="text" name="email" class="form-control" placeholder="ایمیل" value="<?php echo $datum['email'];?>">
                                            <small class="form-text text-muted">ایمیل را وارد کنید</small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="input-group">
                                                <input type="text" name="mobile" class="form-control" placeholder="شماره تماس" value="<?php echo $datum['mobile'];?>">
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
                                            <input type="text" name="multiuser" class="form-control" placeholder="کاربر همزمان" required="" value="<?php echo $datum['multiuser'];?>">
                                            <small class="form-text text-muted">تعداد کاربران همزمان را وارد کنید</small>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <input type="text" name="traffic" class="form-control"  value="<?php echo $datum['traffic'];?>">
                                            <br>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" class="form-check-input input-primary" name="type_traffic" value="mb" checked="">
                                                <label class="form-check-label" for="customCheckinl311">مگابایت</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input type="radio" class="form-check-input input-primary" name="type_traffic" value="gb">
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
                                                <input type="date" class="form-control" name="expdate" value="<?php echo $datum['finishdate'];?>" id="date" data-gtm-form-interact-field-id="0">
                                            </div>
                                            <small class="form-text text-muted">تاریخ انقضا</small>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">توضیحات</label>
                                <textarea class="form-control" rows="3" name="desc" placeholder="توضیحات"><?php echo $datum['info'];?></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary" value="submit" name="submit">ذخیره</button>                        </div>
                        </form>

                    <?php } ?>
                    </div>
                    </div>
                </div>
            </div>
            <!-- [ sample-page ] end -->
        </div>
        <!-- [ Main Content ] end -->
    </div>
</div>

<!-- [ Main Content ] end -->
