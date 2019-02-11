<?php

$downloads = 'downloads';

if ( have_rows( $downloads ) ):

  ?>

  <div
    <?php if ($anchor) { ?> id="<?php echo $anchor; ?>" <?php } ?>
    class="downloads-section" >

    <div class="header-wrapper" >
      <h3>DOWNLOADS</h3>
    </div>

    <div class="row downloads-wrapper" >

  <?php

  while ( have_rows( $downloads ) ) : the_row();


    $file_url = get_sub_field('file');
    $button_text = get_sub_field('button_text');
    $image = get_sub_field('image');

    ?>

    <div class="download" >
      <div class="image-wrapper">
        <div class="image" style="background-image: url('<?php echo $image; ?>');" ></div>
      </div>

      <a href="<?php echo $file_url; ?>" target="_blank" rel="noreferrer noopener">
        <button><?php echo $button_text; ?></button>
      </a>
    </div>

    <?php

  endwhile;

  ?>

    </div>

  </div>

  <?php

endif;

?>
