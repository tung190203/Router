
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
                        aria-controls="settings" aria-selected="false">Update User</a>
                    </li>
                  </ul> 
                  
                  <div class=" px-3 px-xl-9" id="myTabContent">
                    <div class="tab-pane fade show active"  role="tabpanel" aria-labelledby="settings-tab">
                      <div class="tab-pane-content mt-5">
                        <form  action="<?=ROOT_PATH?>update-user" method="post" >
                        <input type="hidden" name="User_id" value="<?= $user->User_id ?>">
                          <div class="form-group mb-4">
                            <label for="userName">User name</label>
                            <input type="text" class="form-control"  value="<?= $user->Name?>" name="Name" />
                          </div>

                          <div class="form-group mb-4">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" value="<?= $user->Email?>" name="Email"/>
                          </div>
                           <div class="form-group mb-4">
                            <label for="userName">Address</label>
                            <input type="text" class="form-control"  value="<?= $user->Address ?>" name="Address" />
                          </div>

                           <div class="form-group mb-4">
                            <label for="userName">Phone</label>
                            <input type="text" class="form-control"  value="<?= $user->Phone ?>" name="Phone" />
                          </div>
                          <div class="form-group mb-4">
                            <label for="newPassword">New password</label>
                            <input type="password" class="form-control" id="newPassword" name="Password" value="<?php  echo $user->Password?>"/>
                          </div>
                          <div class="form-group mb-4">
                            <label for="newPassword">Role</label>
                          <select name="role" id="" class="form-control">
                            <?php 
                            if($user->role==0){
                              $roles= "User";
                              $rl = 1;
                              $rs= "Admin";
                            }else{
                              $roles="Admin";
                              $rl = 0;
                              $rs ="User";
                            }   
                            if($rl==0){
                              $user->role = 1;
                              $roles ="Admin";
                            }
                            ?>
                            <option value="<?= $user->role ?>"><?= $roles ?></option>
                            <option value="<?= $rl ?>"><?= $rs ?></option>
                          </select>
                          </div>
                          <div class="d-flex justify-content-end mt-5">
                           
                            
                            <input type="submit" class="btn btn-primary" value="Update Profile">
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