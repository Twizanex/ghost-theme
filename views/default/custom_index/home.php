<?php
/**
 * Elgg custom index layout
 * 
 * This is just a helper view to make it easier to use Elgg's
 * page-rendering helper functions like elgg_view_page.
 */
if(elgg_is_logged_in()) {
             
              forward('activity');
         }
$mod_params = array('class' => 'elgg-module-highlight');
echo  elgg_view('page/homepage/homepage_entities');
$site_url = elgg_get_site_url();

?>
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ghostwind Theme for elgg</title>
		<meta name="author" content="name">
    <meta name="description" content="description here">
		<meta name="keywords" content="keywords,here">
		<link href="<?php echo $site_url?>mod/ghost_theme/vendors/tailwind/tailwind.min.css" rel="stylesheet"> <!--Replace with your tailwind.css once created-->
		<link href="<?php echo $site_url?>mod/ghost_theme/vendors/animate/animate.min.css" rel="stylesheet">
                <style>
                    .home-tags
                    {
                        color: #5097CF; 
                        
                    }
                    
                     
                </style>
</head>


<body class="bg-gray-200 font-sans leading-normal tracking-normal">

	<!--Header-->
	<div class="w-full m-0 p-0 bg-cover bg-bottom" style="background-image:url('mod/ghost_theme/vendors/images/cover.jpg'); height: 50vh; max-height:460px;">
			<div class="container max-w-4xl mx-auto pt-16 md:pt-32 text-center break-normal">
				<!--Title-->
					 <p class="text-white font-extrabold text-3xl md:text-5xl">
						👻 Ghostwind for Elgg
					</p>
					<p class="text-xl md:text-2xl text-gray-500">Multimedia Publishing Platform</p>
			</div>
		</div>
		
		<!--Container-->
		<div class="container px-4 md:px-0 max-w-6xl mx-auto -mt-32">
			
			<div class="mx-0 sm:mx-6">
				
				<!--Nav-->
				<nav class="mt-0 w-full">
					<div class="container mx-auto flex items-center">
						
						<div class="flex w-1/2 pl-4 text-sm">
							<ul class="list-reset flex justify-between flex-1 md:flex-none items-center">
								<li class="mr-2">
								<a class="inline-block py-2 px-2 text-white no-underline hover:underline" 
                                                                   href="<?php echo $site_url?>login">
                                                                    Sign in
                                                                </a>
								</li>
								  
							</ul> 
						</div>


						<div class="flex w-1/2 justify-end content-center">		
							 
						</div>

					</div>
				</nav>

				<div class="bg-gray-200 w-full text-xl md:text-2xl text-gray-800 leading-normal rounded-t">
					
				<!--Lead Card-->
				<div class="   bg-white rounded overflow-hidden shadow-lg">
					<a href="#" class="flex flex-wrap no-underline hover:no-underline">
						<div class="w-full md:w-2/3 rounded-t" >	
							<?php
                                                        
                                                        //echo elgg_view_module('featured',  elgg_echo("custom:files"), $content, $mod_params);
                                                         $entities =  mainVideo();
    
     
$mp4 = elgg_get_plugin_setting("mp4", 'nubesoplayer');
if($entities[0] != null)
{
echo elgg_view("page/homepage/nubesoplayer", array('file_guid' => $entities[0]->getGUID(), 'type' => 'mp4'));
}

                                                        ?>
						</div>

						<div class="w-full md:w-1/3 flex flex-col flex-grow flex-shrink">
							<div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
								<p class="w-full text-gray-600 text-xs md:text-sm pt-6 px-6">Video</p>
								<div class="w-full font-bold text-xl text-gray-900 px-6">👋 <?php if($entities[0] != null) echo $entities[0]->title; ?></div>
								<p class="text-gray-800 font-serif text-base px-6 mb-5">
								<?php $entities[0]->description;?>
								</p>
							</div>

							<div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
								<div class="flex items-center justify-between">
									<div class="w-22 h-8 rounded-full text-gray-600 text-xs md:text-sm"   >Shared by: <?php if($entities[0] != null) echo $entities[0]->getOwnerEntity()->username; ?></div>
									
								</div>
							</div>
						</div>

					</a>
				</div>
				<!--/Lead Card-->

