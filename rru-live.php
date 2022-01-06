<?php
/*
 * Template Name: RRU Live
 */

get_header();
?>

<div id="primary" class="content-area bb-grid-cell">


  <main class="max-w-screen-xl px-4 mx-auto mt-8 sm:px-6">
    <div class="px-4 sm:px-6 lg:col-span-2 lg:px-8 xl:pr-12">
      <h1 class="leading-none rru-page-title">
      R for the Rest of Us Live Coding
      </h1>
    </div>

    <div class="relative mx-auto mb-8 max-w-7xl lg:grid lg:grid-cols-4">
      <div class="px-4 sm:px-6 lg:col-span-2 lg:px-8 xl:pr-12">
        <div class="max-w-lg mx-auto">

          <div class="mb-1 mt-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
          </div>
          <p class="text-xl leading-relaxed text-blue-800 mb-2">
            R for the Rest of Us live coding happens on the first Monday of each month at 11:00am Pacific time.

          </p>
          <span class="text-sm text-white bg-blue-500 rounded-lg p-2">

            <a class="text-white hover:text-white" href="https://calendar.google.com/event?action=TEMPLATE&tmeid=OTRhYjFiZDBhMTg3NGNhODk1YjY4YzA2NzM4YzhjNzBfMjAyMjAyMDdUMTkwMDAwWiBjXzdqYnNpMGM1Z2gzaWJuMXQ2YTE3bDY4cWw4QGc&tmsrc=c_7jbsi0c5gh3ibn1t6a17l68ql8%40group.calendar.google.com&scp=ALL" target="_blank">ADD TO CALENDAR</a>

            </svg>
          </span>

          <div class="mb-1 mt-6">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
            </svg>
          </div>

          <p class="text-xl leading-relaxed text-blue-800">
            I may live stream at other times as well. Enter your email in the form and/or <a href="https://www.youtube.com/channel/UCSoUNu8x-HblqqOK_EwdZGw">subscribe to the R for the Rest of Us channel on YouTube</a> to be notified.
          </p>


          <div class="mb-1 mt-6">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
            </svg>
          </div>

          <p class="text-xl leading-relaxed text-blue-800">
            Code used in live streams is <a href="https://github.com/rfortherestofus/live">available on GitHub</a>.
          </p>
        </div>
      </div>
      <div class="px-8 pt-6 pb-2 bg-blue-500 shadow-lg rounded-sm lg:col-span-2 lg:my-8">
        <h2 class="text-white">Want to know next time I go live?</h2>
        <?php echo do_shortcode("[ninja_form id=21]"); ?>
        <p class="text-gray-100 mt-8">
          Have questions you'd like me to go over during a future live coding session? Send me an email to david@rfortherestofus.com and I'll do my best to answer in a future session.

        </p>


      </div>
    </div>



    <div class="w-full my-0 overflow-hidden text-base text-blue-800 aspect-w-16 aspect-h-9">
      <iframe src="https://www.youtube.com/embed/live_stream?channel=UCSoUNu8x-HblqqOK_EwdZGw" frameborder="0" allowfullscreen></iframe>


    </div>




  </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
