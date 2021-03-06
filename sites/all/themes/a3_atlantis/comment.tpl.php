<div class="clear-block comment<?php print ($comment->new) ? ' comment-new' : ''; print ($comment->status == COMMENT_NOT_PUBLISHED) ? ' comment-unpublished' : ''; print ($comment->uid == $node->uid) ? ' author' : ''; ?>">

<?php if ($comment->new) : ?>
  <a id="new"></a>
  <span class="new"><?php print $new ?></span>
<?php endif; ?>

  <?php print $picture ?>
  <h3><?php print $title ?></h3>

  <div class="submitted">
    <?php print $submitted ?>
  </div>

  <div class="content">
    <?php print $content ?>
    <?php if ($signature): ?>
      <div class="user-signature clear-block">
        <?php print $signature ?>
      </div>
    <?php endif; ?>
  </div>

  <?php print $links ?>
</div>