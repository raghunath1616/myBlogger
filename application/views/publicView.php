<?php $this->load->view('layout/public_header.php'); ?>
    <div class="container blogcontent">
		<div class="row">
			<?php foreach ($posts as $post) : ?>
			 <?php $b = strtotime($post->PostDate); ?>
			 <div class="col-md-8">
			 	<div>
					<label id="lbldatepost" class="control-label"><?php print date("l, F jS Y",$b) ?></label>
				</div>
				<div class="post-header">
					<h3><?php echo $post->Title ?></h3>
				</div><br>
				<div class="post-content">
					<p>
						<?php echo $post->Content ?>
					</p>
				</div>
				<div>
					<h5>Posted by <?php echo $post->Posted_by; ?></h5><br>
					<p class="lead">Please add a <a href="#" class="commentmodal" data-id="<?php echo $post->id; ?>" data-toggle="modal" data-target="#newCommentModal">Comment</a></p>
					
				</div>
                <div class="pull-right">
                    <a href="<?php echo base_url();?>publicController/comment_per_post/<?php echo $post->id; ?>" target="_blank"><?php echo (int) publicController::count($post->id); ?> Comments</a>
                </div><br>
				<hr>
			 </div>
			<br>
			
			<?php endforeach; ?>
		</div>		
	</div>
	 
</div>
</div>

<?php $this->load->view('layout/footer.php'); ?>