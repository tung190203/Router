<div class="content-wrapper">
  <div class="content">
    <div class="breadcrumb-wrapper">
      <h1>Tables</h1>

      <nav aria-label="breadcrumb">
        <ol class="breadcrumb p-0">
          <li class="breadcrumb-item">
            <a href="/home-admin">
              <span class="mdi mdi-home"></span>
            </a>
          </li>
          <li class="breadcrumb-item">Users</li>
          <li class="breadcrumb-item" aria-current="page">
            Users-data-table
          </li>
        </ol>
      </nav>
    </div>

    <div class="row">

      <div class="col-12">
        <!-- Recent Order Table -->
        <div class="card card-table-border-none recent-orders" id="recent-orders">
          <div class="card-header justify-content-between">
            <h2>Users-data-table</h2>
            <input type="button" value="Add" class="btn btn-info" data-toggle="modal" data-target="#exampleModalForm">
          </div>

          <div class="card-body pt-0 pb-5">
            <table class="table card-table table-responsive table-responsive-large table-striped " style="width: 100%">
              <thead>
                <tr>
                  <th></th>
                  <th>User ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Address</th>
                  <th>Phone</th>
                  <th>Role</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($user as $value):
                  ?>
                  <tr>
                    <td></td>
                    <td>
                      <?= $value->User_id; ?>
                    </td>
                    <td>
                      <?= $value->Name; ?>
                    </td>
                    <td class="d-none d-lg-table-cell">
                      <?= $value->Email; ?>
                    </td>
                    <td class="d-none d-lg-table-cell">
                      <?= $value->Address; ?>
                    </td>
                    <td class="d-none d-lg-table-cell">
                      <?= $value->Phone; ?>
                    </td>
                    <td class="d-none d-lg-table-cell">
                      <?php if ($value->role == 1) {
                        $value->role = "Admin";
                        ?>
                        <span class="badge badge-danger">
                          <?= $value->role; ?>
                        </span>
                      <?php } elseif($value->role==0) {
                        $value->role = "User";
                        ?>
                        <span class="badge badge-success">
                          <?= $value->role ?>
                        </span>
                      <?php } ?>
                    </td>
                    <td class="text-right">
                      <div class="dropdown show d-inline-block widget-dropdown">
                        <a class="dropdown-toggle icon-burger-mini" href="" role="button" id="dropdown-recent-order1"
                          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-recent-order1">
                          <li class="dropdown-item">
                            <a href="<?=ROOT_PATH?>update-user?User_id=<?= $value->User_id; ?>">Update</a>
                          </li>
                          <li class="dropdown-item">
                            <a href="<?=ROOT_PATH?>deleteus?User_id=<?= $value->User_id; ?>">Remove</a>
                          </li>
                        </ul>
                      </div>
                    </td>
                  </tr>
                <?php endforeach ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModalForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalFormTitle" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalFormTitle">
												Add User
											</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<form action="<?= ROOT_PATH ?>create-user" method="POST" enctype="multipart/form-data" >
												<div class="form-group">
													<label for="exampleInputEmail1"> Name</label>
													<input type="text" class="form-control" id="exampleInputEmail1" "
                        						placeholder=" Enter  Name" name="Name" />
												</div>
												<div class="form-group">
													<label for="exampleInputEmail1">Email</label>
													<input type="Email" class="form-control" id="exampleInputEmail1" "
                        						 placeholder = "Enter Email"  name="Email" />
												</div>
												<div class="form-group">
													<label for="exampleInputEmail1">Address</label>
													<input type="text" class="form-control" id="exampleInputEmail1" "
                        						placeholder=" Enter Address" name="Address" />
												</div>
                        	<div class="form-group">
													<label for="exampleInputEmail1">Phone</label>
													<input type="text" class="form-control" id="exampleInputEmail1" "
                        						placeholder=" Enter Phone Number" name="Phone" />
												</div>
                        	<div class="form-group">
													<label for="exampleInputEmail1">Password</label>
													<input type="password" class="form-control" id="exampleInputEmail1" "
                        						placeholder=" Enter Password" name="Password"/>
												</div>
												<input type="submit" value="Add" class="btn btn-primary ">
											</form>
										</div>
									</div>
								</div>
							</div>
						
<?php  require_once 'footer.php'; ?>