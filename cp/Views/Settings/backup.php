<div class="card-body">
    <form class="validate-me" action="" method="post" enctype="multipart/form-data">
                  <div class="form-group row">
                    <div class="col-lg-6">
                        <input type="submit" name="savebackup" class="btn btn-primary" value="تهیه بکاپ">
                    </div>
                  </div>
    </form>
        <form class="validate-me" action="" method="post" enctype="multipart/form-data">

                  <div class="form-group row">
                    <div class="col-lg-6">
                    <div class="UppyInput form"><div class="uppy-Root uppy-FileInput-container">
                            <input class="uppy-FileInput-input form-control" type="file" name="fileToUpload" multiple="" style="">
                      <small class="form-text text-muted">فایل SQL را انتخاب کنید</small>
                      <br>
                      <input type="submit" name="upbackup" class="btn btn-primary" value="بارگذاری">

                    </div>
                  </div>
                    </div>
                  </div>
                </form>
                <hr>
                <div class="col-sm-12">
          				<div class="card table-card">
          					<div class="card-body">
          						<div class="table-responsive">
          							<table class="table table-hover" id="pc-dt-simple">
          								<thead>
          									<tr>

          										<th>نام</th>
          										<th class="text-center">عملیات</th>
          									</tr>
          								</thead>
          								<tbody>
                                        <?php
                                        $output = shell_exec("ls /var/www/html/cp/storage/backup");
                                        $backuplist = preg_split("/\r\n|\n|\r/", $output);
                                        foreach ($backuplist as $backup) {
                                            if(!empty($backup))
                                            {
                                        ?>
          									<tr>
          										<td><?php echo $backup;?></td>
          										<td class="text-center">
          											<ul class="list-inline me-auto mb-0">
                                                        <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="دانلود">
                                                            <a href="/storage/backup/<?php echo $backup;?>" class="avtar avtar-xs btn-link-danger btn-pc-default">
                                                                <i class="ti ti-download f-18"></i>
                                                            </a>
                                                        </li>
                                                        <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="ریستور">
                                                            <a href="Settings&sort=backup&run=<?php echo $backup;?>" class="avtar avtar-xs btn-link-danger btn-pc-default">
                                                              <i class="ti ti-refresh f-18"></i>
                                                            </a>
                                                        </li>
          												<li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="حذف">
          													<a href="Settings&sort=backup&delete-backup=<?php echo $backup;?>" class="avtar avtar-xs btn-link-danger btn-pc-default">
          														<i class="ti ti-trash f-18"></i>
          													</a>
          												</li>
          											</ul>
          										</td>
          									</tr>
                                        <?php } } ?>
          									</tbody>
          							</table>
          						</div>
          					</div>
          				</div>
          			</div>

              </div>
