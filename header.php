<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="N.Sloos">
    <meta name="keywords" content="Sushi, sushi, Restaurant">
    <title>Sushi Arrangementen</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/04fa9c0ca3.js" crossorigin="anonymous"></script>
    <link rel="icon" href="img/Screenshot 2024-02-05 094946.png" type="image/x-icon">
</head>
<body>
    <?php
    $pages = [
        ["href" => "index.php", "label" => "Home"],
        ["href" => "MenuHerkansing.php", "label" => "Our Menu"],
        ["href" => "aboutus.php", "label" => "About Us"],
        ["href" => "gallery.php", "label" => "Gallery"],
        ["href" => "reseverings.php", "label" =>"Reserveren"],
        ["href" => "Vacature.php", "label" =>"Other webpages"]
        
    ];
    ?>
    
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fa-solid fa-bars" style="color: black;"></i>
        </label>
        <img src="img/logo2.png" class="logo">
        <p class="slogan">Taste of Japan</p>
        <ul>
            <?php foreach ($pages as $page): ?>
                <?php if ($page['label'] == 'Other webpages'): ?>
                    <li class="dropdown">
                        <a href="<?php echo $page['href']; ?>" class="dropbtn <?php if ($_SERVER['PHP_SELF'] == '/'.$page['href']): ?>active<?php endif; ?>"><?php echo $page['label']; ?></a>
                        <div class="dropdown-content">
                            <!-- Your dropdown content here -->
                            <a href="vacatures.php">Vacature</a>
                            <a href="dranken.php">dranken</a>
                            <a href="arrangementen_pagina.php">arrangementen</a>
                            <a href="recensies.php">recensies</a>
                        </div>
                    </li>
                <?php else: ?>
                    <li><a href="<?php echo $page['href']; ?>" <?php if ($_SERVER['PHP_SELF'] == '/'.$page['href']): ?>class="active"<?php endif; ?>><?php echo $page['label']; ?></a></li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>
    </nav>

    
</body>
</html>