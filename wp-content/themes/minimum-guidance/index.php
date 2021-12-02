<?php get_header(); ?>

<div class="page">
    <!-- import header.php -->

    <div class="item">
        <!-- file name -->
        <p>filename: index.php</p>

        <!-- Site Title -->
        <h1><?php echo bloginfo('name') ?></h1>
        <h2>how to show blog title</h2>
        <ul>
            <li>
                echo bloginfo('name');
            </li>
            <li>
                Setting > General > Site Title
            </li>
        </ul>
    </div>

    <div class="item">
        <!-- Tagline -->
        <p><?php echo bloginfo('description') ?></p>
        <h2>how to show tagline</h2>
        <ul>
            <li>
                echo bloginfo('description')
            </li>
            <li>
                Setting > General > Tagline
            </li>
        </ul>
    </div>

    <div class="item">
        <!-- show posts -->
        <?php if (have_posts()) : ?>

            <?php while (have_posts()) : the_post(); ?>

                <p>
                    <a href="<?php the_permalink() ?>">
                        <?php the_title(); ?>
                    </a>
                </p>
                <p>
                    <?php the_content(); ?>
                </p>

            <?php endwhile; ?>

        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
        <h2>how to show posts</h2>
        <ul>
            <li>while loop</li>
            <li>have_posts</li>
            <li>the_post</li>
            <li>the_title</li>
            <li>the_content</li>
            <li>the_permalink</li>
        </ul>
    </div>
    <div class="item item--bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/sample_image.jpg') ?>);">
        <h2>how to get image</h2>
        <ul>
            <li>get_theme_file_uri('/images/sample_image.jps')</li>
        </ul>
    </div>

</div>

<?php get_footer() ?>