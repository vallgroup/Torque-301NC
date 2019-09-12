<?php

$modules = 'sections';

if ( have_rows( $modules ) ):

  while ( have_rows( $modules ) ) : the_row();

    switch ( get_row_layout() ) {

      case 'text_and_image' :

        $anchor = get_sub_field('anchor');
        $align = get_sub_field( 'align' );
        $content = get_sub_field( 'content' );

        $image_or_slideshow = get_sub_field('image_or_slideshow');
        $image = get_sub_field( 'image' );
        $video_url = get_sub_field( 'video_url' );
        $video_autoplay = get_sub_field( 'video_autoplay' );
        $slideshow = get_sub_field('slideshow');

        $cta_type = get_sub_field( 'call_to_action_type' );
        $cta = false;

        if ($cta_type === 'link') {
          $cta = get_sub_field('link');
        }

        if ($cta_type === 'download') {
          $cta = array(
            'title'  => get_sub_field('button_text'),
            'url'  => get_sub_field('download'),
            'target'=> '_blank'
          );
        }

        include locate_template('/parts/acf/modules/text_and_image.php');

        break;

      case 'gallery' :

        $anchor = get_sub_field('anchor');
        $image = get_sub_field('image');

        include locate_template('/parts/acf/modules/gallery.php');

        break;

      case 'map':

        $anchor = get_sub_field('anchor');
        $description = get_sub_field('description');
        $map_shortcode = get_sub_field('map_shortcode');

        $image_or_slideshow = get_sub_field('image_or_slideshow');
        $image = get_sub_field( 'image' );
        $slideshow = get_sub_field('slideshow_shortcode');

        include locate_template('/parts/acf/modules/map.php');

        break;

      case 'downloads_section':

        $anchor = get_sub_field('anchor');

        include locate_template('/parts/acf/modules/downloads.php');

        break;
    }

  endwhile;
endif;

?>
