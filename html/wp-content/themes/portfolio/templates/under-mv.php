<div class="l-lower__mv">
    <div class="l-lower__Wrap">
        <?php if (is_page('about')) : ?>
            <div class="l-lower__bgWrap l-lower__bg__about">
                <h1 class="l-lower__mv__title">
                    <?php echo get_the_title(); ?>
                </h1>
            </div>
        <?php elseif (is_page('contact')) : ?>
            <div class="l-lower__bgWrap l-lower__bg__contact">
                <h1 class="l-lower__mv__title">
                    <?php echo get_the_title(); ?>
                </h1>
            </div>
        <?php elseif (is_404()) : ?>
            <div class="l-lower__bgWrap l-lower__bg__404">
                <h1 class="l-lower__mv__title">
                    404
                </h1>
            </div>
        <?php elseif (is_page('sitemap')) : ?>
            <div class="l-lower__mvWrap">
                <h1 class="l-lower__mv__title">
                    <?php echo get_the_title(); ?>
                </h1>
            </div>
        <?php elseif (is_archive()) : ?>
            <h1 class="l-lower__mv__title">
                NWES
            </h1>
        <?php elseif (is_single()) : ?>
            <div class="l-lower__mvWrap">
                <h1 class="l-lower__mv__title">
                    NWES
                </h1>
            </div>
        <?php elseif (is_post_type_archive('gallery')) : ?>
            <div class="l-lower__mvWrap">
                <div class="l-lower__mv__slide">
                    <h1 class="l-lower__mv__text">
                        <?php echo $gallery_slug = strtoupper(get_query_var('post_type')); ?>
                    </h1>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>
