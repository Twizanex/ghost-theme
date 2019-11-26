<?php
 
    function mainVideo(){
    $owner_guids = null;
    $content = elgg_get_entities(array(
    'type' => 'object',
    'subtype' => 'file',

    'limit'=> 1,
    'owner_guids' => $owner_guids,
    ));
    
    return $content;
    }

    function allVideos() {
        $owner_guids = null;
    $content2 = elgg_get_entities(array(
    'type' => 'object',
    'subtype' => 'file',

    'limit'=> 6,
    'owner_guids' => $owner_guids,
    ));
    
    return $content2;
    }
    
    
    function get_latest_photos(/*$num_images, array $owner_guids = null, $context = 'front'*/) {
	//$prev_context = elgg_get_context();
	//elgg_set_context($context);
        $owner_guids = null;
	$image_html = elgg_get_entities([
		'type' => 'object',
		'subtype' => TidypicsImage::SUBTYPE,
		'owner_guids' => $owner_guids,
		'limit' => 18,
		 
	]);
	//elgg_set_context($prev_context);
	return $image_html;
}


function get_latest_albums(/*$num_albums, array $container_guids = null, $context = 'front'*/) {
	//$prev_context = elgg_get_context();
	//elgg_set_context($context);
	$image_html = elgg_get_entities([
		'type' => 'object',
		'subtype' => TidypicsAlbum::SUBTYPE,
		//'container_guids' => null,
		'limit' => 8,
		//'full_view' => false,
		//'pagination' => false,
                //'class' => 'w-full py-4 px-2  h-auto inline-flex items-center',
	]);
	//elgg_set_context($prev_context);
	return $image_html;
}

 