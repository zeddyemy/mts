<?php

global $mtsThemeMods;

?>
<section id="goal" class="goal noPad">
    <div class="container col-12">
        <div class="card secCard flex flexCenter row col-12 fitImg" data-aos="fade-up" data-aos-easing="ease-in-out-quart" style="background-image: url('<?php echo $mtsThemeMods['goal_sec_img']; ?>')">
            <div class="col-8 noPad" data-aos="fade-up" data-aos-easing="ease-in-out-quart">
                <div class="cardBody">
                    <span class="title"> <?php echo $mtsThemeMods['goal_sec_title']; ?> </span>
                    <p> <?php echo $mtsThemeMods['goal_sec_content']; ?> </p>
                </div>
            </div>

            <?php if ($mtsThemeMods['toggle_goal_tags'] == true) : ?>
                <div class="col-4 noPad" data-aos="fade-up" data-aos-easing="ease-in-out-quart">
                    <div class="cardBody">
                        <div class="flex goalTags">
                            <?php
                            if (!empty($mtsThemeMods['goal_tags'])) :
                                $tags_array = explode(',', $mtsThemeMods['goal_tags']);
                                foreach ($tags_array as $tag) {
                                    echo '<div class=""> <span>' . esc_html(trim($tag)) . ' </span> </div>';
                                }
                            endif;
                            ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>