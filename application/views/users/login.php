<div class="container">
    <div class="row">
        <div class="col-md-10 col-lg-10 offset-md-1 offset-lg-1">
            <div class="row">
                <div class="col-md-6 col-lg-6 offset-md-3 offset-lg-3">
                    <div class="user-sign-in-logo text-center">
                        <img class="img fluid" src="<?php echo base_url()?>assets/dist/images/awesome-logo.JPG" alt="">
                    </div>
                    <div class="user-sign-in">
                        <h2 class="text-center">Welcome, please login</h2>
                        <?php if($this->session->flashdata('login_failed')): ?>
                            <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
                        <?php endif; ?>
                        <?php if($this->session->flashdata('user_loggedout')): ?>
                            <?php echo '<p class="alert alert-primary">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
                        <?php endif; ?>
                        <?php echo form_open('login')?>
                            <div class="form-group">
                                <label>Email address</label>
                                <input type="email" name="email_address" class="form-control" placeholder="Enter email address" required>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Enter password" required>
                            </div>
                            <button class="btn btn-success btn-block">Login <i class="fas fa-sign-in-alt"></i></button>
                        </form>
                        <a href="<?php echo base_url()?>register" class="btn btn-primary btn-block mt-1">Register <i class="fas fa-user-edit"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>