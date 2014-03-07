<?php $this->load->view('layout/public_header.php'); ?>
<div class="row">
<?php if (isset($error)) { ?>
	<div class="alert alert-warning alert-dismissable error-message">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                 <?php echo $error; ?>
    </div>
<?php } ?>

<div class="col-md-6">
		<?php 
		$attributes = array('class'=>'form-signin');
		echo form_open('users/login', $attributes); ?>
		   <h2 class="form-signin-heading">Please Login</h2>
		 
		  <?php 
		  
		  $attributes =  array('name'=>'username','class'=>'form-control', 'placeholder'=>'UserName'); 
		  echo form_input($attributes). '<br/>';
		  $attributes =  array('name'=>'password','class'=>'form-control', 'placeholder'=>'Password');
		  echo form_password($attributes); ?>
		  <br><br>
		  	<div class="control-group">
				<div class="controls">				
					  <?php
					  $attributes = array('name'=>'submit','class' => 'btn btn-primary','value'=>'Log In');
					  echo form_submit($attributes); 
					  ?>
				</div>
			</div>
		  <br/>
		 
		    
		<?php echo form_close(); ?>
	  </div>
</div>
<?php $this->load->view('layout/footer.php'); ?>