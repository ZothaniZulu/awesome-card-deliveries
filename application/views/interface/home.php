
        <!-- Home-->
        <div id="showcase">
          <div class="home">
          <div class="row">
            <div class="col-md-10 col-lg-10 col-sm-10 offset-md-1 offset-lg-1 offset-sm-1">
                <?php if($this->session->flashdata('message_submitted')): ?>
                    <?php echo '<div class="alert alert-info text-center">'.$this->session->flashdata('message_submitted').'</div>'; ?>
                <?php endif; ?>
            </div>
            </div>
              <h1 class="welcome-text">Welcome To Awesome Cards</h1>
              <div class="mt-3">
                    <?php if($this->session->flashdata('user_registered')): ?>
                        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
                    <?php endif; ?>
                </div>
          </div>
          
           
        </div>
        <!-- Home-->

        <!-- Cards-->
      <section id="card">
        <div class="container">
          <h2 class="section-heading">Explore our cards <i class="fas fa-shopping-cart"></i></h2>
          <div class="row">
              <div class="col-md-4 mt-2 custom-card">
                <a href="<?php echo base_url()?>man_crush_monday_card" class="link-to-card">
                  <div class="card">
                      <img class="card-img-top" src="<?php echo base_url();?>assets/dist/images/cards/mcm.jpeg" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title text-center">Man Crush Monday</h5>

                        <button class="btn btn-block btn-primary">Place Order <i class="fas fa-shopping-cart"></i></button>
                      </div>
                    </div>
                </a>
              </div>
              <div class="col-md-4 mt-2 custom-card">
                <a href="<?php echo base_url()?>motivational_tuesday_card" class="link-to-card">
                 <div class="card">
                    <img class="card-img-top" src="<?php echo base_url();?>assets/dist/images/cards/it.jpeg" alt="Card image cap">
                    <div class="card-body">
                      <h5 class="card-title text-center">Influencial Tuesday</h5>
                      <button class="btn btn-block btn-primary">Place Order <i class="fas fa-shopping-cart"></i></button>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-md-4 mt-2 custom-card">
                <a href="<?php echo base_url()?>woman_crush_wednesday_card" class="link-to-card">
                  <div class="card">
                      <img class="card-img-top" src="<?php echo base_url();?>assets/dist/images/cards/wcw.jpeg" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title text-center">Woman Crush Wednesday</h5>

                        <button class="btn btn-block btn-primary">Place Order <i class="fas fa-shopping-cart"></i></button>
                      </div>
                    </div>
                </a>
              </div>
          </div>

          <div class="row">
                <div class="col-md-4 mt-2 mb-2 custom-card">
                  <a href="<?php echo base_url()?>throwback_thursday_card" class="link-to-card">
                    <div class="card">
                        <img class="card-img-top" src="<?php echo base_url();?>assets/dist/images/cards/tbt.jpeg" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title text-center">Throwback Thursday</h5>
  
                          <button class="btn btn-block btn-primary">Place Order <i class="fas fa-shopping-cart"></i></button>
                        </div>
                      </div>
                  </a>
                </div>
                <div class="col-md-4 mt-2 mb-2 custom-card">
                  <a href="<?php echo base_url()?>forgiveness_friday_card" class="link-to-card">
                    <div class="card">
                        <img class="card-img-top" src="<?php echo base_url();?>assets/dist/images/cards/ff.jpeg" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title text-center">Forgiveness Friday</h5>
  
                          <button class="btn btn-block btn-primary">Place Order <i class="fas fa-shopping-cart"></i></button>
                        </div>
                      </div>
                </div>
                <div class="col-md-4 mt-2 mb-2 custom-card">
                  <a href="<?php echo base_url()?>midnight_dirty_talks_card" class="link-to-card">
                    <div class="card">
                        <img class="card-img-top" src="<?php echo base_url();?>assets/dist/images/cards/mdt.jpeg" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title text-center">Midnight Dirty Talks</h5>
  
                          <button class="btn btn-block btn-primary">Place Order <i class="fas fa-shopping-cart"></i></button>
                        </div>
                      </div>
                  </a>
                </div>
          </div>
        </div>
      </section>

      <section id="awesome-meetups">
        
        <div class="container awesome-meetups-text">
        <h1 class="text-center">Awesome Meetups <i class="fas fa-heart"></i></h1>
          <p class="lead">
            Meet new awesome people that you can hangout with that are signed up on the Awesome Cards site. 
            It is never too late to meet new people and have new experiences. Click on the button below to explore
          </p>
            
            <a href="<?php echo base_url()?>awesome_meetups" class="btn btn-info btn-lg">Take me there! <i class="fas fa-heart"></i></a>
            <br>
            <br>
        </div>
      </section>
       
        <!-- Cards-->
      <!-- Reviews -->
        <!-- <section id="reviews">
          <h1 class="text-center">Reviews</h1>
          <div class="container">
            <div class="col-lg-10 col-md-10 offset-lg-1 offset-md-1">
              <h2 class="text-center">Here's what others think about us</h2>
              <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <h3 class="text-center">First Review</h3>
                      <br>
                      <h4 class="text-center">Siyabonga Mgwenya says:</h4>
                      <p class="lead text-center">The service is great</p>

                    </div>
                    <div class="carousel-item">
                      <h3 class="text-center">Second Review</h3>
                      <br>
                      <h4 class="text-center">Siyabonga Mgwenya says:</h4>
                      <p class="lead text-center">The service is great</p>
                    </div>
                    <div class="carousel-item">
                      <h3 class="text-center">Third Review</h3>
                      <br>
                      <h4 class="text-center">Siyabonga Mgwenya says:</h4>
                      <p class="lead text-center">The service is great</p>
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
            </div>
          </div>
        </section> -->
      <!-- Reviews -->
        <!--Contact-->
        <section id="contact">
          <h1 class="text-center">Contact Us <i class="fas fa-envelope-square"></i></h1>
          <div class="container">
            <div class="row">
              <div class="col-md-6 offset-md-3">
                  <div class="card">
                      
                      <div class="card-body">
                       <?php echo form_open('forms/submit_contact_message_to_administrator')?>
                            <div class="form-group">
                              <label>Name</label>
                              <input type="text" name="name" class="form-control" placeholder="Enter your name">
                            </div>
                            <div class="form-group">
                              <label>Email Address</label>
                              <input type="email" class="form-control" name="email" placeholder="Enter your email address">
                            </div>
                            <div class="form-group">
                              <label>Message</label>
                              <textarea class="form-control" name="message"></textarea>
                            </div>
                            <button type="submit" class="btn btn-block btn-success">Send Message</a>
                       </form>
                        
                      </div>
                    </div>
              </div>
            </div>
          </div>
        </section>
        <!--Contact-->

        <!--about-->
          <section id="about">
            <h1 class="text-center">About <i class="fas fa-info-circle"></i></h1>
            <h3 class="text-center"></h3>
            <div class="about">
                <p class="lead">Awesome Cards is a brand that was founded in March 2019. It aims to deliver hand written awesome cards 
                    for specific days of the week.
                </p>
            </div>
          </section>
        <!--about-->