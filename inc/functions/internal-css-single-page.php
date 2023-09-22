<?php

function singlePage_internal_css() {
    if (is_single() || is_page()) {
        global $mtsThemeMods;

        $toggle_excerpt_italics  = $mtsThemeMods['toggle_excerpt_italics']; // check if excerpt on single page is set to italics
        $excerptFontStyle = ($toggle_excerpt_italics == true) ? 'italic' : 'normal';

        $toggle_share_btns = $mtsThemeMods['toggle_share_btns']; // Value to check if share button is enabled
        $facebook = $mtsThemeMods['toggle_facebook_btn']; // Value to check if facebook button is enabled
        $x = $mtsThemeMods['toggle_x_btn']; // Value to check if twitter button is enabled
        $whatsapp = $mtsThemeMods['toggle_whatsapp_btn']; // Value to check if whatsapp button is enabled
        $telegram = $mtsThemeMods['toggle_telegram_btn']; // Value to check if telegram button is enabled
        $pinterest = $mtsThemeMods['toggle_pinterest_btn'];// Value to check if pinterest button is enabled
        $linkedin = $mtsThemeMods['toggle_linkedin_btn']; // Value to check if linkedin button is enabled ?>

        <style>
            :root {
                --excerpt-font-style: <?php echo $excerptFontStyle; ?>;
            }

            <?php if ($toggle_share_btns == true) { ?>
                .social-share {
                    gap: 10px;
                    display: flex;
                    flex-wrap: wrap;
                    margin: 5px auto;
                }

                .social-share a {
                    color: #fff;
                    line-height: 0;
                    border-radius: 5px;
                    padding: 10px 15px;
                    box-shadow: var(--shadow-large);
                }

                @media screen and (min-width:580px) {
                    .social-share a {
                        padding: 10px 20px;
                    }
                }

                <?php if ($facebook == true) { ?> .facebook { background-color: #4267b2;}

                <?php } ?><?php if ($x == true) { ?>.twitter { background-color: #1da1f2;}

                <?php } ?><?php if ($whatsapp == true) { ?>.whatsapp { background-color: #25d366;}

                <?php } ?><?php if ($pinterest == true) { ?>.pinterest { background-color: #e60023; }

                <?php } ?><?php if ($telegram == true) { ?>.telegram { background-color: #0088cc; }

                <?php } ?><?php if ($linkedin == true) { ?>.linkedin { background-color: #0072b1; }

                <?php } ?>
            <?php } ?>
        </style>
    
    <?php }
}
add_action('wp_head', 'singlePage_internal_css');