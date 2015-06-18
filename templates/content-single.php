<?php while (have_posts()) : the_post(); ?>
    <article <?php post_class(); ?>>
        <header>
            <h1 class="article__headline"><?php the_title(); ?></h1>
        </header>
        <div class="article__body">
            <?php the_content(); ?>
        </div>
        <?php get_template_part('templates/entry-meta'); ?>

        <div id="tab-container" class="tab">
            <ul class="tab__navigation">
                <li><a href="#comments">Kommentare</a></li>
                <li><a href="#related-articles">Weitere Artikel</a></li>
            </ul>
            <div id="comments" class="tab__content">
                <?php comments_template('/templates/comments.php'); ?>
            </div>
            <div id="related-articles" class="tab__content">
                <?php dynamic_sidebar('sidebar-related-articles'); ?>
            </div>

        </div>
    </article>
<?php endwhile; ?>
