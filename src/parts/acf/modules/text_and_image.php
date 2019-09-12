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
    <?php if ($image_or_slideshow === 'image') { ?>
      <img src="<?php echo $image; ?>" />
    <?php } elseif ($image_or_slideshow === 'video') {
       
       // Check vide url source
       $youTubeLink = strpos($video_url, 'youtube') !== false;
       $youTubeLinkShort = strpos($video_url, 'youtu.be') !== false;
       $vimeoLink = strpos($video_url, 'vimeo') !== false;

       if ( $youTubeLink || $youTubeLinkShort ) {
         if ( $youTubeLink ) {
           $video_url = str_replace("watch?v=", "embed/", $video_url);
         } else if ( $youTubeLinkShort ) {
           $video_url = str_replace("youtu.be/", "youtube.com/embed/", $video_url);
         }
         $featured_video_embed = '<div class="iframe-video-wrapper"><iframe class="iframe-video-element" src="' . $video_url . '?autoplay=' . $video_autoplay . '&controls=0&showinfo=0&rel=0&modestbranding=1" width="640" height="360" frameborder="0"  allow="autoplay; encrypted-media;" allowfullscreen></iframe></div>';
       } elseif ( $vimeoLink ) {
         $video_url = str_replace("https://vimeo.com/", "https://player.vimeo.com/video/", $video_url);
         $featured_video_embed = '<div class="iframe-video-wrapper"><iframe class="iframe-video-element" src="' . $video_url . '?autoplay=' . $video_autoplay . '&controls=1&byline=0" width="640" height="360" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe></div>';
       } else {
         $featured_video_embed = $video_url;
       }
       echo $featured_video_embed;
    } else {
      echo do_shortcode($slideshow);
    } ?>
  </div>


</div>
