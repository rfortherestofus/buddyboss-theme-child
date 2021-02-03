<?php
/*
 * Template Name: RRU Live
 */

get_header();
?>

<div id="primary" class="content-area bb-grid-cell">


  <main class="mt-8 mx-auto max-w-screen-xl px-4 sm:px-6">



      <div class="relative max-w-7xl mx-auto lg:grid lg:grid-cols-5 mb-8">
        <div class="bg-gray-50 px-4 sm:px-6 lg:col-span-2 lg:px-8 xl:pr-12">
          <div class="max-w-lg mx-auto">
          <h1 class="rru-page-title leading-none">
          Live
        </h1>

          
        <p class="text-xl text-blue-800 leading-relaxed">
          I often stream myself livecoding in R. When I go live, it will appear below.


      <h2 class="text-gray-600 mt-2 text-base font-normal ml-2">Also watch on

      <a href="https://twitter.com/rfortherest"><i class="mx-2 ml-1 fab fa-lg fa-twitter text-gray-600 hover:text-gray-900"></i></a>
<a href="https://www.youtube.com/channel/UCH0p67s0WM4-mkMI5l7JSiQ/"><i class="mx-2 fab fa-lg fa-youtube  text-gray-600 hover:text-gray-900"></i></a>
<a href="https://www.twitch.tv/rfortherestofus"><i class="mx-2 fab fa-lg fa-twitch  text-gray-600 hover:text-gray-900"></i></a>


      </h2>






        </p>
          </div>
        </div>
        <div class="bg-blue-500 px-8 pt-6 pb-2 rounded-lg lg:col-span-3">
          <h2 class="text-white">Want to know next time I go live?</h2>
        <?php echo do_shortcode("[ninja_form id=21]"); ?>
          
        
        </div>
      </div>
    


    <div class="my-0 w-full overflow-hidden text-base text-blue-800">
      <iframe src="https://player.twitch.tv/?channel=rfortherestofus&parent=rfortherestofus.com" width="100%" height="500"></iframe>

    </div>




  </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
