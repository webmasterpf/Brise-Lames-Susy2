<?php

/*
 * Tableau pour afficher les docs restaurant (pdf) sans limite 
 * de nombre.
 */
?>
       
  <?php if ($node->field_fichier_attache[0]['view']): ?>
       <div class="menu-resto">
            <h3>Les Formules du Restaurant</h3>
         
            <?php
                    /* 06/2015 Liste les fichiers à partir du tableau créé
                     * création d'une liste dynamique 
                     */
                    if (!empty($node->field_fichier_attache[0]['view'])): ?>
                <div class="liste-docs-actualites">
               <?php  //récupération du nom du champ
               print $node->content['field_NAME']['field']['#title'] ?>
                    <ul>
               <?php
               foreach ($node->field_fichier_attache as $key => $lien) {
                    print '<li>'.$node->field_fichier_attache[$key]['view'].'</li>';
               }
               ?>  
                  </ul>   </div>
            <?php endif;?>
        </div>
           <?php endif;?>    