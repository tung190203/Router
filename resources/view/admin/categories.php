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
                    <li class="breadcrumb-item">Categories</li>
                    <li class="breadcrumb-item" aria-current="page">
                        Categories-data-table
                        
                    </li>
                </ol>
            </nav>
        </div>

        <div class="row">

            <div class="col-12">
                <!-- Recent Order Table -->
                <div class="card card-table-border-none recent-orders" id="recent-orders">
                    <div class="card-header justify-content-between">
                        <h2>Categories-data-table</h2>
                        <input type="button" value="Add" class="btn btn-info" data-toggle="modal" data-target="#exampleModalForm">
                    </div>
                    <div class="card-body pt-0 pb-5">
                        <table class="table card-table table-responsive table-responsive-large table-striped" style="width: 100%">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Categories ID</th>
                                    <th>Categories Name</th>
                                    <th>Description </th>           
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            
                                    foreach($categories as $value):
                                    ?>
                                <tr>
                                   <td></td>
                                    <td><?=  $value->Cate_id ?></td>
                                    <td>
                                        <?=  $value->Cate_name ?>
                                    </td>
                                    <td class="d-none d-lg-table-cell"><?= $value->Description?></td>

                                    <td class="text-right">
                                        <div class="dropdown show d-inline-block widget-dropdown">
                                            <a class="dropdown-toggle icon-burger-mini" href="" role="button"
                                                id="dropdown-recent-order1" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false" data-display="static"></a>
                                            <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdown-recent-order1">
                                                <li class="dropdown-item">
                                                    <a href="<?=ROOT_PATH?>update-categories&User_id=<?php echo $value->Cate_id?>">Update</a>
                                                </li>
                                                <li class="dropdown-item">
                                                    <a href="<?=ROOT_PATH?>delete-categories&User_id=<?php echo $value->Cate_id ?>">Remove</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <?php
                                    endforeach
                                ?>
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
                      Add Product
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>

                  <div class="modal-body">
                    <form action="<?=ROOT_PATH?>product-admin" method="POST">
					<input type="hidden" name="Pr_id" value="<?= $values->Pr_id ?>" >
					<div class="form-group">
                        <label for="exampleInputEmail1">Product Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" "
                        placeholder=" Enter Product Name" name="Name_pr" />
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Image</label>
                        <input type="file" class="form-control" id="exampleInputEmail1"  "
                        placeholder=" Enter image" name="Image" />
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Description</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" "
                        placeholder=" Enter Description" name="Description" />
                      </div>
					  <div class="form-group">
					  <label for="">Categories</label>
                      <select name="" id="" class="form-select">
					  <?php  foreach($categories as $value): ?>
							<option value="<?= $value->Cate_id ?>"><?= $value->Cate_name ?></option>
							<?php   endforeach ?>
					  </select>
                      </div>
					  
                      <div class="form-group">
                        <label for="exampleInputPassword1">Price</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Price" name="Price" />
                      </div>
					  
					  
                      <input type="submit" value="Add" class="btn btn-primary " id="btnsm" >
                    </form>
                  </div>
                </div>
              </div>
            </div>
<?php

require_once 'footer.php';
?>
<!-- End Content -->