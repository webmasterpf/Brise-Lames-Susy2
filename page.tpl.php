<?php
global $theme_path;
include ($theme_path.'/includes/inc_header.php');
?>
  <!-- ______________________ CONTENU _______________________ -->
  
     
   
      
       <!-- ______________________ COLONNE GAUCHE _______________________ -->
		
			  <?php if ($left): ?>
         <div id="left-content">
            <?php print $left; ?>
          </div>
             <?php endif; ?> <!-- /sidebar-left -->
		
		<!--fin du contenu gauche -->
        
        <div class="content-inner" class="inner column center">
		  <!-- ______________________ CONTENT TOP _______________________ -->
      <?php if ($breadcrumb ||$content_top): ?>
            <div id="content-top">
	<span class="ariane"> <?php print $breadcrumb; ?></span>

              <?php print $content_top; ?>
            </div> <!-- /#content-top -->
            <?php endif; ?>

  <!-- ______________________ CONTENT TOP NODE_______________________ -->
               <?php if ($content_top_node): ?>
            <div id="content-top-node">
	              <?php print $content_top_node; ?>
            </div> <!-- /#content-top-node -->
            <?php endif; ?>
            
          <?php if ($mission || $messages || $help || $tabs): ?>
            <div id="content-header">              

              <?php if ($mission): ?>
                <div id="mission"><?php print $mission; ?></div>
              <?php endif; ?>

              <?php print $messages; ?>

              <?php print $help; ?> 

              <?php if ($tabs): ?>
                <div class="tabs"><?php print $tabs; ?></div>
              <?php endif; ?>

            </div> <!-- /#content-header -->
          <?php endif; ?>
		  <!-- ______________________ CONTENU CENTRAL _______________________ -->
              <article class="middle-content">

            <?php print $content; ?>
              <?php print $feed_icons; ?>
                  </article> <!-- /#content-area -->
        

       
          
      </div> <!-- /content-inner /content -->

        <?php if (!empty($primary_links) or !empty($secondary_links)): ?>
          <div id="navigation" class="menu <?php if (!empty($primary_links)) { print "with-main-menu"; } if (!empty($secondary_links)) { print " with-sub-menu"; } ?>">
            <?php if (!empty($primary_links)){ print theme('links', $primary_links, array('id' => 'primary', 'class' => 'links main-menu')); } ?>
            <?php if (!empty($secondary_links)){ print theme('links', $secondary_links, array('id' => 'secondary', 'class' => 'links sub-menu')); } ?>
          </div> <!-- /navigation -->
        <?php endif; ?>

       
		  <!-- ______________________ COLONNE DROITE _______________________ -->
        <?php if ($right): ?>
         <!--debut du contenu droit -->
		<div id="right-content">
			<?php if ($search_box) : ?>
				<div id="recherche">
				<?php print $search_box ?>
				</div><!-- //div recherche -->
				<?php endif; ?>
            <?php print $right; ?>
        </div>
        <?php endif; ?> <!-- /sidebar-right -->

	 <!-- ______________________ CONTENU BAS _______________________ -->
<?php if ($content_bottom): ?>
            <div class="content-bottom">
              <?php print $content_bottom; ?>
            </div><!-- /#content-bottom -->
          <?php endif; ?>
	
<?php
global $theme_path;
include ($theme_path.'/includes/inc_footer.php');
?>