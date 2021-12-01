<?php get_header(); ?>
<div class="page">

    <div class="item">
        <p>filename: page.php</p>
        <p>for single page</p>

        <?php if (have_posts()) : ?>

            <?php while (have_posts()) : the_post(); ?>

                <h1>
                    <?php the_title(); ?>
                </h1>
                <?php the_content(); ?>

            <?php endwhile; ?>

        <?php endif; ?>
        <?php wp_reset_postdata(); ?>

        <h2>How to show signle page</h2>
        <ul>
            <li>create page.php file</li>
        </ul>
    </div>
</div>
<?php get_footer() ?>