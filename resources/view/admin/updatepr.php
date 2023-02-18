
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
                        aria-controls="settings" aria-selected="false">Update Product</a>
                    </li>
                  </ul> 
                  <?php
                  ?>
                  <div class=" px-3 px-xl-9" id="myTabContent">
                    <div class="tab-pane fade show active"  role="tabpanel" aria-labelledby="settings-tab">
                      <div class="tab-pane-content mt-5">
                        <form  action="<?=ROOT_PATH?>update-product" method="post" >
                        <input type="hidden" name="Pr_id" value="<?= $products->Pr_id ?>">
                          <div class="form-group mb-4">
                            <label for="userName">Product Name</label>
                            <input type="text" class="form-control"  value="<?= $products->Name_pr?>" name="Name_pr" />
                          </div>

                          <div class="form-group mb-4">
                            <label for="email">Description</label>
                            <input type="text" class="form-control" value="<?= $products->Description?>" name="Description"/>
                          </div>
                           <div class="form-group mb-4">
                            <label for="userName">Image</label>
                            <input type="file" class="form-control" name="Image" />
                          </div>

                           
                          <div class="form-group mb-4">
                            <label for="newPassword">Categories</label>
                          <select name="Cate_id" id="" class="form-control">
                            <?php 
                            
                           foreach($categories as $cate):
                            ?>
                            <option value="<?= $cate->Cate_id ?>"><?= $cate->Cate_name ?></option>
                            <?php
                            endforeach
                            ?>
                          </select>
                          </div>
                          <div class="form-group mb-4">
                            <label for="userName">Price</label>
                            <input type="text" class="form-control"  value="<?= $products->Price ?>" name="Price" />
                          </div>
                          <div class="d-flex justify-content-end mt-5">
                           
                            
                            <input type="submit" class="btn btn-primary" value="Update Product">
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