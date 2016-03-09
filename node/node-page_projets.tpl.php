<?php
/* Ce template permet la création d'un layout multicolonne pour les pages de base, en permettant la disposition facile
 * des champs CCK custom, si nécessaires pour une page de base.
*/?>
<!--______________NODE TPL page_intervenants.tpl CUSTOM________________ -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
    <div class="node-inner">
        <!--______________COLONNE 1________________ -->
        <?php /* choix du layout selon nombre de colonne
         * .col1_layout_200_590_200{} .col1_layout_330_all{} .col1_layout_18_56_25{}
         * .col2_layout_200_590_200{} .col2_layout_330_all{} .col2_layout_18_56_25{}
         * .col3_layout_200_590_200{} .col3_layout_330_all{} .col3_layout_18_56_25{}
         */?>
        <div id="colonne-1" class="col1_layout_4_8 contenu-vdl">
            <?php if ($title): /*copier le titre dans la colonne desirée*/?>
            <h1 class="titre_vdl"><?php print $title; ?></h1>
            <?php endif; ?>
        
            <?php if ($node->field_fiche_action_projet[0]['view'] OR 
                      $node->field_fichier_joint[0]['view']): ?>
            <div class="docs-joints-vdl">
                <h3>Utile</h3>
                
            <div class="fiche-action-vdl">
                    <?php  print $node->field_fiche_action_projet[0]['view']  ?>
            </div>
             
     
                <div class="fichier-joint-vdl">
               <?php  //récupération du nom du champ
               print $node->content['field_fichier_joint']['field']['#title'] ?>
                    <ul>
               <?php
               foreach ($node->field_fichier_joint as $key => $lien) {
                    print '<li>'.$node->field_fichier_joint[$key]['view'].'</li>';
               }
               ?>  
                  </ul>   </div>
            <?php endif;?>
          
            
                    <?php
               global $theme_path;
              include ($theme_path.'/includes/inc_region_col_1.php');
              ?>
        </div>
            </div>
        <!--______________COLONNE 2________________ -->
         <!-- <pre> <?php //print_r($node); ?> </pre>-->   <!-- listage des variables du $content -->
        <div id="colonne-2" class="col2_layout_4_8 contenu-vdl">

            <?php print $picture; ?>

            <?php if ($submitted): ?>
            <span class="submitted"><?php print $submitted; ?></span>
            <?php endif; ?>

            <div class="content">
                <?php   print $node->content['body']['#value'];/*déplacer le contenu dans la colonne désirée*/ ?>
                
                 <?php if ($node->field_choix_galerie_vdl[0]['view']): ?>
            <div class="vdl-galerie-image">
                    <?php  print $node->field_choix_galerie_vdl[0]['view']  ?>
            </div>
            <?php endif;?>
       

        <?php if ($node->field_video_externe[0]['view']): ?>
            <div class="video-embed-vdl">
                    <?php  print $node->field_video_externe[0]['view']  ?>
            </div>
            <?php endif;?>

        <?php if ($node->field_video[0]['view']): ?>
            <div class="video-embed-vdl">
                    <?php  print $node->field_video[0]['view']  ?>
            </div>
            <?php endif;?>
            
            </div>

</div> <!--/ content-->


        <?php if ($terms): ?>
        <div class="taxonomy"><?php //print $terms; ?></div>
        <?php endif;?>

        <?php if ($links): ?>
        <div class="links"> <?php //print $links; ?></div>
        <?php endif; ?>

    </div> <!-- /node-inner -->
</div> <!-- /node-->