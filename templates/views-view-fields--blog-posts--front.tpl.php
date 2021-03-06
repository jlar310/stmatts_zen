<?php
/**
 *  Custom template for stmatts theme to display a view-row for view page "sermons"
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->wrapper_prefix: A complete wrapper containing the inline_html to use.
 *   - $field->wrapper_suffix: The closing tag for the wrapper.
 *   - $field->separator: an optional separator that may appear before a field.
 *   - $field->label: The wrap label text to use.
 *   - $field->label_html: The full HTML of the label to use including
 *     configured element type.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */
?>
<?php //dpm($variables); ?>
<?php //dpm($view->result[$view->row_index]->nid); ?>
<?php 
  $nid = $view->result[$view->row_index]->nid;
  $node = node_load($nid);
  //dpm($node);
  if ($node->type == "tidings_link") {
    $icon = "logo-empty.png";
  } else {
    $icon = "blog-view-icon.jpg";
  }
?>
<div class="vr-left">
  <div class="vr-square">
    <?php print '<img src="' . $directory . '/images/' . $icon . '" width="22" height="22" />'; ?>
  </div>
</div>
<div class="vr-center vr-length-2">
  <div class="vr-first">
    <?php if ($fields['field_link']->content): ?>
      <?php print $fields['field_link']->content; ?>
    <?php else: ?>
      <?php print $fields['title']->content; ?>
    <?php endif; ?>
  </div>
  <div class="vr-second">
    <?php print $fields['field_date']->content; ?>
  </div>
</div>
