<?php
/**
 * Nubeso Video Player
 * @package nubesoplayer
 */

elgg_load_js('nubesoplayer.video-js');
elgg_load_css('nubesoplayer-video-js');

$video_url = elgg_get_site_url() . "mod/file/download.php?file_guid={$vars['file_guid']}";

?>
<center>
    <p>
  <video id="<?php echo $vars['file_guid']; ?>" class="video-js vjs-default-skin" controls preload="none" width="528" height="185"
      data-setup="{}" >
    <source src="<?php echo $video_url;?>" type="video/<?php echo $vars['type']; ?>" />
  </video>
        </p>

    </center>
