
      <!-- ====================================
          ——— CONTENT WRAPPER
          ===================================== -->
      <div class="content-wrapper">
        <div class="content">
          <div class="bg-white border rounded">
            <div class="row no-gutters">
               
              <div class="col-lg-4 col-xl-3">
                <div class="profile-content-left profile-left-spacing pt-5 pb-3 px-3 px-xl-5">
                  <div class="card text-center widget-profile px-0 border-0">
                    <div class="card-img mx-auto rounded-circle">
                      <img src="assets/img/avatar-facebook-mac-dinh-8.jpeg" alt="user image" />
                    </div>
                    <?php
                          // echo '<pre>';
                          // var_dump($result);
                          // echo '</pre>';
                          foreach($result as $value){
                            extract($value);
                          
                          ?>
                    <div class="card-body">
                      <h4 class="py-2 text-dark"><?php echo $Name ?></h4>
                      
                    </div>
                  </div>

                  <hr class="w-100" />

                  <div class="contact-info pt-4">
                    <h5 class="text-dark mb-1">Contact Information</h5>
                    <p class="text-dark font-weight-medium pt-4 mb-2">
                      Email address
                    </p>
                    <p><?php echo $Email ?></p>
                    <p class="text-dark font-weight-medium pt-4 mb-2">
                      Phone Number
                    </p>
                    <p><?php echo $Phone ?></p>
                    <p class="text-dark font-weight-medium pt-4 mb-2">
                      Address
                    </p>
                    <p><?php echo $Address ?></p>
                  </div>
                </div>
              </div>

              <div class="col-lg-8 col-xl-9">
                <div class="profile-content-right profile-right-spacing py-5">
                  <ul class="nav nav-tabs px-3 px-xl-5 nav-style-border" id="myTab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="settings-tab" data-toggle="tab" href="#settings" role="tab"
                        aria-controls="settings" aria-selected="false">Settings</a>
                    </li>
                  </ul> 
                  
                  <div class=" px-3 px-xl-9" id="myTabContent">
                    <div class="tab-pane fade show active"  role="tabpanel" aria-labelledby="settings-tab">
                      <div class="tab-pane-content mt-5">
                        <form  action="index.php?act=updateuser" method="post" >
                        
                          <div class="form-group mb-4">
                            <label for="userName">User name</label>
                            <input type="text" class="form-control" id="userName" value="<?php echo $Name?>" name="username" />
                          </div>

                          <div class="form-group mb-4">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" value="<?php echo $Email?>" name="email"/>
                          </div>
                           <div class="form-group mb-4">
                            <label for="userName">Address</label>
                            <input type="text" class="form-control" id="Address" value="<?php echo $Address ?>" name="address" />
                          </div>

                           <div class="form-group mb-4">
                            <label for="userName">Phone</label>
                            <input type="text" class="form-control" id="Phone" value="<?php echo $Phone ?>" name="phone" />
                          </div>
                          <div class="form-group mb-4">
                            <label for="newPassword">Role</label>
                          <select name="role" id="" class="form-control">
                            <?php 
                            if($role==0){
                              $roles= "User";
                              $rl = 1;
                              $rs= "Admin";
                            }else{
                              $roles="Admin";
                              $rl = 0;
                              $rs ="User";
                            }   
                            if($rl==0){
                              $role = 1;
                              $roles ="Admin";
                            }
                            ?>
                            <option value="<?php echo $role ?>"><?php echo $roles ?></option>
                            <option value="<?php echo $rl ?>"><?php echo $rs ?></option>
                            
                            
                          </select>
                          <div class="form-group mb-4">
                            <label for="newPassword">New password</label>
                            <input type="password" class="form-control" id="newPassword" name="newpassword" value="<?php  echo $Password?>"/>
                          </div>
                        
                           
                         

                          <div class="form-group mb-4">
                            <label for="conPassword">Confirm password</label>
                            <input type="password" class="form-control" id="conPassword" name="comfirm_password" value="<?php  echo $Password?>" />
                          </div>

                            <?php
                          }
                            ?>
                          <div class="d-flex justify-content-end mt-5">
                            <input type="hidden" name="id" value="<?php echo $User_id ?>">
                            
                            <input type="submit" class="btn btn-primary" value="Update Profile" name="update" >
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
        <!-- End Content -->
      </div>
      <!-- End Content Wrapper -->

      <!-- Footer -->
   
    <!-- End Page Wrapper -->
  <!-- </div>
                        </div> -->
  <!-- End Wrapper -->

  <!-- Javascript -->
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