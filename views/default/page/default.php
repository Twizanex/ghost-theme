<?php
/**
 * Elgg pageshell
 * The standard HTML page shell that everything else fits into
 *
 * @package Elgg
 * @subpackage Core
 *
 * @uses $vars['head']        Parameters for the <head> element
 * @uses $vars['body_attrs']  Attributes of the <body> tag
 * @uses $vars['body']        The main content of the page
 * @uses $vars['sysmessages'] A 2d array of various message registers, passed from system_messages()
 */

// render content before head so that JavaScript and CSS can be loaded. See #4032
$content = elgg_view('page/elements/body', $vars);
$header = elgg_view('page/elements/header', $vars);
$navbar = elgg_view('page/elements/navbar', $vars);
//$content = elgg_view('page/elements/body', $vars);
$footer = elgg_view('page/elements/footer', $vars);
$default_items = elgg_extract('default', $vars['menu'], array());
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     
		<meta name="author" content="name">
    <meta name="description" content="description here">
		<meta name="keywords" content="keywords,here">
		<link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet"> <!--Replace with your tailwind.css once created-->
		<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" rel="stylesheet">
	<style>
	.smooth {transition: box-shadow 0.3s ease-in-out;}
	::selection{background-color: aliceblue}
	</style>
        <?php
$site = elgg_get_site_entity();
$site_url = elgg_get_site_url();
$site_name = $site->name;
echo elgg_view('page/elements/head', $vars['head']);
echo elgg_view('page/elements/topbar_wrapper', $vars);
?>

