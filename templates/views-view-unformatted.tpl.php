<?php
/**
 * @file views-view-unformatted.tpl.php
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<?php foreach ($rows as $id => $row): ?>
  <div class="<?php print $classes_array[$id]; ?>">
    <div class="vr1" onclick="location.href='/<?php print_r(drupal_get_path_alias('node/' . $view->result[$id]->nid)); ?>';">
      <div class="vr2">
        <?php print $row; ?>
      </div>
    </div>
  </div>
<?php endforeach; ?>
