<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Sushi webshop/restaurant">
  <meta name="keywords" content="Sushi Yummie, Yummie, Sushi, Japan">
    <title>Menu Herkansing</title>
    <link rel="stylesheet" href="css/Arijancss.css">
    <meta name="author" content="Arijan Jakupi">
</head>
<body>
<header>
    <?php include 'header.php'; ?>
  </header>
  <main>
    <h1>Hoofdgerechten</h1>

    <section class="slideshow-container">
        <article class="slide1">
            <img src="img/edamame.webp" alt="Edamame">
        </article>
        <article class="slide1">
            <img src="img/sashimimix.jpg" alt="Sashimi mix">
        </article>
        <article class="slide1">
            <img src="img/mochi-ijs.jpg" alt="Mochi">
        </article>
        <article class="slide1">
            <img src="img/californiaroll.jpg" alt="California roll">
        </article>
        <article class="slide1">
            <img src="img/dorayaki.avif" alt="Dorayaki">
        </article>
    </section>
    <script src="lib/OurMenuSlideshow.js"></script>

    <section class="container4">
    <?php
$gerechten = array(
    "voorgerecht" => array(
        array(
            "naam" => "Edamame",
            "prijs" => 4.50,
            "vega" => "Ja",
            "foto" => "edamame.webp"
        ),
        array(
            "naam" => "Gyoza",
            "prijs" => 6.00,
            "vega" => "Nee",
            "foto" => "gyoza.jpg"
        ),
        array(
            "naam" => "Miso-soep",
            "prijs" => 5.50,
            "vega" => "Ja",
            "foto" => "misosoup.jpg"
        )
    ),
    "hoofdgerecht" => array(
        array(
            "naam" => "Sashimi mix",
            "prijs" => 18.00,
            "vega" => "Nee",
            "foto" => "sashimimix.jpg"
        ),
        array(
            "naam" => "California roll",
            "prijs" => 12.00,
            "vega" => "Nee",
            "foto" => "californiaroll.jpg"
        ),
        array(
            "naam" => "Vegetarische sushi mix",
            "prijs" => 14.00,
            "vega" => "Ja",
            "foto" => "vegetarischesushimix.png"
        )
    ),
    "nagerecht" => array(
        array(
            "naam" => "Groene thee ijs",
            "prijs" => 5.50,
            "vega" => "Ja",
            "foto" => "GroeneTheeIjs.jpg"
        ),
        array(
            "naam" => "Mochi",
            "prijs" => 6.00,
            "vega" => "Ja",
            "foto" => "mochi-ijs.jpg"
        ),
        array(
            "naam" => "Dorayaki",
            "prijs" => 4.50,
            "vega" => "Nee",
            "foto" => "dorayaki.avif"
        )
    )
);

foreach ($gerechten["hoofdgerecht"] as $gerecht) {
    echo '<article class="gerecht">';
    echo "<h2>" . $gerecht["naam"] . "</h2>";
    echo "<p>Prijs: $" . $gerecht["prijs"] . "</p>";
    echo "<p>Vega: " . $gerecht["vega"] . "</p>";
    echo '<img src="img/' . $gerecht["foto"] . '" alt="' . $gerecht["naam"] . '">';
    echo "</article>";
}
?>

    </section>
  </main>
  <footer>
    <?php include 'footer.php'; ?>
  </footer>
</body>
</html>
