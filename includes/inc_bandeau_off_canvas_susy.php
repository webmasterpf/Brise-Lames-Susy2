<?php if (!empty($bandeau1)): ?>
    <div class="transformer">
        <div class="off-canvas">
        <div class="close">
            
            <img class="close-btn" 
                 src="<?php global $theme_path; print $theme_path.'/images/close.svg'; ?>" alt="Fermer">
            
        </div>
        <div class="bandeau-pagetop">
            <?php print $bandeau1; ?>
        </div>
            </div>
        <a href="#" class="menu-toggle">Les sites des lycées</a>

    <?php endif; ?>