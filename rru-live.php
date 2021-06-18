<?php
/*
 * Template Name: RRU Live
 */

get_header();
?>

<div id="primary" class="content-area bb-grid-cell">


  <main class="max-w-screen-xl px-4 mx-auto mt-8 sm:px-6">



      <div class="relative mx-auto mb-8 max-w-7xl lg:grid lg:grid-cols-5">
        <div class="px-4 bg-gray-50 sm:px-6 lg:col-span-2 lg:px-8 xl:pr-12">
          <div class="max-w-lg mx-auto">
          <h1 class="leading-none rru-page-title">
          Live
        </h1>

          
        <p class="text-xl leading-relaxed text-blue-800">
          I often stream myself livecoding in R. When I go live, it will appear below.








        </p>
          </div>
        </div>
        <div class="px-8 pt-6 pb-2 bg-blue-500 rounded-lg lg:col-span-3">
          <h2 class="text-white">Want to know next time I go live?</h2>
        <?php echo do_shortcode("[ninja_form id=21]"); ?>
          
        
        </div>
      </div>
    


    <div class="w-full my-0 overflow-hidden text-base text-blue-800 aspect-w-16 aspect-h-9">
    <iframe src="https://www.youtube.com/embed/live_stream?channel=UCSoUNu8x-HblqqOK_EwdZGw" frameborder="0" allowfullscreen></iframe>
      

    </div>




  </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
