<?php get_header(); ?>
<div role="main" id="single">
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
  <article class="post">
    <header>
      <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
      <?php custom_time(); ?>
      
    </header>
    <?php the_post_thumbnail(); ?>
    <?php the_content(); ?>
    <footer>
      <p>Posted in <?php the_category(', '); ?></p>
      <p>Tagged as <?php the_tags(); ?></p>
    </footer>
  </article>
<?php endwhile; ?>
  <nav class="post-nav">
    <?php previous_post_link('< %link'); ?> <?php next_post_link(' %link >'); ?>
  </nav>
<?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>