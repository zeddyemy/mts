<?php

/**
 * The main template file
 *
 * @package MTS
 */


get_header();

get_template_part('template-parts/frontpage', get_post_format());

get_footer();
