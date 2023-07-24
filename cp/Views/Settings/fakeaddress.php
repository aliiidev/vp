<div class="card-body">
    <form class="validate-me" action="" method="post" enctype="multipart/form-data">
        <div class="form-group row">
            <div class="col-lg-6">
                <input type="text" name="fake_address" id="confirm-password" placeholder="آدرس فیک" value="<?php echo fakeurl;?>" class="form-control" >
                <input type="hidden" name="fake_address_old" id="confirm-password" placeholder="آدرس فیک" value="<?php echo fakeurl;?>" class="form-control" >
                <small class="form-text text-muted">آدرس وب سایت</small>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-lg-4 col-form-label"></div>
            <div class="col-lg-6">
                <input type="submit" name="fakeurl" class="btn btn-primary" value="ذخیره">
            </div>
        </div>
    </form>

</div>
