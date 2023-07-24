<div class="card-body">
    بعد از تغییر کلمه عبور با ارور 500 مواجه خواهید شد. با یکبار رفرش صفحه ارور رفع خواهد شد.
    <br>
    <br>
                <form class="validate-me" action="" method="post" enctype="multipart/form-data">
                  <div class="form-group row">
                    <div class="col-lg-6">
                      <input class="form-control" value="<?php echo $adminuser;?>" disabled>
                      <input class="form-control" type="hidden" name="user_root" value="<?php echo $adminuser;?>" >
                      <small class="form-text text-muted">نام کاربری</small>
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-lg-6">
                      <input class="form-control" type="text" name="changhe_pass_root" value="<?php echo $adminpassword;?>" required="">
                      <input class="form-control" type="hidden" name="changhe_pass_root_old" value="<?php echo $adminpassword;?>" required="">
                      <small class="form-text text-muted">کلمه عبور</small>
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-lg-4 col-form-label"></div>
                    <div class="col-lg-6">
                      <input type="submit" class="btn btn-primary" name="changepass" value="ذخیره">
                    </div>
                  </div>
                </form>
              </div>
