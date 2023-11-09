<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head(); ?>
</head>
<body>
    <header class="header">
        <div class ="nav-image">
            <?php $logoimg= get_header_image(); ?>
            <img src="<?php echo $logoimg; ?>" >

</div>
    </header>

    