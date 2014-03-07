<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to myBlogger</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/'; ?>bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/'; ?>main.css">
	<script type="text/javascript" src="<?php echo base_url().'assets/js/vendor/'; ?>modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body>
 <div class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>            
               
                  <a href="#" class="navbar-brand">myBlogger</a> 
               
                        <!-- Collapsible parts of Navigation Bar -->
                        <div class="navbar-collapse collapse col-lg-12 col-md-12 col-sm-12 col-xs-12 pull-right">
                            <!-- User Module -->
                            <div class="navbar-form navbar-user navbar-right">
                                <a href="<?php echo base_url().'publicController/' ?>" class="dropdown-toggle btn btn-success btn-sm" target="_blank">View Blog  </a> 
                                <?php $attributes = array('class' => 'dropdown-toggle btn btn-success btn-sm');
                                    echo anchor('users/logout','Log Out',$attributes); ?>
                                <!-- <a href="#" class="dropdown-toggle btn btn-warning btn-sm" data-toggle="modal" data-target="#signupModal">Create </a> -->
                            </div>
                            <!--/User Module -->
                        </div>
            
                <!--/ Collapsible parts of Navigation Bar -->
            </div>
        </div>
    </div>
    <div class="row"> 
    	<div class="col-md-2 side-bar">
	      <ul class="nav nav-pills nav-stacked side-bar-items" style="max-width: 300px;">
	        <li class="activeq" id="post"><a href="<?php echo base_url(); ?>">Post</a></li>
	        <li id="comment"><a href="<?php echo base_url().'Comments/'; ?>">Comments</a></li>
	        <div class="container">
	        	<li><a href="#" id="btnpost" class="btn btn-warning btn-md new-post-btn" data-toggle="modal" data-target="#newPostModal">New Post</a></li>
	        </div>
	        
	      </ul>
    	</div>
