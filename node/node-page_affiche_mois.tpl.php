<?php
/* Ce template permet la création d'un layout multicolonne pour les pages de base, en permettant la disposition facile
 * des champs CCK custom, si nécessaires pour une page de base.
*/?>
<!--______________NODE TPL POUR PAGE.TPL CUSTOM________________ -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
    <div class="node-inner">
        <!--______________ TITRE ________________ -->
 
        <div id="colonne-1" class="col1_layout_max page-actualites">
            <?php if ($title): /*copier le titre dans la colonne desirée*/?>
            <h1 class="titre_actualites"><?php print $title; ?></h1>
            <?php endif; ?>
            
             <?php print $picture; ?>

            <?php if ($submitted): ?>
            <span class="submitted"><?php print $submitted; ?></span>
            <?php endif; ?>

            <div class="content">
                <?php   print $node->content['body']['#value'];/*déplacer le contenu dans la colonne désirée*/ ?>
            </div>
        
        </div>
        <!--______________COLONNE 1________________ -->
        <div class="layout_5col_is">
 
          <?php
              $theme_path = drupal_get_path('theme', 'cyranod6_bl_susy2');
              include ($theme_path.'/includes/inc_actu_last_sortie.php');
              ?>
             <?php
              $theme_path = drupal_get_path('theme', 'cyranod6_bl_susy2');
              include ($theme_path.'/includes/inc_actu_other_sortie.php');
              ?>
        </div>
        <!--______________COLONNE 2________________ -->
          <div class="layout_5col_is">
 
           <?php
              $theme_path = drupal_get_path('theme', 'cyranod6_bl_susy2');
              include ($theme_path.'/includes/inc_actu_last_projet.php');
              ?>
           <?php
              $theme_path = drupal_get_path('theme', 'cyranod6_bl_susy2');
              include ($theme_path.'/includes/inc_actu_other_projets.php');
              ?>
        </div>
     <!--______________COLONNE 3________________ -->
          <div class="layout_5col_is">
 
         <?php
              $theme_path = drupal_get_path('theme', 'cyranod6_bl_susy2');
              include ($theme_path.'/includes/inc_actu_last_innovation.php');
              ?>
       <?php
              $theme_path = drupal_get_path('theme', 'cyranod6_bl_susy2');
              include ($theme_path.'/includes/inc_actu_other_innovations.php');
              ?>
        </div>
          <!--______________COLONNE 4________________ -->
          <div class="layout_5col_is">
     <?php
              $theme_path = drupal_get_path('theme', 'cyranod6_bl_susy2');
              include ($theme_path.'/includes/inc_actu_last_rp.php');
              ?>
           
           <?php
              $theme_path = drupal_get_path('theme', 'cyranod6_bl_susy2');
              include ($theme_path.'/includes/inc_actu_other_RP.php');
              ?>
        </div>
               <!--______________COLONNE 5________________ -->
          <div class="layout_5col_is">
 
           <?php
              $theme_path = drupal_get_path('theme', 'cyranod6_bl_susy2');
              include ($theme_path.'/includes/inc_actu_last_annonce.php');
              ?>
           <?php
              $theme_path = drupal_get_path('theme', 'cyranod6_bl_susy2');
              include ($theme_path.'/includes/inc_actu_other_annonce.php');
              ?>
        </div>
 <!--______________COLONNE 5________________ -->
 <div class="col1_layout_max page-actualites">
    <?php
              $theme_path = drupal_get_path('theme', 'cyranod6_bl_susy2');
              include ($theme_path.'/includes/inc_region_footer_actu.php');
              ?>
     </div>
        <?php if ($terms): ?>
        <div class="taxonomy"><?php //print $terms; ?></div>
        <?php endif;?>

        <?php if ($links): ?>
        <div class="links"> <?php //print $links; ?></div>
        <?php endif; ?>

    </div> <!-- /node-inner -->
</div> <!-- /node-->