<?php wp_footer(); ?>
<footer class="footer">
    <nav>
        <?php wp_nav_menu( array(
            'theme_location'=>'secondary',
            'container'     =>'',
            'menu_class'    =>'',
            'items_wrap'    =>'<ul>%3$s</ul>'));
        ?>
    </nav>
</footer>
</div><!--barba-container-->
</div><!--barba-wrapper-->
</body>
</html>
