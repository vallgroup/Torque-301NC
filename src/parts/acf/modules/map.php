<?php

$anchor = $anchor ? 'id="'.$anchor.'"' : '';

?>

<div <?php echo $anchor; ?> class="row map-section">

  <?php if ($description) { ?>
    <div class="description">
      <?php echo $description; ?>
    </div>
  <?php } ?>

  <div class="map-wrapper" >
    <?php echo do_shortcode($map_shortcode); ?>
  </div>
</div>
