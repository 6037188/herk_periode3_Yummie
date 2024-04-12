<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Sushi webshop/restaurant">
  <meta name="author" content="N.Sloos">
  <meta name="keywords" content="Sushi Yummie, Yummie, Sushi, Japan">
  <title>Sushi Yummy</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" href="img/Screenshot 2024-02-05 094946.png" type="image/x-icon">
  <script src="lib/slideshow.js" defer></script>
</head>

<body>
  <?php
  include 'header.php';
  ?>

  <main>
    <article class="container">
      <section class="content">
        <h1>Sushi Yummie</h1>
        <p id="first">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
          magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat.</p> 

        <p id="second">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
          Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p> 

        <p id="third">Porttitor massa id neque aliquam vestibulum. Ullamcorper a lacus vestibulum sed arcu non. Adipiscing elit
          pellentesque habitant morbi. Vulputate enim nulla aliquet porttitor lacus. Mauris a diam maecenas sed enim ut
          sem. Eu consequat ac felis donec et. Faucibus ornare suspendisse sed nisi lacus sed viverra.</p>
      </section>
      
      <section class="image">
        <img src="img/Sushi.jpg" alt="Image" id="imagestart">
      </section>
      </arcticle>

      <article class="slideshow-container" style="margin-top: 460px; margin-left: -800px;">
        <section class="slide fade">
          <img src="img/sushi-met-tonijn-en-avocado-1.jpg" alt="Image 1"
            style="height: 450px; width: 1000px; margin-left: -85px;">
        </section>
        <section class="slide fade">
          <img src="img/Aqua-Asia-Club-Rotterdam.jpg" alt="Image 2"
            style="height: 450px; width: 1000px;  margin-left: -85px;">
        </section>
        <section class="slide fade">
          <img src="img/special_rolls.jpg" alt="Image 3" style="height: 450px; width: 1000px;  margin-left: -85px;">
        </section>
      </article>
  </main>

  <footer>
    <?php
    include "footer.php";
    ?>
  </footer>
</body>



</html>