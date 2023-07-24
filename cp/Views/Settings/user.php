<div class="card-body">
    <form class="validate-me" action="" method="post" enctype="multipart/form-data">

                  <div class="form-group row">
                  وضعیت:
                      <?php
                      $limitactive = shell_exec("crontab -l");
                      if (strpos($limitactive, "/var/www/html/cp/Libs/sh/killusers.sh") !== false) {
                          echo '<span class="badge bg-light-success rounded-pill f-12" style="width:100px">فعال</span>';
                      } else {
                          echo '<span class="badge bg-light-danger rounded-pill f-12" style="width:100px">غیرفعال</span>';
                      }
                      ?>
                  </div>

                  <div class="form-group row">
                    <div class="col-lg-4 col-form-label"></div>
                    <div class="col-lg-6">
                      <input type="submit" class="btn btn-primary" name="on_limit_user" value="فعال سازی">
                      <input type="submit" class="btn btn-warning" name="off_limit_user" value="غیرفعال سازی">
                    </div>
                  </div>
                </form>
              </div>
