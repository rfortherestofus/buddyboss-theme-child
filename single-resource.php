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


                <img class="w-full mb-8 rounded shadow-lg" src="<?php echo $featured_img_url ?>

                <ul class="flex flex-wrap m-0 mb-1">

                    <li class="mb-2">

                        <?php wpdocs_example_get_the_terms($taxonomy = 'resource_type', $bg_color = 'orange') ?>

                    </li>

                </ul>

                <ul class="flex flex-wrap m-0 mb-1">

                    <li class="mb-2">


                        <?php wpdocs_example_get_the_terms($taxonomy = 'resource_category', $bg_color = 'blue') ?>



                    </li>

                </ul>
                <ul class="flex flex-wrap m-0 mb-1">

                    <li class="mb-2">


                        <?php wpdocs_example_get_the_terms($taxonomy = 'resource_creator', $bg_color = 'gray') ?>



                    </li>



                </ul>
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




                <p>
                    <?php the_content(); ?>
                </p>



                <?php
                //get Pods object for current post
                $pod = pods('resource', get_the_id());
                //get the value for the relationship field
                $related = $pod->field('related_resource');
                //loop through related field, creating links to their own pages
                //only if there is anything to loop through
                if (!empty($related)) {

                ?>


                    <div class="pt-8 mt-12 border-t-2 border-blue-100">
                        <h2 class="text-blue-800">Related Resources</h2>
                    </div>

                    <div class="grid grid-cols-1 gap-4 mx-0 mb-24 sm:grid-cols-2">
                        <?php

                        foreach ($related as $rel) {
                            //get id for related post and put in ID
                            //for advanced content types use $id = $rel[ 'id' ];
                            $id = $rel['ID'];
                            //show the related post name as link

                        ?>

                            <div class="max-w-sm pb-0 overflow-hidden rounded shadow-lg">
                                <?php $related_post_featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'resource-featured-image');  ?>

                                <img class="w-full" src="<?php $related_post_featured_img_url ?>">

                                <!-- Title -->
                                <div class="px-6 pt-4 bg-white">
                                    <div class="h-16">
                                        <h3 class="leading-5">
                                            <a class="text-lg font-semibold text-blue-800" href="<?php the_permalink($id); ?>"><?php
                                                                                                                                echo esc_html(get_the_title($id)); ?></a>
                                        </h3>
                                    </div>

                                    <!-- Text -->
                                    <div class="h-32">

                                        <p class="text-base text-gray-700">
                                            <?php echo get_post_field('post_content', $id); ?>
                                        </p>

                                    </div>

                                </div>

                                <!-- Meta -->
                                <div class="px-6 py-0">
                                    <!-- <ul class="ml-0 max-h-24">
                                        <li class="flex py-1 mt-6 space-x-3 sm:mt-2 sm:py-2">


                                            <svg class="flex-shrink-0 w-5 h-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd" />
                                            </svg>
                                            <span class="text-sm leading-5 text-gray-700">
                                                <?php wpdocs_example_get_the_terms($taxonomy = 'resource_creator', $bg_color = 'gray') ?>

                                            </span>
                                        </li>

                                        <li class="flex py-1 space-x-3 sm:py-2">

                                            <svg class="flex-shrink-0 w-5 h-5 text-blue-300" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M10 3.5a1.5 1.5 0 013 0V4a1 1 0 001 1h3a1 1 0 011 1v3a1 1 0 01-1 1h-.5a1.5 1.5 0 000 3h.5a1 1 0 011 1v3a1 1 0 01-1 1h-3a1 1 0 01-1-1v-.5a1.5 1.5 0 00-3 0v.5a1 1 0 01-1 1H6a1 1 0 01-1-1v-3a1 1 0 00-1-1h-.5a1.5 1.5 0 010-3H4a1 1 0 001-1V6a1 1 0 011-1h3a1 1 0 001-1v-.5z" />
                                            </svg>




                                            <?php wpdocs_example_get_the_terms($taxonomy = 'resource_category', $bg_color = 'blue') ?>

                                        </li>

                                        <li class="flex py-1 space-x-3 sm:py-2">


                                            <svg class="flex-shrink-0 w-5 h-5 text-orange-300" viewBox="0 0 20 20" fill="currentColor">
                                                <path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z" />
                                            </svg>



                                            <?php wpdocs_example_get_the_terms($taxonomy = 'resource_type', $bg_color = 'orange') ?>

                                        </li>


                                    </ul> -->

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



                    <?php
                        } //end of foreach
                    } //endif ! empty ( $related )
                    ?>


                    </div>
            </div>
            
        </div>

    </main>

</div>