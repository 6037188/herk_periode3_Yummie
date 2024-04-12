
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="utf-8">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Sushi webshop/restaurant">
  <meta name="keywords" content="Sushi Yummie, Yummie, Sushi, Japan">
    <title>Gallery</title>
    <link rel="stylesheet" href="css/Arijancss.css">
    <meta name="author" content="Arijan Jakupi">
<style>
  body {
    margin: 0;
    padding: 0;
  }
  
  
  main {
    padding: 20px;
  }
  
  h1 {
    text-align: center;
  }

  .dranken {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
  }
  
  .drank {
    width: 300px;
    margin: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 20px;
    text-align: center;
  }

  .drank p {
    margin-left: 20px;
  }
  
  .drank img {
    width: 200px;
    height: 170px;
    margin-bottom: 10px;
  }
  
</style>
</head>
<body>

<header>
        <?php
        include 'header.php';
        ?>
    </header>

<main>
  <h1>Dranken</h1>
  <section class="dranken">
    <article class="drank">
      <img src="img/sake.jpg" alt="Sake">
      <h2>Sake</h2>
      <p>Japanse rijstwijn, ideaal om te combineren met sushi.</p>
      <p>Prijs: €7,99</p>
    </article>
    <article class="drank">
      <img src="img/groene thee.webp" alt="Groene Thee">
      <h2>Groene Thee</h2>
      <p>Verfrissende groene thee, traditioneel bij sushi.</p>
      <p>Prijs: €3,95</p>
    </article>
    <article class="drank">
      <img src="img/plum wine.png" alt="Plum Wine">
      <h2>Plum Wine</h2>
      <p>Japanse pruimenwijn, zoet en fruitig van smaak.</p>
      <p>Prijs: €6,49</p>
    </article>
    <article class="drank">
      <img src="img/shochu.jpg" alt="Shochu">
      <h2>Shochu</h2>
      <p>Japanse gedistilleerde drank, perfect voor sushi.</p>
      <p>Prijs: €7,49</p>
    </article>
    <article class="drank">
      <img src="img/ramune.avif" alt="Ramune">
      <h2>Ramune</h2>
      <p>Japanse koolzuurhoudende frisdrank, verfrissend en uniek.</p>
      <p>Prijs: €5,49</p>
    </article>
    <article class="drank">
      <img src="img/sake cocktail.jpg" alt="Sake Cocktail">
      <h2>Sake Cocktail</h2>
      <p>Verfrissende cocktail op basis van sake, perfect voor sushi-liefhebbers.</p>
      <p>Prijs: €10</p>
    </article>
  </section>
</main>

<footer>
        <?php
        include 'footer.php';
        ?>
    </footer>

</body>
</html>

