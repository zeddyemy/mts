<?php

/**
 * pureFolio footer
 *
 * @package pureFolio
 */

if (is_active_sidebar('footer-widget-one') || is_active_sidebar('footer-widget-two') || is_active_sidebar('footer-widget-three') || is_active_sidebar('footer-widget-four')) {
    $footerColumns = true;
} else {
    $footerColumns = false;
}

?>
<footer class="footer col-12">
    <?php if ($footerColumns) : ?>
        <div class="footerColumns grid">
            <?php if (is_active_sidebar('footer-widget-one')) : ?>
                <div class="column">
                    <?php dynamic_sidebar('footer-widget-one'); ?>
                </div>
            <?php endif; ?>
    
            <?php if (is_active_sidebar('footer-widget-two')) : ?>
                <div class="column">
                    <?php dynamic_sidebar('footer-widget-two'); ?>
                </div>
            <?php endif; ?>
    
            <?php if (is_active_sidebar('footer-widget-three')) : ?>
                <div class="column">
                    <?php dynamic_sidebar('footer-widget-three'); ?>
                </div>
            <?php endif; ?>
    
            <?php if (is_active_sidebar('footer-widget-four')) : ?>
                <div class="column">
                    <?php dynamic_sidebar('footer-widget-four'); ?>
                </div>
            <?php endif; ?>
        </div>
    <?php endif; ?>

    <div class="footer-b flex flexCenter">
        <?php
        echo pureFolio_copyright();
        echo pureFolio_author_url('https://zeddyemy.github.io', 'Emmanuel Olowu')
        ?>

    </div>
</footer>



<?php wp_footer(); ?>
<script>
    AOS.init({
        duration: 900,
        once: false,
    });
</script>

</body>

</html>