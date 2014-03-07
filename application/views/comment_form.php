<?php $this->load->view('layout/public_header.php'); ?>
<div class="blogcontent">
		<div class="row">
			
			 <?php $b = strtotime($posts->PostDate); ?>
			 <div class="col-md-8">
			 	<div>
					<label id="lbldatepost" class="control-label"><?php echo date("l, F jS Y",$b) ?></label>
				</div>
				<div class="post-header">
					<h3><?php echo $posts->Title ?></h3>
				</div><br>
				<div class="post-content">
					<p>
						<?php echo $posts->Content ?>
					</p>
				</div>
				<div>
					<h5>Posted by <?php echo $posts->Posted_by; ?></h5><br>
				</div>
			</div>			
					
		</div>
		

			<h5><strong><u>Comments For this Post:</u></strong> </h5>
<div>
 <?php foreach ($comments as $comment) : ?>
	<dl>
	<dt><?php echo $comment->commented_by; ?></dt>
	<dd><p><?php echo $comment->comment; ?></p><?php print date("d/m/Y",strtotime($comment->comment_date)); ?></dd>
	</dl>
	<hr>
 <?php endforeach; ?>
</div>
</div>
<?php $this->load->view('layout/footer.php')?>