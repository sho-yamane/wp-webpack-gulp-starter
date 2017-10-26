<?php if ( is_category() ): ?>

    <div class="title-container">
        <h1><?php single_cat_title(); ?></h1>
        <div class="title-description">Category</div>
    </div>
    <?php if (! empty(term_description())) : ?>
        <div class="taxonomy-description">
            <?php echo term_description(); ?>
        </div>
    <?php endif; ?>

<?php elseif ( is_tag() ): ?>

    <div class="title-container">
        <h1><?php echo single_tag_title();; ?></h1>
        <div class="title-description">Tag</div>
    </div>
    <?php if (! empty(term_description())) : ?>
        <div class="taxonomy-description">
            <?php echo term_description(); ?>
        </div>
    <?php endif; ?>

<?php elseif ( is_search() ): ?>

    <div class="title-container">
        <h1><?php the_search_query(); ?></h1>
        <div class="title-description">検索結果</div>
    </div>
    <div class="taxonomy-description">
        <?php get_search_form(); ?>
    </div>

<?php elseif ( is_day() ): ?>

    <div class="title-container">
        <h1><?php the_time('jS F, Y'); ?></h1>
        <div class="title-description">日ごとの記事一覧</div>
    </div>

<?php elseif ( is_month() ): ?>

    <div class="title-container">
        <h1><?php the_time('F, Y'); ?></h1>
        <div class="title-description">月ごとの記事一覧</div>
    </div>

<?php elseif ( is_year() ): ?>

    <div class="title-container">
        <h1><?php the_time('Y'); ?></h1>
        <div class="title-description">年ごとの記事一覧</div>
    </div>

<?php elseif ( is_author() ): ?>

    <div class="title-container title-container-author">
        <div class="title"><?php the_author(); ?></div>
        <div class="title-description">投稿者ごとの記事一覧</div>
    </div>

<?php elseif ( is_404() ): ?>

    <div class="title-container">
        <h1>404 NOT FOUND</h1>
        <div class="title-description">Sorry, Page Not Found.</div>
    </div>

<?php endif; ?>
