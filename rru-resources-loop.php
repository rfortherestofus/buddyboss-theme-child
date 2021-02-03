<!--
  Tailwind UI components require Tailwind CSS v1.8 and the @tailwindcss/ui plugin.
  Read the documentation to get started: https://tailwindui.com/documentation
-->

<!-- Keep this so the styles aren't ignored by purgecss bg-orange-100 bg-blue-100 bg-gray-100 -->


<div class="grid grid-cols-1 gap-4 mx-0 sm:grid-cols-2 lg:grid-cols-3">
  <?php while (have_posts()) : the_post(); ?>

    <div class="max-w-sm pb-0 overflow-hidden rounded shadow-lg">


      <a class="text-lg font-semibold text-blue-800" href="<?php the_permalink(); ?>">

        <?php
        if (has_post_thumbnail()) {
          the_post_thumbnail('resource-featured-image');
        } else {
          echo wp_get_attachment_image(12893, 'resource-featured-image');
        }



        ?>

      </a>

     
      <div class="px-6 pt-4 bg-white">

       <!-- Title -->
        <div class="h-16">
          <h3 class="leading-5">
            <a class="text-lg font-semibold text-blue-800" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
          </h3>
        </div>

        <!-- Text -->
        <div class="h-40 mb-4">

          <p class="text-base text-gray-700">
            <?php echo wp_trim_words(get_the_content(), 30, ' ...'); ?>

          </p>

        </div>

      </div>

      <!-- Meta -->
      <div class="px-6 py-0">
        <ul class="h-24 ml-0">
          <li class="flex flex-wrap mb-1">

            <?php wpdocs_example_get_the_terms($taxonomy = 'resource_type', $bg_color = 'orange') ?>

          </li>

          <li class="flex flex-wrap">


            <?php wpdocs_example_get_the_terms($taxonomy = 'resource_category', $bg_color = 'blue') ?>



          </li>



        </ul>

        <div class="border-t border-gray-200">
          <div class="flex -mt-px">
            <div class="flex flex-1 w-0 border-r border-gray-200">
              <a href="<?php the_permalink(); ?>" class="relative inline-flex items-center justify-center flex-1 w-0 py-4 -mr-px text-sm font-medium leading-5 text-gray-700 transition duration-150 ease-in-out border border-transparent rounded-bl-lg hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10">


                <svg class="w-5 h-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                </svg>
                <span class="ml-2 text-xs sm:text-sm">More Info</span>
              </a>
            </div>
            <div class="flex flex-1 w-0 -ml-px">
              <a href="<?php echo get_post_meta($post->ID, 'url', true); ?>" target="_blank" class="relative inline-flex items-center justify-center flex-1 w-0 py-4 text-sm font-medium leading-5 text-gray-700 transition duration-150 ease-in-out border border-transparent rounded-br-lg hover:text-gray-500 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10">


                <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                  <path d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z" />
                  <path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z" />
                </svg>
                <span class="ml-2 text-xs sm:text-sm">Go to Resource</span>
              </a>
            </div>
          </div>
        </div>

      </div>


    </div>


  <?php endwhile; ?>

</div>