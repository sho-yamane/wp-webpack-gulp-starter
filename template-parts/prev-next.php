<nav class="post-navigation">

    <div class="post-navigation-inner">

        <?php
            $prev_post = get_previous_post();
            $next_post = get_next_post();
        ?>

        <?php if ($prev_post): ?>

            <?php
                $prev_thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($prev_post->ID), true);
            ?>

            <?php if( has_post_thumbnail($prev_post) ): ?>

                <div class="prev prev-next">
                    <?php
                        previous_post_link(
                            '%link',
                            '<div class="post-thumbnail" style="background-image: url(' . $prev_thumbnail[0] . ')"></div><i class="fa fa-caret-left" aria-hidden="true"></i> <p class="post-title">%title</p>'
                        );
                    ?>
                </div>

            <?php else: ?>

                <div class="prev prev-next">
                    <?php
                        previous_post_link(
                            '%link',
                            '<div class="post-thumbnail" style="background-image: url(' . esc_attr(get_template_directory_uri()) . '/img/no-image.jpg)"></div><i class="fa fa-caret-left" aria-hidden="true"></i> <p class="post-title">%title</p>'
                        );
                    ?>
                </div>

            <?php endif; ?>

        <?php else: ?>

            <div class="prev prev-next"></div>

        <?php endif; ?>

            <div class="home">
                <a href="<?php echo esc_url(home_url()); ?>">
                    <span class="txt">Back to Home</span>
                </a>
            </div>

        <?php if ($next_post): ?>

            <?php
                $next_thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($next_post->ID), true);
            ?>

            <?php if( has_post_thumbnail($next_post) ): ?>

                <div class="next prev-next">
                    <?php
                        next_post_link(
                            '%link',
                            '<div class="post-thumbnail" style="background-image: url(' . $next_thumbnail[0] . ')"></div><i class="fa fa-caret-right" aria-hidden="true"></i> <p class="post-title">%title</p>'
                        );
                    ?>
                </div>

            <?php else: ?>

                <div class="next prev-next">
                    <?php
                        next_post_link(
                            '%link',
                            '<div class="post-thumbnail" style="background-image: url(' . esc_attr(get_template_directory_uri()) . '/img/no-image.jpg)"></div><i class="fa fa-caret-right" aria-hidden="true"></i> <p class="post-title">%title</p>'
                        );
                    ?>
                </div>

            <?php endif; ?>

        <?php else: ?>

            <div class="next prev-next"></div>

        <?php endif; ?>

    </div>

</nav>
