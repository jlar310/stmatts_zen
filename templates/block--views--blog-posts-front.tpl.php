<div id="block-<?php print $block->module .'-'. $block->delta ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <div class="block-inner">
      <?php print render($title_prefix); ?>
    <?php if ($block->subject): ?>

      <h2 class="block-title"<?php print $title_attributes; ?>>
        <a href="<?php print base_path() . views_get_view('blog-posts')->display['page']->display_options['path']; ?>"> 
          <?php print $block->subject ?>
        </a>
      </h2>
    <?php endif;?>
      <?php print render($title_suffix); ?>
		
		<div class="content" <?php print $content_attributes; ?>>
		  <?php print $content; ?>
		</div>

  </div>
</div> <!-- /block-inner /block -->
