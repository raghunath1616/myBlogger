<table class="table table-hover">
  <thead>
          <tr>
            <th>Title</th>
            <th>Created By</th>
            <th>Date</th>
          </tr>
  </thead>
  <tbody>
          <?php foreach ($posts as $post) : ?>
          <tr>
            <td><?php echo anchor("Posts/edit/$post->id",$post->Title); ?></td>
            <td><?php echo $post->Posted_by; ?></td>
            <td><?php echo date("D, F jS Y",strtotime($post->PostDate)); ?><a href="<?php echo site_url('Posts/delete'). '/'. $post->id; ?>">
              <span class="pull-right glyphicon glyphicon-trash"></span></a></td>
          </tr>
        <?php endforeach; ?>
  </tbody>
</table>
