<!--
  Tailwind UI components require Tailwind CSS v1.8 and the @tailwindcss/ui plugin.
  Read the documentation to get started: https://tailwindui.com/documentation
-->

<!-- Keep this so the styles aren't ignored by purgecss bg-orange-100 bg-blue-100 bg-gray-100 -->



<div class="grid grid-cols-1 gap-4 mx-0 sm:grid-cols-2 lg:grid-cols-3">
  <?php while (have_posts()) : the_post(); ?>

    <div class="max-w-sm pb-0 overflow-hidden rounded shadow-lg">


      <a class="text-lg font-semibold text-blue-800" href="<?php the_permalink(); ?>">







      </a>


      <div class="px-6 pt-4 bg-white">

        <!-- Title -->
        <div class="h-24">
          <h3 class="mb-2">
            <a class="text-xl font-semibold text-blue-800" href="<?php the_permalink(); ?>"><?php rin3_feedback_video_meta($taxonomy = 'rin3_feedback_week') ?> Feedback</a>
          </h3>
          <div class="ml-1"><?php rin3_feedback_video_meta($taxonomy = 'rin3_participant') ?></div>
        </div>



      </div>




    </div>


  <?php endwhile; ?>

</div>

