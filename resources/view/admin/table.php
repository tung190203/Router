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
                  <th>Table ID</th>
                  <th>Type</th>
                  <th>Status</th>
                
                </tr>
              </thead>
              <tbody>
                <?php foreach ($mytable as $value):
                  ?>
                  <tr>
                    <td></td>
                    <td>
                     TB-<?= $value->Table_id; ?>
                    </td>
                    <td>
                      <?= $value->Type; ?>
                    </td>
                    <td class="d-none d-lg-table-cell">
                      <?php
                      if($value->Status== "Còn trống"){
                        ?>
                      <span class="badge badge-success">
                      <?= $value->Status; ?>     
                        </span>
                        <?php
                      }elseif($value->Status=="Đã Đặt"){
                        
                        ?>
                          <span class="badge badge-warning">
                      <?= $value->Status; ?>     
                        </span>
                        <?php
                      }elseif($value->Status== "Hết bàn"){
                        ?>
                          <span class="badge badge-danger">
                      <?= $value->Status; ?>     
                        </span>
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
                            <a href="<?=ROOT_PATH?>update-table?Table_id=<?= $value->Table_id; ?>">Update</a>
                          </li>
                          <li class="dropdown-item">
                            <a href="<?=ROOT_PATH?>delete-table?Table_id=<?= $value->Table_id; ?>">Remove</a>
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
												Add Table
											</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>

										<div class="modal-body">
											<form action="<?= ROOT_PATH ?>create-table" method="POST" enctype="multipart/form-data" >
												<div class="form-group">
													<label for="exampleInputEmail1"> Table ID</label>
													<input type="text" class="form-control" id="exampleInputEmail1" "
                        						placeholder="Do not fill in this data" disabled />
												</div>
												<div class="form-group">
													<label for="exampleInputEmail1">Type</label>
													<input type="text" class="form-control" id="exampleInputEmail1" 
                        						 name="Type"/>
												</div>
												<div class="form-group">
													<label for="exampleInputEmail1">Status</label>
													<input type="text" class="form-control" id="exampleInputEmail1" "
                        						placeholder="Status" name="Status" value="Còn trống" />
												</div>
												<input type="submit" value="Add" class="btn btn-primary " id="btnsm">
											</form>
										</div>
									</div>
								</div>
							</div>
						
<?php  require_once 'footer.php'; ?>