<?php
/*
 * Template Name: RRU Email
 */

get_header();
?>

<div id="primary" class="content-area">

  <main class="px-4 mx-auto mt-2 max-w-screen-full">


<div class="bg-white">
  <div class="px-4 py-12 mx-auto max-w-7xl sm:px-6 lg:py-16 lg:px-8">
    <div class="px-6 py-6 bg-blue-700 rounded-lg md:py-12 md:px-12 lg:py-16 lg:px-16 xl:flex xl:items-center">
      <div class="xl:w-0 xl:flex-1">
        <h2 class="text-2xl font-extrabold tracking-tight text-white sm:text-3xl">
        Emails to Help You on Your R Journey
        </h2>
        <p class="max-w-3xl mt-3 text-lg leading-6 text-blue-200">
          Sign up for the R for the Rest of Us newsletter. 
        </p>
      </div>
      <div class="mt-8 sm:w-full sm:max-w-md xl:mt-0 xl:ml-8">
      <?php echo do_shortcode("[ninja_form id=3]"); ?>
        
      </div>
    </div>
  </div>
</div>




  </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
