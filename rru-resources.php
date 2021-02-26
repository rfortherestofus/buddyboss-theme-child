<?php
/*
 * Template Name: RRU Resources
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

    <h1 class="leading-none rru-page-title">
      Resources
    </h1>

    <p>
      This carefully curated collection of resources will help you find packages and learning resources to help you on your R journey.
      
    </p>
    <!-- <p>
      Try out the search and filters to find exactly the resource you need!
    </p> -->

    <!-- <p>

      Have a resource you think should be included? <a href="/contact">Send it to me</a>!
    </p> -->

    <div class="flex flex-wrap mb-0 md:space-x-4">
      <?php echo do_shortcode("[facetwp facet='search']"); ?>

      <?php echo do_shortcode("[facetwp facet='resource_category']"); ?>

      <?php echo do_shortcode("[facetwp facet='resource_type']"); ?>

      <?php echo do_shortcode("[facetwp facet='resource_creator']"); ?>

    </div>


    <?php echo do_shortcode("[facetwp template='resources']"); ?>

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
