<?php
/*
 * Template Name: RRU Community
 */

get_header();
?>

<div id="primary" class="content-area bb-grid-cell">


    <main id="main" class="mt-10 site-main">


        <div class="md:w-1/2">


            <h1 class="leading-none rru-page-title">
                Never get stuck again
                on your R journey
            </h1>

            <?php if ( is_user_logged_in() ) : ?>
            
            <!-- <div class="mt-12">

            
                <a href="/groups/community/" class="px-8 py-3 text-base font-medium leading-6 text-white transition duration-150 ease-in-out bg-blue-600 border border-transparent rounded-md hover:text-white hover:bg-blue-500 focus:outline-none focus:border-blue-700 focus:shadow-outline-blue md:py-4 md:text-lg md:px-10">
                    Join Community
                </a>

                <p class="mt-8 text-sm text-gray-500">
                You must be <a href="/login/">logged in</a> to join the community. 
                
                <a href="/product/free-community-membership/">Create a free account</a>.
                </p>
            </div> -->

            <?php endif; ?>

            <?php if ( !is_user_logged_in() ) : ?>
            
            <div class="mt-12">

            
                <a href="/product/free-community-membership/" class="px-8 py-3 text-base font-medium leading-6 text-white transition duration-150 ease-in-out bg-blue-600 border border-transparent rounded-md hover:text-white hover:bg-blue-500 focus:outline-none focus:border-blue-700 focus:shadow-outline-blue md:py-4 md:text-lg md:px-10">
                    Join Community
                </a>
                <p class="mt-8 text-sm text-gray-500">
                Already have an account? First, <a href="/login/">sign in</a>. Then, <a href="/groups/">join the community</a>.
                </p>

            </div>

            <?php endif; ?>



        </div>







        <div class="flex flex-wrap mt-32 overflow-hidden">

            <div class="w-full mb-4 overflow-hidden md:my-3 md:px-3 md:w-1/2">
                <img class="" src="/wp-content/themes/buddyboss-theme-child/assets/images/office-hours.svg" alt="Office Hours" />
            </div>

            <div class="w-full overflow-hidden md:my-3 md:px-3 md:w-1/2">
                <div class="w-2/3 mx-auto">
                    <h3 class="text-3xl font-extrabold leading-9 tracking-tight text-blue-800 sm:leading-10">
                        Office Hours

                    </h3>



                    <p>
                        Ever taken a course, felt good about your learning, only to get back to your desk and feel completely stuck? Twice-monthly office hours help you get unstuck. Ask questions and get live answers from me as well as guest experts.
                    </p>

                    <div class="mt-12">
                    <a href="/groups/office-hours/forum/" class="px-8 py-3 text-base font-medium leading-6 text-white transition duration-150 ease-in-out bg-blue-600 border border-transparent rounded-md hover:text-white hover:bg-blue-500 focus:outline-none focus:border-blue-700 focus:shadow-outline-blue md:py-4 md:text-lg md:px-10">
                    Join Office Hours
                </a>
                    </div>


                </div>
            </div>

        </div>

        <div class="flex flex-wrap mt-16 overflow-hidden">


            <div class="w-full pb-4 overflow-hidden sm:hidden">
                <img class="" src="/wp-content/themes/buddyboss-theme-child/assets/images/forums.svg" alt="Forums" />


            </div>

            <div class="w-full overflow-hidden md:my-3 md:px-3 md:w-1/2">
                <div class="w-2/3 mx-auto sm:mt-32">
                    <h3 class="text-3xl font-extrabold leading-9 tracking-tight text-blue-800 sm:leading-10">
                        Forums

                    </h3>



                    <p>
                        Connect with other R users. Learn from their successes, share your own wins. Get help on code that isn't working (yet). The forums will be a place for the rest of us to discuss our R journeys.
                    </p>
                    <div class="mt-12">
                    <a href="/groups/community/forum/" class="px-8 py-3 text-base font-medium leading-6 text-white transition duration-150 ease-in-out bg-blue-600 border border-transparent rounded-md hover:text-white hover:bg-blue-500 focus:outline-none focus:border-blue-700 focus:shadow-outline-blue md:py-4 md:text-lg md:px-10">
                    Join Community Forum
                </a>
                    </div>

                </div>
            </div>

            <div class="hidden w-full mb-4 overflow-hidden md:my-3 md:px-3 md:w-1/2 sm:block">
                <img class="" src="/wp-content/themes/buddyboss-theme-child/assets/images/forums.svg" alt="Forums" />


            </div>

        </div>

        <div class="flex flex-wrap mt-16 overflow-hidden" id="resource-library">

            <div class="w-full mb-4 overflow-hidden md:my-3 md:px-3 md:w-1/2">
                <img class="" src="/wp-content/themes/buddyboss-theme-child/assets/images/resource-library.svg" alt="Resource Library" />
            </div>

            <div class="w-full overflow-hidden md:my-3 md:px-3 md:w-1/2">
                <div class="w-2/3 mx-auto">

                    <p class="inline-flex items-center px-3 py-2 text-xl font-medium leading-5 text-white bg-orange-500 rounded-full">
                        Coming Soon
                    </p>
                    <h3 class="text-3xl font-extrabold leading-9 tracking-tight text-blue-800 sm:leading-10">
                        Resource Library

                    </h3>



                    <p>
                        I have been asked countless times what package to use for X. Or if I know of a tutorial for Y. This will be a carefully curated collection of the best resources for using R. Searchable and filterable, it will give you the resources you need to continue on your R journey.
                    </p>



                </div>
            </div>

        </div>


        <!-- <div class="bg-white" id="pricing">
            <div class="pt-12 sm:pt-16 lg:pt-24">
                <div class="max-w-screen-xl px-4 mx-auto text-center sm:px-6 lg:px-8">
                    <div class="max-w-3xl mx-auto lg:max-w-none">
                        <h2 class="text-lg font-semibold leading-6 tracking-wider text-gray-400 uppercase">
                            Pricing
                        </h2>
                        <p class="mt-2 text-3xl font-extrabold leading-9 sm:text-4xl sm:leading-10 lg:text-5xl lg:leading-none">
                            Make an investment in never getting stuck again
                        </p>
                        <p class="mt-2 text-xl leading-7 text-gray-500">
                            One live session with help on your code. One resource that helps you do something new in R. 
                        </p>
                        <p class="mt-2 text-xl leading-7 text-gray-500">
                        How much is that worth to you? 
                        </p>
                    </div>
                </div>
            </div>
            <div class="pb-12 mt-8 bg-gray-50 sm:mt-12 sm:pb-16 lg:mt-16 lg:pb-24">
                <div class="relative">
                    <div class="absolute inset-0 h-3/4"></div>
                    <div class="relative z-10 max-w-screen-xl px-4 mx-auto sm:px-6 lg:px-8">
                        <div class="max-w-md mx-auto lg:max-w-5xl lg:grid lg:grid-cols-2 lg:gap-5">
                            <div class="overflow-hidden rounded-lg shadow-lg">
                                <div class="px-6 py-8 bg-white sm:p-10 sm:pb-6">
                                    <div>
                                        <h3 class="inline-flex px-4 py-1 text-sm font-semibold leading-5 tracking-wide text-blue-600 uppercase bg-blue-100 rounded-full">
                                            Monthly
                                        </h3>
                                    </div>
                                    <div class="flex items-baseline mt-4 text-6xl font-extrabold leading-none">
                                        $20
                                        <span class="ml-1 text-2xl font-medium leading-8 text-gray-500">
                                            /mo
                                        </span>
                                    </div>
                                    <p class="mt-5 text-lg leading-7 text-gray-500">
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    </p>
                                </div>
                                <div class="px-6 pt-6 pb-8 bg-gray-50 sm:p-10 sm:pt-6">
                                    <ul>
                                        <li class="flex items-start">
                                            <div class="flex-shrink-0">
                                                <svg class="w-6 h-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                                </svg>
                                            </div>
                                            <p class="ml-3 text-base leading-6 text-gray-700">
                                                Twice monthly office hours
                                            </p>
                                        </li>
                                        <li class="flex items-start mt-4">
                                            <div class="flex-shrink-0">
                                                <svg class="w-6 h-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                                </svg>
                                            </div>
                                            <p class="ml-3 text-base leading-6 text-gray-700">
                                                Access to forums
                                            </p>
                                        </li>
                                        <li class="flex items-start mt-4">
                                            <div class="flex-shrink-0">
                                                <svg class="w-6 h-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                                </svg>
                                            </div>
                                            <p class="ml-3 text-base leading-6 text-gray-700">
                                                Access to resource library
                                            </p>
                                        </li>
                                    
                                    </ul>
                                    <div class="mt-6 rounded-md shadow">
                                        <a href="#" class="flex items-center justify-center px-5 py-3 text-base font-medium leading-6 text-white transition duration-150 ease-in-out bg-gray-900 border border-transparent rounded-md hover:bg-gray-800 focus:outline-none focus:shadow-outline">
                                            Get started
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 overflow-hidden rounded-lg shadow-lg lg:mt-0">
                                <div class="px-6 py-8 bg-white sm:p-10 sm:pb-6">
                                    <div>
                                        <h3 class="inline-flex px-4 py-1 text-sm font-semibold leading-5 tracking-wide text-blue-600 uppercase bg-blue-100 rounded-full">
                                            Annual
                                        </h3>
                                    </div>
                                    <div class="flex items-baseline mt-4 text-6xl font-extrabold leading-none">
                                        $200
                                        <span class="ml-1 text-2xl font-medium leading-8 text-gray-500">
                                            /year
                                        </span>
                                    </div>
                                    <p class="mt-5 text-lg leading-7 text-gray-500">
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    </p>
                                </div>
                                <div class="px-6 pt-6 pb-8 bg-gray-50 sm:p-10 sm:pt-6">
                                    <ul>
                                    <li class="flex items-start">
                                            <div class="flex-shrink-0">
                                                <svg class="w-6 h-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                                </svg>
                                            </div>
                                            <p class="ml-3 text-base leading-6 text-gray-700">
                                                Twice monthly office hours
                                            </p>
                                        </li>
                                        <li class="flex items-start mt-4">
                                            <div class="flex-shrink-0">
                                                <svg class="w-6 h-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                                </svg>
                                            </div>
                                            <p class="ml-3 text-base leading-6 text-gray-700">
                                                Access to forums
                                            </p>
                                        </li>
                                        <li class="flex items-start mt-4">
                                            <div class="flex-shrink-0">
                                                <svg class="w-6 h-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                                </svg>
                                            </div>
                                            <p class="ml-3 text-base leading-6 text-gray-700">
                                                Access to resource library
                                            </p>
                                        </li>
                                        <li class="flex items-start mt-4">
                                            <div class="flex-shrink-0">
                                                <svg class="w-6 h-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                                </svg>
                                            </div>
                                            <p class="ml-3 text-base leading-6 text-gray-700">
                                                Get two months free
                                            </p>
                                        </li>
                                    </ul>
                                    <div class="mt-6 rounded-md shadow">
                                        <a href="#" class="flex items-center justify-center px-5 py-3 text-base font-medium leading-6 text-white transition duration-150 ease-in-out bg-gray-900 border border-transparent rounded-md hover:bg-gray-800 focus:outline-none focus:shadow-outline">
                                            Get started
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="relative max-w-screen-xl px-4 mx-auto mt-4 sm:px-6 lg:px-8 lg:mt-5">
      
            </div>
        </div> -->





    </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
