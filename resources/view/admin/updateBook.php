          <div class="content-wrapper">
        <div class="content">
          <div class="bg-white border rounded">
            <div class="row no-gutters">

              <div class="col-lg-12 col-xl-12">
                <div class="profile-content-right profile-right-spacing py-5">
                  <ul class="nav nav-tabs px-3 px-xl-5 nav-style-border" id="myTab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="settings-tab" data-toggle="tab" href="#settings" role="tab"
                        aria-controls="settings" aria-selected="false">Update Booking</a>
                    </li>
                  </ul> 
                  <?php
                  ?>
                  <div class=" px-3 px-xl-9" id="myTabContent">
                    <div class="tab-pane fade show active"  role="tabpanel" aria-labelledby="settings-tab">
                      <div class="tab-pane-content mt-5">
                        <form  action="<?=ROOT_PATH?>update-admin" method="post" >
                        <input type="hidden" name="Booking_id" value="<?= $booking->Booking_id ?>">
                          <div class="form-group mb-4">
                            <label for="Table _id">Table ID</label>
                            <input type="text" class="form-control"  value="<?= $booking->Table_id ?>" name="Table_id" disabled />
                          </div>
                          <div class="form-group mb-4">
                            <label for="User_id">User ID</label>
                            <input type="text" class="form-control" value="<?= $booking->User_id?>" name="User_id" disabled/>
                          </div>
                           <div class="form-group mb-4">
                            <label for="User_id">Guests</label>
                            <input type="number" class="form-control" min="1" max="20" value="<?= $booking->Guests?>" name="Guests" />
                          </div>
                           <div class="form-group mb-4">
                            <label for="User_id">Day</label>
                            <input type="date" class="form-control" value="<?= $booking->Day?>" name="Day" />
                          </div>
                           <div class="form-group mb-4">
                            <label for="Time">Time</label>
                            <?php
                            if($booking->Time==0){
                              $t = "Sáng";
                              $t1= "Trưa";
                              $t2="Tối";
                              $vl = 1;
                              $vl1 =2;
                            }elseif($booking->Time==1){
                              $t ="Trưa";
                              $t1  ="Tối";
                              $t2  ="Sáng";
                              $vl = 2;
                              $vl1 =0;
                            }elseif($booking->Time==2){
                              $t="Tối";
                              $t1 = "Sáng";
                              $t2 ="Trưa";
                              $vl =0;
                              $vl1=1;
                            }
                            ?>
                            <select name="Time" id="">
                              <option value="<?=$booking->Time?>"><?= $t?></option>
                              <option value="<?=$vl  ?>"><?= $t1 ?></option>
                              <option value="<?= $vl1 ?>"><?= $t2 ?></option>
                            </select>
                          </div>
                           <div class="form-group mb-4">
                            <label for="User_id">Message</label>
                            <input type="text" class="form-control" value="<?= $booking->Message?>" name="Message"/>
                          </div>
                           <div class="form-group mb-4">
                            <label for="Status">Status</label>
                           <select name="Status" id="">
                              <?php
                              if($booking->Status==0){
                                $bk = "Complate";
                                $bk1  ="Delayer";
                                $bk2 = "Cancel";
                                $vk1 = 1;
                                $vk2 = 2;
                              }elseif($booking->Status==1){
                                $vk1 = 0;
                                $vk2 = 2;
                                $bk1  ="Complate";
                                $bk2 = "Cancel";
                                $bk = "Delayer";
                              }elseif($booking->Status==2){
                                $bk2 = "Complate";
                                $bk1 = "Delayer";
                                $bk = "Cancel";
                                $vk1 =1;
                                $vk2 = 0;
                              }
                              ?>
                            <option value="<?= $booking->Status ?>"><?= $bk?></option>
                                <option value="<?= $vk1?>"><?= $bk1 ?></option>
                                    <option value="<?= $vk2?>"><?= $bk2?></option>
                           </select>
                          </div>
                            <input type="submit" class="btn btn-primary" value="Update Booking">
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