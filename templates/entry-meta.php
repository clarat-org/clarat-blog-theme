<p class="article__meta">Verfasst am <time class="updated" datetime="<?= get_the_time('c'); ?>"><?= get_the_date(); ?></time>
<?= __('von', 'sage'); ?> <a href="<?= get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author" class="fn"><?= get_the_author(); ?></a> abgelegt in <?= get_the_category_list(", ") ?></p>
