<?php
/* Ce template permet la création d'un layout multicolonne pour le spages de base, en permettant la disposition facile
 * des champs CCK custom, si nécessaires pour une page de base.
*/?>
<!--______________NODE TPL POUR PAGE-page_pole.TPL CUSTOM________________ -->
<div class="node <?php print $classes; ?>" id="node-<?php print $node->nid; ?>">
    <div class="node-inner">
       
             <?php if ($title): /*copier le titre dans la colonne desirée*/?>
            <h1 class="page-pole"><?php print $title; ?></h1>
            <?php endif; ?>
            
             <?php print $picture; ?>

            <?php if ($submitted): ?>
            <span class="submitted"><?php print $submitted; ?></span>
            <?php endif; ?>

            <div class="content">
                <?php   print $node->content['body']['#value'];/*déplacer le contenu dans la colonne désirée*/ ?>
            </div>
            
        
        <!--______________COLONNE 1________________ -->
      
        <div class="layout_4col_all3">
 
            <?php if ($pole_col1): ?>
            <div id="orange" class="bloc-pole">
                <?php print $pole_col1; ?>
                </div>
              <?php endif; ?>
        </div>
        <!--______________COLONNE 2________________ -->
         <!-- <pre> <?php //print_r($node); ?> </pre>-->   <!-- listage des variables du $content -->
        <div  class="layout_4col_all3">
            
         <?php if ($pole_col2): ?>
                 <div id="bleu" class="bloc-pole">
                <?php print $pole_col2; ?>
                </div>
              <?php endif; ?>
        </div>

        <!--______________COLONNE 3________________ -->
        <div  class="layout_4col_all3">
            
    <?php if ($pole_col3): ?>
                <div id="vert" class="bloc-pole">
                <?php print $pole_col3; ?>
                </div>
              <?php endif; ?>
            
        </div>
             <!--______________COLONNE 4________________ -->
        <div  class="layout_4col_all3last">
            
        <?php if ($pole_col4): ?>
                  <div id="rose" class="bloc-pole">
                <?php print $pole_col4; ?>
                </div>
              <?php endif; ?>
        </div>
   

    </div> <!-- /node-inner -->
</div> <!-- /node-->