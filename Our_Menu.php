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
  <script src="lib/slideshow.js"></script>
</head>

<body id="body_Our_Menu">
  <header>
    <?php
    include 'header.php';
    ?>
  </header>
  <main>
    <article id="Our_Menu">
      <section class="column" style="margin-left: -50px">
        <img src="img/UMAI_PARTY.jpg" alt="Image 1" class="images_Our_Menu">
        <h2 class="title_Menu">UMAI_PARTY</h2>
        <p class="index_p" id="limited_edition">Limited edition</p>
        <p id="first_comment">Geniet samen van onze Umai Party, met daarin: 8x Veggie Crunch Roll, 8x Gerookte Zalm
          Dragon Roll, 8x
          Spicy
          Cali Roll, 6x Veggie Verde Maki, 6x Zalm Maki, 3x Avocado Maki, 3x Komkommer Maki, 2x Zalm Nigiri, 2x
          Tonijn
          Nigiri, 2x Roll In Gerookte Zalm Kaas, 2x Zalm Sesam Nigiri en 2x Tonijn Wasabi Nigiri.
        <p>
          <button class="Our_Menu_Button">Bestel nu</button>
      </section>

      <section class="column" style="margin-top: 100px; margin-left: -50px">
        <img src="img/Gyoza_garnaal.jpg" alt="Image 1" class="images_Our_Menu">
        <h2 class="title_Menu">Gyoza garnaal</h2>
        <p class="index_p">Onze garnalen gyoza zijn klaar om te gaan. Mondvol heerlijke garnalen, kool, gember, knoflook
          en tamari
          gemaakt door onze sushi-ambachtslieden voor je om op te warmen thuis. Vergeet niet om je sojasaus op te
          halen
          voor een extra vleugje smaak.
        <p>
          <button class="Our_Menu_Button">Bestel nu</button>
      </section>

      <section class="column" style="margin-top: 100px; margin-left: -50px; border-bottom: none;">
        <img src="img/menu-duo-zalm.jpg" alt="Image 1" class="images_Our_Menu" id="DuoZalm">
        <h2 class="title_Menu">Menu Duo Zalm</h2>
        <p class="index_p">Onze zalmsushiplateau's is een viering van al onze beste zalmsushi met wat avocadomaki, voor
          de goede orde.
          Met 2 avocado maki, 2 zalm maki, 2 zalm nigiri, 4 zalm verde maki, 4 spicy rolls en 4 zalm crunch rolls. Als
          je van zalm houdt, zul je deze ook lekker vinden.
        <p>
          <button class="Our_Menu_Button">Bestel nu</button>
      </section>
    </article>

  </main>

  <footer>
    <?php
    include 'footer.php';
    ?>
  </footer>
</body>

</html>