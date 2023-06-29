<?php get_header(); ?>

<main class="aboutMain">
    <section class="l-underlayer__common">
        <?php
        include('templates/under-mv.php');
        ?>
    </section>
    <section class="s_contact">
        <?php echo do_shortcode('[mwform_formkey key="50"]'); ?>
    </section>

    <!-- ローカルは22 -->

</main>
<?php get_footer(); ?>
