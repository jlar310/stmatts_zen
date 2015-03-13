<?php
/**
 *  Custom template for stmatts theme to display a view-row for view page "staff-directory"
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
<?php //dsm($row); ?>
  <div class="vr-wrap" onclick="location.href='/<?php print_r(drupal_get_path_alias('node/' . $row->nid)); ?>';">
  <div class="vr-left">
    <div class="vr-square">
      <?php print $fields['field_staff_photo']->wrapper_prefix; ?>
        <?php print $fields['field_staff_photo']->content; ?>
      <?php print $fields['field_staff_photo']->wrapper_suffix; ?>
    </div>
  </div>
  <?php if (array_key_exists('field_staff_position', $fields)): ?> 
    <div class="vr-center vr-length-2">
  <?php else: ?>
    <div class="vr-center vr-length-1">
  <?php endif; ?>
  <div class="vr-first">
    <?php print $fields['title']->wrapper_prefix; ?>
      <?php print $fields['title']->content; ?>
    <?php print $fields['title']->wrapper_suffix; ?>
  </div>
  <?php if (array_key_exists('field_staff_position', $fields)): ?> 
  <div class="vr-second">
    <?php print $fields['field_staff_position']->wrapper_prefix; ?>
      <?php print $fields['field_staff_position']->content; ?>
    <?php print $fields['field_staff_position']->wrapper_suffix; ?>
  </div>
  <?php endif; ?>
</div>
</div>