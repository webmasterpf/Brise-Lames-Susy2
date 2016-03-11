<?php
/* 
 * Permet d'avoir un template spécial pour le webform
 * NODE-WEBFORM.TPL GENERIK si besoin possible faire theme pour webform selon node-webform-NID.tpl.php
 */

?>
<!-- NODE-WEBFORM.TPL GENERIK -->
<div class="node<?php if ($sticky) { print " sticky"; } ?><?php if (!$status) { print " node-unpublished"; } ?>">
   
      <!--______________COLONNE 1________________ -->
      
<div id="colonne-1" class="col1_layout_3_6_3 contact">
     <?php if ($title): /*insertion du titre de la page et style differencié*/?>
     <h1 class="titre_pl"><?php print $title; ?></h1>

    <?php endif; ?>
    
       <?php
              global $theme_path;
              include ($theme_path.'/includes/inc_region_col_1.php');
              ?>
</div>
<!--______________COLONNE 2________________ -->
         
        <div id="colonne-2" class="col2_layout_3_6_3 contact">

     <?php if ($submitted) { ?>
    <span class="submitted"><?php print $submitted?></span>
  <?php }; ?>

 

  <div class="content">
    <table>
    <tr>
    <td><?php print $node->content['body']['#value']; ?></td>
    </tr>
    <tr>
    <td><?php print $node->content['webform']['#value']; ?></td>
    </tr>
    </table>
  </div>

    <?php if ($links): ?>
    <div class="links">&raquo; <?php print $links; ?></div>
  <?php endif; ?>

     <?php if ($terms) { ?>
    <span class="taxonomy"><?php print $terms?></span>
  <?php }; ?>

</div>
<!--______________COLONNE 3________________ -->
        <div id="colonne-3" class="col3_layout_3_6_3 contact">
     <?php print $picture; ?>
    <?php
              global $theme_path;
              include ($theme_path.'/includes/inc_region_col_3.php');
              ?>

    <?php if ($terms): ?>
      <div class="taxonomy"><?php //print $terms; ?></div>
    <?php endif;?>

   

</div>


   
  <?php if ($picture) { print $picture; }?>

  <?php if ($page == 0) { ?>
    <?php if ($title) { ?>
      <h2 class="title"><a href="<?php print $node_url?>"><?php print $title?></a></h2>
    <?php }; ?>
  <?php }; ?>

<div class="clear-block clear"></div>

</div><!-- /node -->