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