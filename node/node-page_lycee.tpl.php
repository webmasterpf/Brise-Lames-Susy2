<?php
/* Ce template permet la création d'un layout multicolonne pour les pages de base, en permettant la disposition facile
 * des champs CCK custom, si nécessaires pour une page de base.
*/?>
<!--______________NODE TPL POUR PAGE.TPL CUSTOM________________ -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
    <div class="node-inner">
        <!--______________COLONNE 1________________ -->
        <?php /* choix du layout selon la largeur des colonnes
         * .col1_layout_3_8_3{} .col1_layout_4_5_5{} .col1_layout_5_9{}
         * .col2_layout_3_8_3{} .col2_layout_4_5_5{} .col2_layout_5_9{}
         * .col3_layout_3_8_3{} .col3_layout_4_5_5{}
         */?>
        <div id="colonne-1" class="col1_layout_8_4 page-lycee">
            <?php if ($title): /*copier le titre dans la colonne desirée*/?>
            <h1 class="titre_page"><?php print $title; ?></h1>
            <?php endif; ?>
     <div class="content">
                       <?php if ($node->field_logo_resto[0]['view']): ?>
            <div class="logo-resto">
                    <?php  print $node->field_logo_resto[0]['view']  ?>
            </div>
            <?php endif;?>
                <?php   print $node->content['body']['#value'];/*déplacer le contenu dans la colonne désirée*/ ?>
             
                        <?php if ($node->field_fichier_attache[0]['view']): ?>
            <div class="fichier-joint">
                    <?php  print $node->field_fichier_attache[0]['view']  ?>
            </div>
            <?php endif;?>
                      
         <?php if ($node->field_choix_galerie_vdl[0]['view']): /* Galerie d'images */?>
            <div class="galerie">
                    <?php  print $node->field_choix_galerie_vdl[0]['view']  ?>
            </div>
            <?php endif;?>       
                      
                       <?php if ($node->field_vue_vdl[0]['view']): /* Galerie d'images */?>
            <div class="liste-filtre">
                    <?php  print $node->field_vue_vdl[0]['view']  ?>
            </div>
            <?php endif;?>        
                      
            </div>
             <?php
               global $theme_path;
              include ($theme_path.'/includes/inc_region_col_1.php');
              ?>
        </div>
        </div>
        <!--______________COLONNE 2________________ -->
         <!-- <pre> <?php //print_r($node); ?> </pre>-->   <!-- listage des variables du $content -->
        <div id="colonne-2" class="col2_layout_8_4 page-lycee">

            <?php print $picture; ?>

            <?php if ($submitted): ?>
            <span class="submitted"><?php print $submitted; ?></span>
            <?php endif; ?>

   
           <?php 
  //$theme_path = drupal_get_path('theme', 'NOM_THEME');
  global $theme_path;
include($theme_path .'/includes/inc_region_col_2.php');
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