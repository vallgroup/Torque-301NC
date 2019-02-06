<div
  <?php if ($anchor) { ?> id="<?php echo $anchor; ?>" <?php } ?>
  class="row text-and-image-section <?php echo $align; ?>">

  <div class="content-wrapper" >
    <?php if ($content) { ?>
      <div class="content"><?php echo $content; ?></div>
    <?php } ?>

    <?php if ($cta) { ?>
      <div class="cta-wrapper" >
        <a href="<?php echo $cta['url']; ?>" target="<?php echo $cta['target']; ?>">
          <button><?php echo $cta['title']; ?></button>
        </a>
      </div>
    <?php } ?>
  </div>

  <div class="image-wrapper" >
    <img src="<?php echo $image; ?>" />
  </div>


</div>
