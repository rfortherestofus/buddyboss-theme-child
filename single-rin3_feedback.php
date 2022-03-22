<?php
/*
 * Template Name: Single R in 3 Feedback
 */

get_header();
?>



<div id="primary" class="content-area">

    <main class="px-4 mx-auto mt-2 max-w-screen-full visible_to_group_21090 visible_to_course_25514">





        <div class="mb-4 -mx-8 sm:flex">
            <div class="px-4 py-6 sm:px-12 sm:w-1/3">



                <div class="ml-2">
                    <div>
                        <div>
                            <p class="mt-4 mb-2 text-sm text-gray-400">Name</p>
                        </div>
                        <div class="mb-2">

                            <?php wpdocs_example_get_the_terms($taxonomy = 'rin3_participant') ?>



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

            <div class="px-4 sm:px-12 sm:w-2/3">
                <h1 class="text-3xl font-extrabold leading-none leading-8 tracking-tight text-blue-800">

                    <?php the_title(); ?>
                </h1>


                <span class="inline mt-4">
                    <a class="text-sm text-gray-400" href="/r-in-3-months-feedback-fall-2021/">Back to all feedback videos -></a>

                </span>

                <div>

                    <p>
                        <?php the_content(); ?>
                    </p>

                </div>

                <div class="mt-32">

                    <?php comments_template('', true); ?>
                </div>



    </main>

</div>



<?php
get_footer();
