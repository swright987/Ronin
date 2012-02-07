<?php get_header(); ?>
<div role="main" id="page">
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
  <article class="post">
    <header>
      <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
      <?php custom_time(); ?>

    </header>
    <?php the_post_thumbnail(); ?>
    <?php the_content(); ?>
  </article>
<?php endwhile; ?>
  <nav class="post-nav">
    <?php posts_nav_link(); ?>
  </nav>
<?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>