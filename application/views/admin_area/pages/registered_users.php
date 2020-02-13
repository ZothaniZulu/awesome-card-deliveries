<div class="container-fluid">
    
        <div class="awesome-cards-heading">
            <div class="row">
                <div class="col-lg-9 col-md-10 text-center mt-5 offset-lg-3 offset-md-1">
                    <h1 class="text-muted mt-5"><i class="fa fa-user"></i> Users</h1>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3">
                <div class="card border-dark mt-1">
                    <a href="<?php echo base_url();?>awesome_cards_admin_registered_users" id="user_count">
                        <div class="card-header bg-dark">
                            <h3 class="text-white"> <i class="fa fa-user"></i> Users</h3>
                        </div>
                        <div class="card-body">
                            <h4 class="text-center"><?php echo $number_of_users;?></h4>
                        </div>
                    </a> 
                </div>
                <div class="card border-dark mt-2">
                    <div class="card-header bg-dark">
                        <h3 class="text-white"> <i class="fa fa-cog"></i> Dashboard</h3>
                    </div>
                    <div class="card-body dashboard">
                        <ul class="list dashboard-list">
                            <li><h5><a href="<?php echo base_url();?>awesome_cards_admin_dashboard" ><i class="fa fa-home"></i> Home</a></h5></li>
                        </ul>
                        <ul class="list dashboard-list">
                            <li><h5><a href="<?php echo base_url();?>awesome_cards_admin_customer_messages" ><i class="fa fa-comment"></i> Customer Messages</a></h5></li>
                        </ul>
                        <ul class="list dashboard-list">
                            <li><h5><a href="<?php echo base_url();?>awesome_cards_admin_processed_orders" ><i class="fa fa-check"></i> Processed Orders</a></h5></li>
                        </ul>
                        <ul class="list dashboard-list">
                            <li><h5><a href="<?php echo base_url();?>awesome_cards_admin_registered_users" ><i class="fa fa-user"></i> Registered Users</a></h5></li>
                        </ul>
                    <a href="<?php echo base_url();?>awesome_cards_admin_logout" class="btn btn-outline-success btn-block">Logout</a>
                </div>
            </div> 
            
            
        </div>

        
            <div class="col-lg-9">
            <div class="card border-dark mt-1">
                <div class="card-header bg-dark text-white">
                    <h3> <i class="fa fa-user"></i> Registered Users</h3>
                </div>
            <div>
                        <table class="table table-striped table-hover">
                            <tr>
                                <th>User Name</th>
                                <th>Gender</th>
                                <th>Email Address</th>
                                <th>Cellphone Number</th>
                                
                            </tr>
                            <tbody id="showdata">
                                <?php foreach($users as $user):?>
                                    <tr>
                                        <td><?php echo $user['user_name'];?></td>
                                        <td><?php echo $user['gender'];?></td>
                                        <td><?php echo $user['email_address'];?></td>
                                        <td><?php echo $user['cellphone_number'];?></td>
                                    </tr>
                                <?php endforeach;?>
                                    
                            </tbody> 
                        </table>
                        <div class="pagination-links text-center">
                            <?php echo $this->pagination->create_links(); ?>
                        </div>
                    </div>
                </div>
            </div>
</div>
       
        

        
    

</div>
