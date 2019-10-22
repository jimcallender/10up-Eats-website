<header class="banner">
  <div class="container">

    <a class="brand" href="<?php echo e(home_url('/')); ?>">
      <h1><span><?php echo e(get_bloginfo('name', 'display')); ?></span></h1>
    </a>

<div id="searchwrap">
  <div class="search"><button>search</button></div>
    <div id="formwrap">
      <?php echo $__env->make('partials/search', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
  </div>
</div>
  <ul id="nav">
      <?php if(has_nav_menu('primary_navigation')): ?>
        <?php echo wp_nav_menu(['theme_location' => 'primary_navigation']); ?>

      <?php endif; ?>
  </ul>
</header>
