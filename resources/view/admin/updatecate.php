
      <!-- ====================================
          ——— CONTENT WRAPPER
          ===================================== -->
          <div class="content-wrapper">
        <div class="content">
          <div class="bg-white border rounded">
            <div class="row no-gutters">

              <div class="col-lg-12 col-xl-12">
                <div class="profile-content-right profile-right-spacing py-5">
                  <ul class="nav nav-tabs px-3 px-xl-5 nav-style-border" id="myTab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="settings-tab" data-toggle="tab" href="#settings" role="tab"
                        aria-controls="settings" aria-selected="false">Update Categories</a>
                    </li>
                  </ul> 
                  <?php
                  ?>
                  <div class=" px-3 px-xl-9" id="myTabContent">
                    <div class="tab-pane fade show active"  role="tabpanel" aria-labelledby="settings-tab">
                      <div class="tab-pane-content mt-5">
                        <form  action="<?=ROOT_PATH?>update-categories" method="post" >
                        <input type="hidden" name="Cate_id" value="<?= $categories->Cate_id ?>">
                          <div class="form-group mb-4">
                            <label for="userName">Cate Name</label>
                            <input type="text" class="form-control"  value="<?= $categories->Cate_name?>" name="Cate_name" />
                          </div>
                          <div class="form-group mb-4">
                            <label for="email">Description</label>
                            <input type="text" class="form-control" value="<?= $categories->Description?>" name="Description"/>
                          </div>
                            <input type="submit" class="btn btn-primary" value="Update Categories">
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      
  <script src="assets/plugins/jquery/jquery.min.js"></script>
  <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/plugins/simplebar/simplebar.min.js"></script>

  <script src="assets/plugins/daterangepicker/moment.min.js"></script>
  <script src="assets/plugins/daterangepicker/daterangepicker.js"></script>
  <script src="assets/js/date-range.js"></script>

  <script src="assets/js/sleek.js"></script>
  <link href="assets/options/optionswitch.css" rel="stylesheet" />
  <script src="assets/options/optionswitcher.js"></script>
</body>

</html>
<?php
require_once 'footer.php';
?>