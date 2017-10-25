            <?php wp_footer(); ?>
            <footer class="header">
                <nav>
                    <?php wp_nav_menu( array(
                        'theme_location'=>'secondary',
                        'container'     =>'',
                        'menu_class'    =>'',
                        'items_wrap'    =>'<ul>%3$s</ul>'));
                    ?>
                </nav>
            </footer>
        </div>
    </div>
</body>
</html>
