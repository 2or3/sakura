          <h3><span class="label glyphicon glyphicon-leaf">お知らせ</span><span class="label label-default">New</span></h3>
          <p style="border-bottom-style: outset;"></p>
          <?php require_once("blog.php"); ?>
          <?php
            foreach($a_blog as $a_blog_item) {
          ?>
          <dl class="dl-horizontal"><a href="<?php echo $a_blog_item->link; ?>" style="color:#008800;text-decoration:none;">
          <dt><h4><?php echo $a_blog_item->title; ?></h4></dt>
          <dd><blockquote>
            <p><?php echo $a_blog_item->description; ?><br>
            <em><small><?php echo $a_blog_item->pubDate; ?></small></em></p>
          </blockquote></dd>
          </a></dl>
          <?php
            }
            if (count($a_blog) == 0) {
              echo "<h4>現在お知らせはありません</h4>";
            }
          ?>
