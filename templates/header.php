<div class="wrapper-main">
    <header class="header-main">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><h1 class="logo"><?php bloginfo( 'name' ); ?></h1></a>

        <div class="nav-main">
            <form class="form-search" role="search" method="get" action="<?= esc_url(home_url('/')); ?>">
            <label for="search">Suche im Blog</label>
            <div class="form-search__innerwrapper">
                <input type="text" id="search" name="s" value="<?= get_search_query(); ?>" placeholder="Suche im Blog" />
                <button type="submit">Suchen</button>
            </div>
            </form>

            <div class="nav-main__select nav-main__select--expanded">
                <a href="#" class="nav-main__goto">Kategorien…</a>
                <?php
                if (has_nav_menu('primary_navigation')) :
                    wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav-main__list']);
                endif;
                ?>
            </div>
        </div>
    </header>


    <main role="main" class="content-main">
