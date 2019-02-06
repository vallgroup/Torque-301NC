<?php

$anchor = $anchor ? 'id="'.$anchor.'"' : '';

?>


<?php if ($image) { ?>

  <div <?php echo $anchor; ?> class="row images-wrapper">
    <img src="<?php echo $image; ?>"/>
  </div>

<?php } ?>
