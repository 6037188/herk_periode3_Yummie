<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Sushi webshop/restaurant">
  <meta name="keywords" content="Sushi Yummie, Yummie, Sushi, Japan">
    <title>Vacatures</title>
    <link rel="stylesheet" href="css/Arijancss.css">
    <meta name="author" content="Arijan Jakupi">
  <style>
    body {
      margin: 0;
      padding: 0;
    }
    
    h1 {
      text-align: center;
    }

    .container3 {
      display: grid;
      justify-content: center;
      grid-gap: 20px;
      padding: 20px;
    }
    
    .vacature { 
      border: 1px solid #ccc;
      padding: 20px;
      width: 800px;
      text-align: center; /* Tekst centreren */
    }

    ul {
  list-style-type: none;
}

    @media screen and (max-width: 768px) { /* Tablet en kleiner */
      .container {
        grid-template-columns: 1fr; /* Één kolom */
      }
    }

    @media screen and (max-width: 480px) { /* Telefoon en kleiner */
      .container {
        padding: 10px; /* Kleinere padding */
      }
    }
  </style>
</head>
<body>
  <header>
    <?php include 'header.php'; ?>
  </header>
  <main>
    <h1>Onze vacatures</h1>
    <section class="container3">
      <article class="vacature">
        <h2>Sushi Chef</h2>
        <p>Wij zijn op zoek naar een ervaren sushi chef die onze gasten kan verrassen met authentieke en smaakvolle sushi creaties.</p>
        <p>Vereisten:</p>
        <ul>
          <li>Minimaal 3 jaar ervaring als sushi chef</li>
          <li>Kennis van diverse sushi bereidingstechnieken</li>
          <li>Creatief en oog voor detail</li>
        </ul>
      </article>
      <article class="vacature">
        <h2>Sushi Sous Chef</h2>
        <p>Ben jij een ervaren sushi chef op zoek naar een nieuwe uitdaging? Word sous chef in ons sushirestaurant!</p>
        <p>Vereisten:</p>
        <ul>
          <li>Ervaring als sushi chef</li>
          <li>Leidinggevende capaciteiten</li>
          <li>Organisatorisch sterk</li>
        </ul>
      </article>
      <article class="vacature">
        <h2>Sushi Bedieningsmedewerker</h2>
        <p>Wil jij werken in een sfeervol sushirestaurant en onze gasten een fantastische ervaring bezorgen?</p>
        <p>Vereisten:</p>
        <ul>
          <li>Ervaring in de bediening is een pré</li>
          <li>Gastvrij en representatief</li>
          <li>Flexibel inzetbaar</li>
        </ul>
      </article>
      <article class="vacature">
        <h2>Sushi Bezorger</h2>
        <p>Heb jij een rijbewijs en wil je deel uitmaken van ons bezorgteam om onze heerlijke sushi bij onze klanten te bezorgen?</p>
        <p>Vereisten:</p>
        <ul>
          <li>Geldig rijbewijs</li>
          <li>Goede kennis van de omgeving</li>
          <li>Verantwoordelijkheid en betrouwbaarheid</li>
        </ul>
      </article>
    </section>
  </main>
  <footer>
    <?php include 'footer.php'; ?>
  </footer>
</body>
</html>