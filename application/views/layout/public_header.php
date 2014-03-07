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
                <!--/ Collapsible parts of Navigation Bar -->
                <div class="navbar-collapse collapse col-lg-12 col-md-12 col-sm-12 col-xs-12 pull-right">
                            <!-- User Module -->
                            <div class="navbar-form navbar-user navbar-right">
                                <?php 
                                if(!isset($this->session->userdata['user_id'])) 
                                { 
                                    $attributes = array('data-toggle' => 'modal', 'data-target' => '#loginModal', 'class' => 'dropdown-toggle btn btn-success btn-sm');
                                    echo anchor('#','Log In',$attributes). '&nbsp; &nbsp;';
                                    $attributes = array('data-toggle' => 'modal', 'data-target' => '#registerModal', 'class' => 'dropdown-toggle btn btn-warning btn-sm');
                                    echo anchor('#','Register',$attributes);
                                }
                                else
                                {
                                    $attributes = array('class' => 'dropdown-toggle btn btn-success btn-sm');
                                    echo anchor('users/logout','Log Out',$attributes);
                                }
                                ?>
                                
                                <!-- <a href="#" class="dropdown-toggle btn btn-warning btn-sm" data-toggle="modal" data-target="#signupModal">Create </a> -->
                            </div>
                            <!--/User Module -->
                </div>
            </div>
        </div>
</div>
<div id="publicContent" class="container">
	<div class="well">
	<div class="row">
		<h1>myBlogger</h1>
	</div>