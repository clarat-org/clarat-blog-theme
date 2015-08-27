        </main>
    </div>
        <div class="footer-main">
            <nav class="nav-footer">
                    <?php wp_nav_menu(['menu' => 'Fussmenü', 'menu_class' => 'nav-footer__list']); ?>
            </nav>
        </div>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/build/js/app.js"></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-59626864-2', 'auto');
      ga('set', 'anonymizeIp', true);
      ga('send', 'pageview');

    </script>

