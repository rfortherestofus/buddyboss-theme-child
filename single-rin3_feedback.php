<?php
/*
 * Template Name: Single R in 3 Feedback
 */

get_header();
?>


<div id="primary" class="content-area">

    <main class="px-4 mx-auto mt-2 max-w-screen-full">


        <div class="mb-4 -mx-8 sm:flex">
            <div class="px-4 py-6 sm:px-12 sm:w-1/4">



                <div class="ml-2">
                    <div>
                        <div>
                            <p class="mt-4 mb-2 text-sm text-gray-400">Name</p>
                        </div>
                        <div class="mb-2">

                            <div class="py-1 pr-2 text-sm font-medium leading-4 rounded-full text-blue-800-200">
                                <?php

                                $fname = get_the_author_meta('first_name');
                                $lname = get_the_author_meta('last_name');
                                $full_name = '';

                                if (empty($fname)) {
                                    $full_name = $lname;
                                } elseif (empty($lname)) {
                                    $full_name = $fname;
                                } else {
                                    //both first name and last name are present
                                    $full_name = "{$fname} {$lname}";
                                }

                                echo $full_name;
                                ?>

                            </div>



                        </div>
                    </div>





                    <div>
                        <div>
                            <p class="mt-4 mb-2 text-sm text-gray-400">Week</p>
                        </div>
                        <div class="mb-2">


                            <?php wpdocs_example_get_the_terms($taxonomy = 'rin3_feedback_week') ?>





                        </div>
                    </div>

                    <div>
                        <div>
                            <p class="mt-4 mb-2 text-sm text-gray-400">Code</p>
                        </div>
                        <div class="mb-2">

                            <div class="py-1 pr-2 text-sm font-medium leading-4 rounded-full text-blue-800-200">

                                <a href="<?php echo get_post_meta($post->ID, 'code_url', true); ?>" target="_blank">

                                    Link to Code ->




                                </a>



                            </div>



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
                            <p class="mt-4 mb-2 text-sm text-gray-400">Related Packages</p>
                        </div>
                        <div class="mb-2">


                            <?php wpdocs_example_get_the_terms($taxonomy = 'related_packages') ?>



                        </div>
                    </div>



                </div>
            </div>

            <div class="px-4 sm:px-12 sm:w-3/4">
                <h1 class="leading-none rru-page-title">

                    <?php the_title(); ?>
                </h1>






                <p>
                    <?php the_content(); ?>
                </p>




    </main>

</div>