<?php
/*
 * Template Name: Single Resource
 */

get_header();
?>

<div id="primary" class="content-area">

    <main class="px-4 mx-auto mt-2 max-w-screen-full">


        <div class="mb-4 -mx-8 sm:flex">
            <div class="px-4 py-6 sm:px-12 sm:w-1/3">


                <?php

                if (has_post_thumbnail()) {
                    $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'resource-featured-image');
                } else {
                    $featured_img_url = wp_get_attachment_image(12893, 'resource-featured-image');
                }
                ?>


                <img class="w-full mb-8 rounded shadow-lg" src="   <?php
        if (has_post_thumbnail()) {
            the_post_thumbnail('resource-featured-image');
        } else {
            echo wp_get_attachment_image(12893, 'resource-featured-image');
        }

        ?>

<div class="ml-2">
<div>
               <div>
               <p class="mt-4 mb-2 text-sm text-gray-400">Type</p>
</div>
                    <div class="mb-2">


                        <?php wpdocs_example_get_the_terms($taxonomy = 'resource_type') ?>



                    

                        </div>
                    </div>
                <div>
               <div>
               <p class="mt-4 mb-2 text-sm text-gray-400">Category</p>
</div>
                    <div class="mb-2">


                        <?php wpdocs_example_get_the_terms($taxonomy = 'resource_category') ?>



                    

                        </div>
                    </div>
                <div>
               <div>
               <p class="mt-4 mb-2 text-sm text-gray-400">Creator</p>
</div>
                    <div class="mb-2">

                    
                        <?php wpdocs_example_get_the_terms($taxonomy = 'resource_creator') ?>



                    </div>
                    </div>



                </div>
            </div>

            <div class="px-4 sm:px-12 sm:w-2/3">
                <h1 class="leading-none rru-page-title">

                    <?php the_title(); ?>
                </h1>

                <span class="inline-flex mt-2 mb-6 rounded-md shadow-sm">
                    <a href="<?php echo get_post_meta($post->ID, 'url', true); ?>" target="_blank">
                        <button type="button" class="inline-flex items-center px-4 py-2 text-base font-medium leading-6 text-white transition duration-150 ease-in-out bg-blue-800 border border-transparent rounded-md hover:bg-blue-700 focus:outline-none focus:border-blue-800 focus:shadow-outline-indigo active:bg-blue-800">
                            Go to Resource


                            <svg class="w-5 h-5 ml-3 -mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z" />
                                <path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z" />
                            </svg>

                        </button>
                    </a>
                </span>

                <span class="inline mt-4 ml-4">
                <a class="text-gray-400" href="/resources/">Return to resources -></a>

                </span>




                <p>
                    <?php the_content(); ?>
                </p>




    </main>

</div>

