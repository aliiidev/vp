<div class="card-body">
    <form class="validate-me" action="" method="post" enctype="multipart/form-data">
                  <div class="form-group row">
                    <div class="col-lg-6">
                      <textarea class="form-control" style="height: 200px;" type="text" name="list_block" placeholder="1.1.1.1
1.2.3.4"> <?php echo file_get_contents("/var/www/html/cp/Libs/iplist.txt");?></textarea>
                      <small class="form-text text-muted">لیست IP  ها | با Enter می توانید IP ها را جدا کنید</small>
                    </div>
                  </div>
        <div class="form-group">
        وضعیت: <?php
        $limitlist = shell_exec("sudo iptables -L OUTPUT");
        $limitlist = preg_split("/\r\n|\n|\r/", $limitlist);
        $iptablesnumber = count($limitlist) - 3;
        if (0 < $iptablesnumber) {
            echo '<span class="badge bg-light-success rounded-pill f-12" style="width:100px">فعال</span>';
        } else {
            echo '<span class="badge bg-light-danger rounded-pill f-12" style="width:100px">غیرفعال</span>';
        }
        ?></div>
                  <div class="form-group row">
                    <div class="col-lg-6">
                      <input type="submit" name="blockip" class="btn btn-primary" value="ذخیره لیست">
                      <input type="submit" name="active_blockip" class="btn btn-warning" value="فعال سازی">
                      <input type="submit" name="deactive_blockip" class="btn btn-success" value="غیرفعال سازی">
                    </div>
                  </div>
                </form>

              </div>
