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
                    <li class="breadcrumb-item">Table</li>
                    <li class="breadcrumb-item" aria-current="page">
                        Table-status
                    </li>
                </ol>
            </nav>
        </div>

        <div class="row">

            <div class="col-12">
                <!-- Recent Order Table -->
                <div class="card card-table-border-none recent-orders" id="recent-orders">
                    <div class="card-header justify-content-between">
                        <h2>Table-status</h2>
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
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="text-right">
                                            <div class="dropdown show d-inline-block widget-dropdown">
                                                <a class="dropdown-toggle icon-burger-mini" href="" role="button" id="dropdown-recent-order1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
                                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-recent-order1">
                                                    <li class="dropdown-item">
                                                        <a href="/updateus&User_id=">Update</a>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <a href="/deleteus&User_id=">Remove</a>
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
</div>