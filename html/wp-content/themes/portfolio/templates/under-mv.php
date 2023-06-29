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
                    sitemap
                </h1>
            </div>
        <?php elseif (is_archive()) : ?>
            <div class="l-lower__bgWrap l-lower__bg__archive">
                <h1 class="l-lower__mv__title">
                    News
                </h1>
            </div>
        <?php elseif (is_single()) : ?>
            <div class="l-lower__bgWrap l-lower__bg__single">
                <h1 class="l-lower__mv__title">
                    News
                </h1>
            </div>
        <?php endif; ?>
    </div>
</div>
<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if (function_exists('bcn_display')) {
        bcn_display();
    } ?>
</div>
