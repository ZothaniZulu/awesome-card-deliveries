<div class="container">
    <h1 class="text-center mt-4">Man Crush Monday</h1>
         <div class="row">
            <div class="col-md-10 col-lg-10 col-sm-10 offset-md-1 offset-lg-1 offset-sm-1">
                <?php if($this->session->flashdata('order_submitted')): ?>
                    <?php echo '<div class="alert alert-info text-center">'.$this->session->flashdata('order_submitted').'</div>'; ?>
                <?php endif; ?>
            </div>
        </div>
    <p class="lead text-center">Complete your order in the form below</p>
    <h2 class="text-center"><b>NB:</b></h2>
    <div class="row">
        <div class="col-md-10 col-lg-10 col-sm-10 offset-md-1 offset-lg-1 offset-sm-1">
        <ul class="text-center order-rules">
            <li> 1. All cards cost R20 and they include 1 PS Mini-bar.</li>
            <li> 2. The Delivery is free and we deliver to all the residences of UKZN Westville.</li>
            <li> 3. We will deliver in 48 hours.</li>
            <li> 4. Your message is confidential.</li>
        </ul> 
        </div>
    </div>
    
    <div class="row">
        <div class="col-lg-10 col-md-10 offset-md-1 offset-lg-1">
            <img class="img-fluid" src="<?php echo base_url();?>assets/dist/images/cards/mcm.jpeg" alt="">
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8 col-md-8 offset-md-2 offset-lg-2">
            <h2 class="text-center">Man Crush Monday Order</h2>
            <p class="lead text-center">Please fill in the form below</p>
            <?php echo form_open('submit_man_crush_monday_order');?>
                <div class="form-group">
                    <label>Your Name</label>
                    <input type="hidden" name="name_of_card" value="man crush monday">
                    <input type="text" class="form-control" name="user_name" placeholder="You can be annonymous if you like">
                </div>
                <div class="form-group">
                    <label>Name of the receiver</label>
                    <input type="text" class="form-control" name="name_of_receiver" placeholder="Who are we delivering the card to?" required>
                </div>
                <div class="form-group">
                    <label>Location of the receiver</label>
                    <input type="text" class="form-control" name="location_of_receiver" placeholder="Residence and their room number" required>
                </div>
                <div class="form-group">
                    <label>Your Cellphone Number</label>
                    <input type="text" class="form-control" name="user_cellphone_number" placeholder="Enter your cellphone number" required>
                </div>
                <div class="form-group">
                    <label>Cellphone Number of receiver</label>
                    <input type="text" class="form-control" name="receiver_cellphone_number" placeholder="Its okay if you don't have it" >
                </div>
                <div class="form-group">
                    <label>Write my cellphone number on the card</label>
                    <select name="include_senders_number_on_card" class="form-control">
                        <option value="no">No</option>
                        <option value="yes">Yes</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Message to be delivered</label>
                    <textarea class="form-control" name="message_to_receiver" placeholder="Say something to the receiver"></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Submit order</button>
            </form>
        </div>
    </div>
</div>
<br>