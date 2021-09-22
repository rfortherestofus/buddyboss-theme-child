<?php
/*
 * Template Name: RRU R in 3 Feedback
 */

get_header();
?>



<script>
  (function($) {
    $(document).on('facetwp-loaded', function() {
      if (FWP.loaded) {
        $('html, body').animate({
          scrollTop: $('.content-area').offset().top
        }, -500);
      }
    });
  })(jQuery);
</script>


<div id="primary" class="content-area">

  <main class="px-4 mx-auto mt-2 max-w-screen-full">

  
  
  <?php echo do_shortcode("[student course_id='18140']"); ?>
    <h1 class="leading-none rru-page-title">
      R in 3 Months Feedback
    </h1>
    <?php echo do_shortcode("[/student]"); ?>


    <p>
      This page collects feedback for R in 3 Months (Fall 2021) participants.

    </p>


    <div class="flex flex-wrap mb-0 md:space-x-4">

      <?php echo do_shortcode("[facetwp facet='rin3_participant']"); ?>

      <?php echo do_shortcode("[facetwp facet='rin3_week']"); ?>

      <?php echo do_shortcode("[facetwp facet='resource_category']"); ?>

      <?php echo do_shortcode("[facetwp facet='related_packages']"); ?>



    </div>

    
    <?php echo do_shortcode("[facetwp template='rin3_feedback']"); ?>
    

    <div class="flex items-center justify-between px-4 mt-12">
      <div class="hidden text-sm text-gray-600 sm:block">
        <?php echo do_shortcode("[facetwp facet='number_of_results']"); ?>
      </div>
      <div class="justify-end">
        <?php echo do_shortcode("[facetwp facet='pagination']"); ?>
      </div>
    </div>

  
    



  </main><!-- #main -->
</div><!-- #primary -->



<?php
get_footer();
