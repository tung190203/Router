<div class="content-wrapper">
  <div class="content">
    <div class="row">

      <div class="col-xl-12">
        <!-- Top Products -->
        <div class="card card-default">
          <div class="card-header justify-content-between mb-4">
            <h2>Top Products</h2>
            <div>
            </div>
          </div>
          <?php
          
          ?>
          <div class="card-body py-0">
            <div class="media d-flex mb-5">
              <div class="media-image align-self-center mr-3 rounded">
                <a href="#"><img src="./assets_admin/img/products/p1.jpg" alt="customerimage" /></a>
              </div>
              <div class="media-body align-self-center">
                <a href="#">
                  <h6 class="mb-3 text-dark font-weight-medium">
                    Coach Swagger
                  </h6>
                </a>
                <p class="float-md-right">
                  <span class="text-dark mr-2">20</span>Sales
                </p>
                <p class="d-none d-md-block">
                  Statement belting with double-turnlock hardware adds
                  “swagger” to a simple.
                </p>
                <p class="mb-0">
                  <del>$300</del>
                  <span class="text-dark ml-3">$250</span>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <!-- Recent Order Table -->
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
                  <th>Infor</th>
                  <th class="d-none d-lg-table-cell">Guests</th>
                  <th class="d-none d-lg-table-cell">Time</th>
                  <th class="d-none d-lg-table-cell">Notes</th>
                  <th>Status</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>24541</td>
                  <td>
                    TB-
                  </td>
                  <td class="d-none d-lg-table-cell">User</td>
                  <td class="d-none d-lg-table-cell">User_infor</td>
                  <td class="d-none d-lg-table-cell">10</td>
                  <td class="d-none d-lg-table-cell">Day & Time</td>
                  <td>Note</td>
                  <td>
                    <!-- if else -->
                    <span class="badge badge-success">Completed</span>
                    <!-- <span class="badge badge-warning">Delayer</span>
                    <span class="badge badge-danger">Cancel</span> -->
                  </td>
                  <td class="text-right">
                    <div class="dropdown show d-inline-block widget-dropdown">
                      <a class="dropdown-toggle icon-burger-mini" href="" role="button" id="dropdown-recent-order1"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
                      <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-recent-order1">
                        <li class="dropdown-item">
                          <a href="index.php?act=update&id=">Update</a>
                        </li>
                        <li class="dropdown-item">
                          <a href="index.php?act=delete&id=">Remove</a>
                        </li>
                      </ul>
                    </div>
                  </td>
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
<!-- End Content Wrapper -->
<!-- Footer -->