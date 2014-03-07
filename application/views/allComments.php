<table class="table table-hover">
  <thead>
          <tr>
            <th>Comment</th>
            <th>Commented By</th>
            <th>Article</th>
            <th>Date</th>
          </tr>
  </thead>
  <tbody>
          <?php foreach ($comments as $comment) : ?>
          <tr>
            <td class="col-md-5"><?php echo $comment->comment; ?></td>
            <td class="col-md-2"><?php echo $comment->commented_by; ?></td>
            <td class="col-md-3"><?php echo $comment->Title; ?></td>
            <td class="col-md-2"><?php echo $comment->comment_date; ?><a href="<?php echo site_url('Comments/delete') . '/'. $comment->cid; ?>">
              <span class="pull-right glyphicon glyphicon-trash"></span></a></td>
          </tr>
        <?php endforeach; ?>
  </tbody>
</table>