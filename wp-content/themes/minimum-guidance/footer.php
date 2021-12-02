<div class="page">
    <p>filename: footer.php</p>
    <p>Footer Area</p>

    <div class="item">
        <h2>how to import js</h2>
        <ul>
            <li>wp_footer();</li>
        </ul>
    </div>

    <div class="item">
        <h2>how to import wp header</h2>
        <ul>
            <li>wp_footer();</li>
        </ul>
    </div>

    <div class="item">
        <i class="fab fa-twitter-square"></i>
        <h2>how to import font-awesome, google-font</h2>
        <ul>
            <li>functions.php</li>
            <li>add_action('wp_enqueue_scripts', 'guidance_files');</li>
            <li>wp_enqueue_style('font-awesome', '//pro.fontawesome.com/releases/v5.10.0/css/all.css');</li>
        </ul>
    </div>
</div>

<?php wp_footer(); ?>
</body>

</html>