<?php
$video_id = $args['video'];
$video_url = wp_get_attachment_url($video_id);
?>
<div class="single-video">
  <div class="single-video__video-wrap">
    <video src=<?= $video_url ?> muted autoplay loop playsinline></video>
  </div>
</div>