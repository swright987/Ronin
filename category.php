<?php get_header(); ?>
<div role="main" id="category">
<?php if(have_posts()) : ?>
  <article class="archive">
    <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
      <?php /* If this is a category archive */ if (is_category()) { ?>
        <h2>Archive for <strong><?php single_cat_title(); ?></strong></h2>
      <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
        <h2>Posts Tagged <strong><?php single_tag_title(); ?></strong></h2>
      <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
        <h2>Archive for <?php the_time('F jS, Y'); ?></h2>
      <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
        <h2>Archive for <?php the_time('F, Y'); ?></h2>
      <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
        <h2>Archive for <?php the_time('Y'); ?></h2>
      <?php /* If this is an author archive */ } elseif (is_author()) { ?>
        <h2>Author Archive</h2>
      <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
        <h2>Archives</h2>
    <?php } ?>
    <ol>
<?php while(have_posts()) : the_post(); ?>
      <li><?php custom_time(); ?><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></li>
<?php endwhile; ?>
    </ol>
  </article>
<?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>