        </main>
    </div>
    <div class="footer-main">
        <nav class="nav-footer">
            <?php if (has_nav_menu('footer_navigation')) :
                wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'nav-footer__list']);
            endif;
            ?>
        </nav>
    </div>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/build/js/app.js"></script>

