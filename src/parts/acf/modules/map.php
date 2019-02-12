<?php

$anchor = $anchor ? 'id="'.$anchor.'"' : '';

?>

<div <?php echo $anchor; ?> class="row map-section">

  <?php if ($description) { ?>
    <div class="description">
      <?php echo $description; ?>
    </div>
  <?php } ?>

  <?php if ($image_or_slideshow !== 'none') { ?>
    <div class="image-wrapper" >
      <?php if ($image_or_slideshow === 'image') { ?>
        <img src="<?php echo $image; ?>" />
      <?php } else {
        echo do_shortcode($slideshow);
      } ?>
    </div>
  <?php } ?>

  <div class="map-wrapper" >
    <?php echo do_shortcode($map_shortcode); ?>
  </div>
</div>
