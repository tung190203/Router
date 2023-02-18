<div class="content-wrapper">
  <div class="content">
    <div class="row">
      <div class="col-12">
        <div class="card card-table-border-none recent-orders" id="recent-orders">
          <div class="card-header justify-content-between">
            <h2>Table Reservation</h2>
          </div>
          <div class="card-body pt-0 pb-5">
            <table class="table card-table table-responsive table-responsive-large" style="width: 100%">
              <thead>
                <tr>
                  <th >Booking ID</th>
                  <th>Table ID</th> 
                  <th>User Booking</th>
                  
                  <th class="d-none d-lg-table-cell">Guests</th>
                  <th class="d-none d-lg-table-cell">Time</th>
                  <th class="d-none d-lg-table-cell">Notes</th>
                  <th>Status</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <?php
                  foreach($booking as $book):
                  ?>
                  <td><?= $book->Booking_id ?></td>
                  <td>
                   TB- <?= $book->Table_id ?>
                  </td>
                  <td class="d-none d-lg-table-cell"><?= $book->User_id ?></td>
                  <td class="d-none d-lg-table-cell"><?= $book->Guests ?></td>
                  <?php
                  if($book->Time==0){
                    $book->Time = "Sáng";
                  }elseif($book->Time==1){
                    $book->Time = "Trưa";
                  }elseif($book->Time ==2){
                    $book->Time = "Tối";
                  }
                  ?>
                  <td class="d-none d-lg-table-cell"><?= $book->Day ?> <br> <?= $book->Time ?></td>
                  <td><?=$book->Message?></td>
                  <td>
                    <?php
                    if($book->Status==0){
                      ?>
                      <span class="badge badge-success">Completed</span>
                      <?php
                    }elseif($book->Status==1){
                      ?>
                      <span class="badge badge-warning">Delayer</span>
                      <?php
                    }elseif($book->Status==2){
                      ?>
                      <span class="badge badge-danger">Cancel</span> 
                      <?php
                    }
                    ?>
                  </td>
                  <td class="text-right">
                    <div class="dropdown show d-inline-block widget-dropdown">
                      <a class="dropdown-toggle icon-burger-mini" href="" role="button" id="dropdown-recent-order1"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
                      <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-recent-order1">
                        <li class="dropdown-item">
                          <a href="<?=ROOT_PATH?>update-admin?Booking_id=<?=$book->Booking_id?>">Update</a>
                        </li>
                        <li class="dropdown-item">
                          <a href="<?=ROOT_PATH?>delete-admin?Booking_id="<?=$book->Booking_id?>>Remove</a>
                        </li>
                      </ul>
                    </div>
                  </td>
                  <?php
                  endforeach
                  ?>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Content -->
</div>
<?php
require_once 'footer.php';
?>
<!-- End Content Wrapper -->
<!-- Footer -->