<div class="card-body">
    بعد از تغییر پورت سرور ریبوت خواهد شد
             <form class="validate-me" action="" method="post" enctype="multipart/form-data">
                  <div class="form-group row">
                    <div class="col-lg-6">
                      <input class="form-control" type="hidden" name="ssh_port_old" id="text_min_max" value="<?php echo PORT;?>">
                      <input class="form-control" type="text" name="ssh_port" id="text_min_max" value="<?php echo PORT;?>" required="">
                      <small class="form-text text-muted">تغییر پورت سرور</small>
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-lg-4 col-form-label"></div>
                    <div class="col-lg-6">
                        <input type="submit" class="btn btn-primary" name="changeport" value="ذخیره">
                    </div>
                  </div>
                </form>
              </div>
