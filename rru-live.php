<?php
/*
 * Template Name: RRU Live
 */

get_header();
?>

<div id="primary" class="content-area bb-grid-cell">


  <main class="max-w-screen-xl px-4 mx-auto mt-8 sm:px-6">
    <div class="px-4 sm:px-6 lg:col-span-2 lg:px-8 xl:pr-12">
      <h1 class="text-center leading-none rru-page-title">
        R for the Rest of Us Live Coding
      </h1>
    </div>

    
      <div class="px-4">
        <p class="mt-4 text-2xl">
          Join me for occasional live coding on projects we're working on at R for the Rest of Us. The video below will appear whenever I am live.
        </p>
      </div>    


    <div class="w-full my-0 overflow-hidden text-base text-blue-800 aspect-w-16 aspect-h-9">
      <iframe src="https://www.youtube.com/embed/live_stream?channel=UCSoUNu8x-HblqqOK_EwdZGw" frameborder="0" allowfullscreen></iframe>


    </div>


    <div class="px-8 pt-6 pb-2 bg-blue-500 shadow-lg rounded-sm lg:col-span-2 lg:my-8">
        <h2 class="text-white">Want to know next time I go live?</h2>
        <?php echo do_shortcode("[ninja_form id=21]"); ?>
        <p class="text-gray-100 mt-8 hidden">
          Have questions you'd like me to go over during a future live coding session? Send me an email to david@rfortherestofus.com and I'll do my best to answer in a future session.

        </p>


      </div>






  </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
