    <?php echo validation_errors('<p class="error">'); ?>    

<!-- Modals -->
<!-- Sign Up Modal Here -->
     <div class="modal fade fontsize-13" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="registerModalLabel">Create a Blog</h4>
                </div>
                <div class="modal-body">
                    <?php $attributes = array('class' => 'form-horizontal', 'role' => 'form', 'id' => 'loginForm'); ?>
                    <?php echo form_open('users/register',$attributes); ?>
                            <div class="form-group">
                                <label for="first_name" class="col-sm-2 control-label">First Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="first_name" name='first_name' required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="last_name" class="col-sm-2 control-label">Last Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="last_name" name="last_name" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="user_email" class="col-sm-2 control-label">Email </label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="user_email" name='user_email' required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-sm-2 control-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="cnf_password" class="col-sm-2 control-label">Confirm Password</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="cnf_password" name="cnf_password" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="blog_title" class="col-sm-2 control-label">Blog Title</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="blog_title" name="blog_title" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10 pull-right">
                                    <button id="signup" type="submit" class="btn btn-success">Sign Up</button>
                                </div>
                            </div>                           
                    <?php echo form_close(); ?>
                </div>
            </div>
            <!-- / loginModal-content -->
        </div>
        <!-- / loginModal-dialog -->
    </div>
<!-- Sign Up Modal Ends Here -->
<!-- Login Modal Here -->
     <div class="modal fade fontsize-13" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="loginModalLabel">Login here</h4>
                </div>
                <div class="modal-body">
                    <?php $attributes = array('class' => 'form-horizontal', 'role' => 'form', 'id' => 'loginForm'); ?>
                    <?php echo form_open('users/login',$attributes); ?>
                            <div class="form-group">
                                <label for="loginEmail" class="col-sm-2 control-label">UserName</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="loginEmail" name='username' required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="loginPassword" class="col-sm-2 control-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="loginPassword" name="password" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10 pull-right">
                                    <button type="submit" class="btn btn-primary">Log in</button>
                                </div>
                            </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
            <!-- / loginModal-content -->
        </div>
        <!-- / loginModal-dialog -->
    </div>
<!-- Login Modal Ends Here -->
<!-- Create Post Modal starts here -->
     <div class="modal fade" id="newPostModal" tabindex="-1" role="dialog" aria-labelledby="newPostModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">   
                <div class="modal-header"><h4>Create Post</h4></div>              
                <div class="modal-body">

                <?php 
                $attributes = array('class'=>'form-horizontal','role'=>'form');
                echo form_open('Posts/create',$attributes); ?>                       

                        <div class="form-group">
                            <label for="postTitle" id="lbltitle" class="col-md-2 control-label">Title </label>
                            <div class="input-group col-md-10">
                                <input type="text" class="form-control" id="postTitle" name="Title" placeholder="">
                            </div>
                        </div>                       

                        <div class="form-group">
                            <label for="contentPost" id="lblcontent" class="col-md-2 control-label">Content </label>
                            <div class="input-group col-md-10">
                                <textarea class="form-control" id="contentPost" name="Content" rows="5" ></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="posted_by" class="col-md-2 control-label">Posted By </label>
                            <div class="input-group col-md-10">
                                <input type="text" class="form-control" id="posted_by" name="posted_by" placeholder="">
                            </div>
                        </div>   

                    <!-- {{ Form::close() }} -->
                </div>
                <div class="modal-footer">
                        <div class="form-group pull-right">
                            <div class="input-group">
                                <input type="submit" class="btn btn-primary" id="Submit" name="submit" value="Publish">
                            </div>
                        </div>
                        <?php echo form_close(); ?>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<!-- Create Post Modal ends here -->   


<!-- Comment Modal starts here-->
    <div class="modal fade" id="newCommentModal" tabindex="-1" role="dialog" aria-labelledby="newCommentModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">   
                <div class="modal-header"><h4>Add Comment</h4></div>             
                <div class="modal-body">

                <?php 
                $attributes = array('class'=>'form-horizontal');
                echo form_open('Comments/create',$attributes); ?>                       

                        <div class="form-group">
                            <input type="hidden" name="post_id" id="post_id" value="">
                            <label for="commented_by" id="lblname" class="col-md-2 control-label">Name </label> 
                            <div class="input-group col-md-8">
                               <input type="text" class="form-control" id="commented_by" name="commented_by" placeholder="">                               
                            </div>
                        </div>                       

                        <br><br>
                        <div class="form-group">
                            <textarea class="form-control" id="comment" name="comment" rows="3" placeholder="Comment"></textarea>
                        </div>
                            
                    <!-- {{ Form::close() }} -->
                </div>
                <div class="modal-footer">
                        <div class="form-group pull-right">
                            <div class="input-group">
                                <input type="submit" class="btn btn-primary" id="Submit" name="submit" value="Post">
                            </div>
                        </div>
                        <?php echo form_close(); ?>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
<!-- Comment Modal ends here-->
		<script src="<?php echo base_url().'assets/js/vendor/'; ?>jquery-1.10.1.min.js"></script>
		<script src="<?php echo base_url().'assets/js/vendor/'; ?>bootstrap.min.js"></script>
		<script src="<?php echo base_url().'assets/js/'; ?>main.js"></script>
</body>
</html>