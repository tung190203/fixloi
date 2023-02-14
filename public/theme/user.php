<div class="content-wrapper">
    <div class="content">
        <div class="breadcrumb-wrapper">
            <h1>Tables</h1>

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb p-0">
                    <li class="breadcrumb-item">
                        <a href="index.php">
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
                    </div>
                    <div class="card-body pt-0 pb-5">
                        <table class="table card-table table-responsive table-responsive-large" style="width: 100%">
                            <thead>
                                <tr>
                                    <th>User ID</th>
                                    <th>Name</th>
                                    <th>Email </th>
                                    <th>Address</th>
                                    <th>
                                        Phone
                                    </th>
                                    <th>
                                        Role
                                    </th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            
                                    foreach($result as $value){
                                        extract($value);
                
                                    ?>
                                <tr>
                                   
                                    <td><?=  $User_id ?></td>
                                    <td>
                                        <?=  $Name ?>
                                    </td>
                                    <td class="d-none d-lg-table-cell"><?= $Email?></td>
                                    <td class="d-none d-lg-table-cell"><?= $Address ?></td>
                                    <td class="d-none d-lg-table-cell"><?= $Phone?></td>
                                    <td class="d-none d-lg-table-cell" >
                                    <?php
                                    if($role==1){
                                        $role = "Admin";
                                        ?>
                                        <span class="badge badge-danger"><?= $role?></span>
                                        <?php
                                    }elseif($role==0){
                                        $role = "User";
                                        ?>
                                         <span class="badge badge-success"><?= $role?></span>
                                        <?php
                                    }
                                    ?>
                                    </td>
                                    <td class="d-none d-lg-table-cell">
                                        
                                    </td>

                                    <td class="text-right">
                                        <div class="dropdown show d-inline-block widget-dropdown">
                                            <a class="dropdown-toggle icon-burger-mini" href="" role="button"
                                                id="dropdown-recent-order1" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false" data-display="static"></a>
                                            <ul class="dropdown-menu dropdown-menu-right"
                                                aria-labelledby="dropdown-recent-order1">
                                                <li class="dropdown-item">
                                                    <a href="index.php?act=updateus&User_id=<?php echo $User_id?>">Update</a>
                                                </li>
                                                <li class="dropdown-item">
                                                    <a href="index.php?act=deleteus&User_id=<?php echo $User_id ?>">Remove</a>
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