<div class="container max-w-4xl mx-auto pt-16   text-center break-normal">
				<!--Title-->
					 
					<p class="text-xl md:text-2xl text-gray-900">Recent videos</p>
			</div>
				<!--Posts Container-->
				<div class="flex flex-wrap justify-between pt-12 -mx-6">

                                    <?php 
                                    
                                    $videos = allVideos();
                                     foreach ($videos as $t)
{
                                    ?>
					<!--1/3 col -->
					<div class="w-full md:w-1/2 p-6 flex flex-col  flex-shrink">
						<div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
							<div href="#" class="flex flex-wrap no-underline hover:no-underline">
                                                            <?php echo elgg_view("page/homepage/smallplayer", array('file_guid' => $t->getGUID(), 'type' => 'mp4')); ?>
                                                            <p class="h-48  pb-6"></p>
								<p class="w-full text-gray-600 text-xs md:text-sm px-6">Video</p>
								<div class="w-full font-bold text-xl text-gray-900 px-6"><?php echo $t->title;?></div>
								<p class="text-gray-800 font-serif text-base px-6 mb-5">
									<?php echo $t->title;?>
								</p>
							</div>
						</div>
						<div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
							<div class="flex items-center justify-between">
								
								<p class="text-gray-600 text-xs md:text-sm">Shared by: <?php echo $entities[0]->getOwnerEntity()->username; ?></p>
							</div>
						</div>
					</div>
				
					<?php 
                                        
}
                                        ?>
                                        
                                        
                                        
			</div>	
                                <div class="container max-w-4xl mx-auto pt-16   text-center break-normal">
				<!--Title-->
					 
					<p class="text-xl md:text-2xl text-gray-900">Recent pictures</p>
			</div>
                                <div class="flex flex-wrap justify-between pt-12 -mx-6">
                                     <?php 
                                    
                                    $latestPhotos = get_latest_photos();
                                     foreach ($latestPhotos as $lp)
{
//echo $t->getGuid();
                                    
                                    ?>
                                <!--1/3 col -->
					<div class="w-full md:w-1/3 p-6 flex flex-col flex-shrink">
						<div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
							<a href="<?php echo $site_url?>photos/image/<?php echo $lp->getGuid() ?>/" class="flex flex-wrap no-underline hover:no-underline">
        <img src="<?php echo $site_url?>photos/thumbnail/<?php echo $lp->getGuid() ?>/large/" class="h-full w-full rounded-t pb-6"></a>
								<p class="w-full text-gray-600 text-xs md:text-sm px-6"><?php echo $lp->title; ?></p>
								 
								 <p class="text-gray-800 font-serif text-base px-6 mb-5">
									<?php echo $lp->description; ?>
								</p>
							
						</div>
						<div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
							 
						</div>
					</div>
                                <?php 
                                        
}
                                        ?>
                                        
</div>	<div class="container max-w-4xl mx-auto pt-16   text-center break-normal">
				<!--Title-->
					 
					<p class="text-xl md:text-2xl text-gray-900">Recent Albums</p>
			</div>
                               
               <div class="flex flex-wrap justify-between pt-12 -mx-6">
                   <?php 
                                    
                                    $latestAlbums = get_latest_albums();
                                     foreach ($latestAlbums as $la)
{
//echo $la->getGuid();
//echo $la->title;

                                    ?> 
					<!--1/2 col -->
					<div class="w-full md:w-1/2 p-6 flex flex-col  flex-shrink">
						<div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow-lg">
							<a href="<?php echo $site_url?>photos/album/<?php echo $la->getGuid(); ?>/" class="flex flex-wrap no-underline hover:no-underline">
								<img src="<?php echo $site_url?>photos/thumbnail/<?php echo $la->cover ?>/master/" class="h-full w-full rounded-t pb-6">
								<p class="w-full text-gray-600 text-xs md:text-sm px-6"> </p>
								<div class="w-full font-bold text-xl text-gray-900 px-6"><?php echo $la->title; ?></div></a>
								<p class="text-gray-800 font-serif text-base px-6 mb-5">
									<?php echo $la->description; ?>
                                                                   
								</p>
							
						</div>
						<div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow-lg p-6">
							<div class="flex items-center justify-between">
								
								<p class="text-gray-600 text-xs md:text-sm">  
                                                                    
                                                                     <?php 
                                                                    foreach($la->tags as $tg){
                                                                        $tag_link = '<a href="'.$site_url . 'search?q=' . $tg . '&search_type=tags" class="inline-block text-gray-600 no-underline hover:text-gray hover:underline py-2 px-3">'. $tg .'</a> '; 
                                                                        echo $tag_link;
                                                                    } 
                                                                    ?>
                                                                   </p>
							</div>
						</div>
					</div>
                                          <?php 
                                        
}
                                        ?>
         </div>       
				<!--/ Post Content-->
						
			</div>
			
			
				 
			
		</div>
	

	</div>


	<footer class="bg-gray-900">	
		<div class="container max-w-6xl mx-auto flex items-center px-2 py-8">

			<div class="w-full mx-auto flex flex-wrap items-center">
				<div class="flex w-full md:w-1/2 justify-center md:justify-start text-white font-extrabold">
					<a class="text-gray-900 no-underline hover:text-gray-900 hover:no-underline" href="#">
						👻 <span class="text-base text-gray-200">Ghostwind CSS</span>
					</a>
				</div>
				<div class="flex w-full pt-2 content-center justify-between md:w-1/2 md:justify-end">
					<ul class="list-reset flex justify-center flex-1 md:flex-none items-center">
					  <?php echo elgg_view_menu('footer', array('sort_by' => 'priority', 'class' => 'inline-block text-gray-600 no-underline hover:text-gray-200 hover:underline py-2 px-3')); ?>
					</ul>
				</div>
			</div>
        

		
		</div>
	</footer>

	<script src="https://unpkg.com/popper.js@1/dist/umd/popper.min.js"></script>
	<script src="https://unpkg.com/tippy.js@4"></script>
	<script>
		//Init tooltips
		tippy('.avatar')
	</script>
</body>
