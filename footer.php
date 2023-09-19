<?php

/**
 * MTS footer
 *
 * @package MTS
 */

?>
<footer class="footer col-12">
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
    <div class="footer-b flex flexCenter">
        <?php
        echo mts_copyright();
        echo mts_author_url('https://zeddyemy.github.io', 'Emmanuel Olowu')
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