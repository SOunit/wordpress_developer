<?php get_header() ?>

<div class="page">
    <div class="item">
        <p>filename: single.php</p>
        <p>for single post</p>

        <?php if (have_posts()) : ?>

            <?php while (have_posts()) : the_post(); ?>

                <h1>
                    <?php the_title(); ?>
                </h1>
                <?php the_content(); ?>

            <?php endwhile; ?>

        <?php endif; ?>
        <?php wp_reset_postdata(); ?>

        <h2>How to show signle post</h2>
        <ul>
            <li>create single.php file</li>
        </ul>
    </div>

</div>


<?php get_footer() ?>