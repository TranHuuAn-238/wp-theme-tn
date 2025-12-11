<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lập trình theme Wordpress</title>
    <?php wp_head(); ?>
</head>
<body>
    
<!-- Hiển thị thanh menu -->
<?php get_template_part('includes/section', 'menu'); ?>
