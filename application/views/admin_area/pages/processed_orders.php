<div class="container-fluid">
    
        <div class="awesome-cards-heading">
            <div class="row">
                <div class="col-lg-9 col-md-10 text-center mt-5 offset-lg-3 offset-md-1">
                    <h1 class="text-muted mt-5"><i class="fa fa-check"></i>  Processed Orders</h1>
                    <?php if($this->session->flashdata('order_reversed')): ?>
                            <?php echo '<p class="alert alert-info">'.$this->session->flashdata('order_reversed').' <i class="fa fa-check"></i></p>'; ?>
                    <?php endif; ?>
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
                    <h3> <i class="fa fa-clipboard-list"></i> Orders</h3>
                </div>
            <div>
                        <table class="table table-striped table-hover">
                            <tr>
                                <th>ID</th>
                                <th>Name of Card</th>
                                <th>Senders Name</th>
                                <th>Reciever</th>
                                <th>Reciever Location</th>
                                <th>Senders Cellphone</th>
                                <th>Include number on card</th>
                                <th>Recievers Cellphone Number</th>
                                <th>Message To Reciever</th>
                                <th>Action</th>
                            </tr>
                            <tbody id="showdata">
                                <?php foreach($processed_orders as $processed):?>
                                    <tr>
                                        <td><?php echo $processed['id']?></td>
                                        <td><?php echo $processed['name_of_card'];?></td>
                                        <td><?php echo $processed['user_name'];?></td>
                                        <td><?php echo $processed['receiver'];?></td>
                                        <td><?php echo $processed['receiver_location'];?></td>
                                        <td><?php echo $processed['senders_cellphone'];?></td>
                                        <td><?php echo $processed['include_number'];?></td>
                                        <td><?php echo $processed['receiver_cellphone'];?></td>
                                        <td><?php echo $processed['message_to_receiver'];?></td>
                                        <td>
                                            <?php echo form_open('awesome_admin_reverse_order')?>
                                                <input type="hidden" name="order_id" value="<?php echo $processed['id'];?>">
                                                <button type="submit" class="btn btn-primary btn-sm">Reverse</button>
                                            </form>
                                        </td>
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
