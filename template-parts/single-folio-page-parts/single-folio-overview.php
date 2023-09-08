<?php

global $mtsThemeMods;

?>


<article class="article-card overview card">
    <?php
    
        if (!$mtsThemeMods['toggle_folio_hero_header']) {
            echo '<h1>' . the_title() . '</h1>';
        }
        get_portfolio_overview();
        get_portfolio_url();
        get_portfolio_tools();
    ?>
</article>