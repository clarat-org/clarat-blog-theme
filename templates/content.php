<article <?php post_class(); ?>>
  <header>
    <h2 class="article__headline"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  </header>
  <div class="article__body">
    <?php the_content(); ?>
  </div>
    <?php get_template_part('templates/entry-meta'); ?>
</article>
