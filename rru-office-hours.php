<?php
/*
 * Template Name: RRU Office Hours
 */

get_header();
?>

<div id="primary" class="content-area">


    <main id="main" class="mt-10 site-main">

    <h1 class="leading-none rru-page-title">
                    Office Hours
                </h1>

        <div class="flex flex-wrap mt-8">

            <div class="w-full mb-4 md:my-3 md:px-3 md:w-2/5">




                <p>
                    Ever taken a course, felt good about your learning, only to get back to your desk and feel completely stuck? Twice-monthly office hours help you get unstuck. Ask questions and get live answers from me as well as guest experts.
                </p>

                <p>
                    Have questions you want answered? Ask in the <a href="/groups/office-hours/">Office Hours forum</a> in advance or just join live and ask away!
                </p>

                <p>
                    All office hours sessions will be recorded and posted in the <a href="/groups/office-hours/">Office Hours forum</a>.
                </p>






            </div>

            <div class="w-full overflow-hidden md:my-3 md:px-3 md:w-3/5">

                <h2>
                    Upcoming Sessions
                </h2>

                <?php echo do_shortcode("[tribe_events_list category='Office Hours' limit='5']"); ?>





            </div>

        </div>










    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
