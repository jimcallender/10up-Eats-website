<article <?php post_class() ?>>
  <header>
    <a href="<?php echo e(get_permalink()); ?>"><?php the_post_thumbnail( 'full' ) ?></a>
    <div class="content-teaser">
      <?php echo $__env->make('partials/entry-meta', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <h2 class="entry-title"><a href="<?php echo e(get_permalink()); ?>"><?php echo get_the_title(); ?></a></h2>
    </div>
  </header>
  <div class="entry-summary">
    <?php
  $more_tag = strpos($post->post_content, '<!--more-->');
  (is_home() && $more_tag) ? the_content('Read more') : the_excerpt();
?>
  </div>
</article>
