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
                    </div>
                    <div class="card-body pt-0 pb-5">
                        <table class="table card-table table-responsive table-responsive-large table-striped" style="width: 100%">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Categories ID</th>
                                    <th>Categories Name</th>
                                    <th>Description </th> 
									<th>Products Same Categories</th>
                                    <th>Operation</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            
                                    foreach($categories as $value){
                                        
                
                                    ?>
                                <tr>
                                   <td></td>
                                    <td><?=  $value->Cate_id ?></td>
                                    <td>
                                        <?=  $value->Cate_name ?>
                                    </td>
                                    <td class="d-none d-lg-table-cell"><?= $value->Description?></td>
                                    <td class="d-none d-lg-table-cell"></td>                                    
                                    <td class="text-right">
                                        <div class="dropdown show d-inline-block widget-dropdown">
                                            <a class="dropdown-toggle icon-burger-mini" href="" role="button"
                                                id="dropdown-recent-order1" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false" data-display="static"></a>
                                            <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdown-recent-order1">
                                                <li class="dropdown-item">
                                                    <a href="/updatepr&User_id=<?php echo $value->Cate_id?>">Update</a>
                                                </li>
                                                <li class="dropdown-item">
                                                    <a href="/deletepr&User_id=<?php echo $value->Cate_id ?>">Remove</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Content -->