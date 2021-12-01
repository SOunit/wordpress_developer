<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- import all files by WP -->
    <?php wp_head() ?>
    <title>Document</title>
</head>

<body>
    <div class="page">
        <p>filename: header.php</p>
        <h1>Header Area</h1>
        <h2>how to get header</h2>
        <ul>
            <li>get_header();</li>
        </ul>
        <h2>how to import files in head tag</h2>
        <ul>
            <li>wp_head()</li>
            <li>functions.php</li>
            <li>add_action('wp_enqueue_scripts', 'guidance_files');</li>
            <li>wp_enqueue_style('guidance-main-style', get_stylesheet_uri());</li>
        </ul>
    </div>

