<div class="container">
    <div class="row">
        <div class="col-md-10 col-lg-10 offset-md-1 offset-lg-1">
            <div class="row">
                <div class="col-md-6 col-lg-6 offset-md-3 offset-lg-3">
                    <div class="user-sign-in-logo text-center">
                        <img class="img fluid" src="<?php echo base_url()?>assets/dist/images/awesome-logo.JPG" alt="">
                    </div>
                    <?php 
                            if(validation_errors()){
                                echo '<div class="alert alert-danger">'.validation_errors().'</div>';
                            }
                        ?>
                    <div class="user-sign-in">
                        <h2 class="text-center">Create an account</h2>
                        <?php echo form_open('register')?>
                            <div class="form-group">
                                <label>Your name</label>
                                <input type="text" name="username" class="form-control" placeholder="Enter your name">
                            </div>
                            <div class="form-group">
                                <label>Email address</label>
                                <input type="email" name="email_address" class="form-control" placeholder="Enter email address" required>
                            </div>
                            <div class="form-group">
                                <label>Your cellphone number</label>
                                <input type="text" name="cellphone_number" class="form-control" placeholder="Enter your cellphone number">
                            </div>
                            <div class="form-group">
                                <select class="form-control" name="gender">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Enter password" required>
                            </div>
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" name="password2" placeholder="Confirm password" class="form-control"required>
                            </div>
                            <button class="btn btn-success btn-block">Register <i class="fas fa-user-edit"></i></button>
                        </form>
                        <a href="<?php base_url()?>login" class="btn btn-primary btn-block mt-1">Have an account? Login <i class="fas fa-sign-in-alt"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>