</head>
<body class="bg-white font-sans leading-normal tracking-normal">

	<!--Nav-->
	<nav class=" p-4 mt-0 w-full" style="background-color: #313945;">
        <div class="container mx-auto flex items-center">
		    <div class="flex text-white font-extrabold">
				<a class="flex text-white text-base no-underline hover:text-white hover:no-underline" href="#"> 
					👻 <span class="hidden w-0 md:w-auto md:block pl-1">Ghostwind CSS</span>
				</a>
            </div>
			<div class="flex pl-4 text-sm">
				<?php echo elgg_view('page/elements/header', $vars); ?>
			</div>
        </div>
	</nav>
	<!--slide in nav-->
	<div id="header" class="bg-white fixed w-full z-10 top-0 hidden animated" style="opacity: .95;">
		<div class="bg-white">
			<div class="flex flex-wrap items-center content-center">
				<div class="flex w-1/2 justify-start text-white font-extrabold">
					<a class="flex text-gray-900 no-underline hover:text-gray-900 hover:no-underline pl-2" href="#">
						👻 <span class="hidden w-0 md:w-auto md:block pl-1">Ghostwind CSS</span>
					</a>
				</div>
				<div class="flex w-1/2 justify-end content-center">		
					  <p class="hidden sm:block mr-3 text-center h-14 p-4 text-xs"><span class="pr-2">Share this</span> 👉</p>
						<a class="inline-block text-white no-underline hover:text-white hover:text-underline text-center h-10 w-10 p-2 md:h-auto md:w-16 md:p-4" href="https://twitter.com/intent/tweet?url=#" style="background-color:#33b1ff;">
							<svg class="fill-current text-white h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M30.063 7.313c-.813 1.125-1.75 2.125-2.875 2.938v.75c0 1.563-.188 3.125-.688 4.625a15.088 15.088 0 0 1-2.063 4.438c-.875 1.438-2 2.688-3.25 3.813a15.015 15.015 0 0 1-4.625 2.563c-1.813.688-3.75 1-5.75 1-3.25 0-6.188-.875-8.875-2.625.438.063.875.125 1.375.125 2.688 0 5.063-.875 7.188-2.5-1.25 0-2.375-.375-3.375-1.125s-1.688-1.688-2.063-2.875c.438.063.813.125 1.125.125.5 0 1-.063 1.5-.25-1.313-.25-2.438-.938-3.313-1.938a5.673 5.673 0 0 1-1.313-3.688v-.063c.813.438 1.688.688 2.625.688a5.228 5.228 0 0 1-1.875-2c-.5-.875-.688-1.813-.688-2.75 0-1.063.25-2.063.75-2.938 1.438 1.75 3.188 3.188 5.25 4.25s4.313 1.688 6.688 1.813a5.579 5.579 0 0 1 1.5-5.438c1.125-1.125 2.5-1.688 4.125-1.688s3.063.625 4.188 1.813a11.48 11.48 0 0 0 3.688-1.375c-.438 1.375-1.313 2.438-2.563 3.188 1.125-.125 2.188-.438 3.313-.875z"></path></svg>
						</a>
						<a class="inline-block text-white no-underline hover:text-white hover:text-underline text-center h-10 w-10 p-2 md:h-auto md:w-16 md:p-4" href="https://www.facebook.com/sharer/sharer.php?u=#" style="background-color:#005e99">
							<svg class="fill-current text-white h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M19 6h5V0h-5c-3.86 0-7 3.14-7 7v3H8v6h4v16h6V16h5l1-6h-6V7c0-.542.458-1 1-1z"></path></svg>
						</a>
				</div>
			</div>
			
		</div>
		<!--Progress bar-->
		<div id="progress" class="h-1 bg-white shadow" style="background:linear-gradient(to right, #4dc0b5 var(--scroll), transparent 0);"></div>
    </div>
	 
	
	<!--Title-->
	 

	<!--image-->
	
	
	<!--Container-->
	<div class="container w-full max-w-6xl mx-auto px-2 py-8">
		
		<div class="mx-0 sm:mx-6">
			
			<div class="bg-white w-full max-w-6xl mx-auto px-2 py-8" style="font-family:Georgia,serif;">
				
				<!--Post Content-->
				

				<!--Lead Para-->
				 
					<?php echo $content ?>
                                

				 			
			
				 

												
				<!--/ Post Content-->
						
			</div>
			
			
				 
			
	 
			
		</div>
	

	</div>




	<div class="bg-gray-200">
	
		<div class="container w-full max-w-6xl mx-auto px-2 py-8">
			<div class="flex flex-wrap -mx-2">
				<div class="w-full md:w-1/3 px-2 pb-12">
					 
				</div>
				<div class="w-full md:w-1/3 px-2 pb-12">
					<div class="h-full bg-white rounded overflow-hidden shadow-md hover:shadow-lg relative smooth">
						 
					</div>
				</div>
				<div class="w-full md:w-1/3 px-2 pb-12">
					<div class="h-full bg-white rounded overflow-hidden shadow-md hover:shadow-lg relative smooth">
						 
					</div>
				</div>
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
					  <li>
						<a class="inline-block py-2 px-3 text-white no-underline" href="index.html">HOME</a>
					  </li>
					  <li>
						<a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:underline py-2 px-3" href="#">link</a>
					  </li>
					  <li>
						<a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:underline py-2 px-3" href="#">link</a>
					  </li>
						<li>
						<a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:underline py-2 px-3" href="#">link</a>
					  </li>
					</ul>
				</div>
			</div>
        

		
		</div>
            <?php echo elgg_view('page/elements/foot');?>
	</footer>


<script>
	/* Progress bar */
	//Source: https://alligator.io/js/progress-bar-javascript-css-variables/
	var h = document.documentElement,
		  b = document.body,
		  st = 'scrollTop',
		  sh = 'scrollHeight',
		  progress = document.querySelector('#progress'),
		  scroll;
	var scrollpos = window.scrollY;
	var header = document.getElementById("header");

	document.addEventListener('scroll', function() {

		/*Refresh scroll % width*/
		scroll = (h[st]||b[st]) / ((h[sh]||b[sh]) - h.clientHeight) * 100;
		progress.style.setProperty('--scroll', scroll + '%');

		/*Apply classes for slide in bar*/
		scrollpos = window.scrollY;

    if(scrollpos > 100){
      header.classList.remove("hidden");
	  header.classList.remove("fadeOutUp");
	  header.classList.add("slideInDown");
    }
    else {
	  header.classList.remove("slideInDown");
      header.classList.add("fadeOutUp");
	  header.classList.add("hidden");
    }

	});

</script>


</body>
</html>
