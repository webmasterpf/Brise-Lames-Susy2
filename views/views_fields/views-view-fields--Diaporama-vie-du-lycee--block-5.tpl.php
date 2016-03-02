<?php
/**
 * @file views-view-fields.tpl.php
 * Default simple view template to all the fields as a row.
 *
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
<!-- TEMPLATE DE VIEWS FIELDS CUSTOM -->

<?php 

 //   print ' <div class="flexslider-thumbs"> <ul class="slides">';
//foreach ($fields as $id => $field): 
//   if (!empty($field->separator)): 
//   print $field->separator; 
//   endif; 

   //print $field->wrapper_prefix;
   
    //print $field->label_html;
    //print $field->content; 


    $imgurl = file_create_url($field->uri);  
    
    $img_thumb_filepath = strip_tags($fields['field_galerie_image_vdl_fid_1']->content);
    $img_slide_size = strip_tags($fields['field_galerie_image_vdl_fid']->content);
    $img_caption = strip_tags($fields['field_galerie_image_vdl_data']->content);
    print //'<li data-thumb='.$img_thumb_filepath.'>'
             '<img src="'.$img_slide_size.'" />'
            . '<p class="flex-caption">'.$img_caption.'</p>'
            //. '</li>';
    


 //print $field->wrapper_suffix; 
// endforeach;
 ?>
<?php //print '</ul> </div>';?>
<?php
global $theme_path;
include ($theme_path . '/includes/inc_drupal_debug_views.php');
?>