<?php 
    $attributes = array('class'=>'form-horizontal','role'=>'form');
    echo form_open("Posts/update/$posts->id",$attributes); ?>     

    <div class="form-group">
        <label for="title" class="col-md-2 control-label">Title </label>
        <div class="input-group col-md-8">
            <input type="text" class="form-control" id="title" name="title" value="<?php echo $posts->Title; ?>">
        </div>
    </div>  
    <div class="form-group">
        <label for="contentPost" class="col-md-2 control-label">Content </label>
        <div class="input-group col-md-8">
        <textarea class="form-control" id="content" name="content" rows="12"><?php echo $posts->Content; ?></textarea>
        </div>
    </div>

    <div class="form-group">
        <label for="posted_by" class="col-md-2 control-label">Posted By </label>
        <div class="input-group col-md-8">
            <input type="text" class="form-control" id="Posted_by" name="Posted_by" value="<?php echo $posts->Posted_by; ?>">
        </div>
    </div>              
    <div class="form-group pull-right">
        <div class="input-group">
            <input type="submit" class="btn btn-primary" id="Submit" name="submit" value="Update">
        </div>
    </div>

<?php echo form_close(); ?>
         