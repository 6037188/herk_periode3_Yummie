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

        <h2>Reserveringsformulier</h2>
        <form id="reserveringsFormulier" action="verwerk_reservering.php" method="post">
            <label for="voornaam">Voornaam:</label>
            <input type="text" id="voornaam" name="voornaam" required><br>

            <label for="tussenvoegsel">Tussenvoegsel:</label>
            <input type="text" id="tussenvoegsel" name="tussenvoegsel"><br>

            <label for="achternaam">Achternaam:</label>
            <input type="text" id="achternaam" name="achternaam" required><br>

            <label for="telefoonnummer">Telefoonnummer:</label>
            <input type="tel" id="telefoonnummer" name="telefoonnummer" required><br>

            <label for="email">Emailadres:</label>
            <input type="email" id="email" name="email" required><br>

            <label for="aantal_personen">Aantal personen:</label>
            <input type="number" id="aantal_personen" name="aantal_personen" min="1" required><br>

            <label for="datum">Datum:</label>
            <input type="date" id="datum" name="datum" required><br>

            <label for="tijd">Tijd:</label>
            <select id="tijd" name="tijd" required>
                <option value="12:00">12:00</option>
                <option value="13:00">13:00</option>
                <option value="14:00">14:00</option>
                <option value="15:00">15:00</option>
                <option value="16:00">16:00</option>
                <option value="17:00">17:00</option>
                <option value="18:00">18:00</option>
                <option value="19:00">19:00</option>
                <option value="20:00">20:00</option>
                <option value="21:00">21:00</option>
            </select>

            <p id="voorwaarden">Lees de voorwaarden voordat u op verzenden drukt:</p>
            <label for="voorwaarde">
                <input type="checkbox" id="voorwaarde" required>
                Ik verklaar dat ik de voorwaarden heb gelezen en ermee akkoord ga.
            </label><br><br>
            <a href="AVG.html" target="_blank">Bekijk hier de AVG-verklaring voor reserveringen.</a><br><br>
            <button type="submit">Verzenden</button>

        </form>
    </main>

    <footer>
        <?php
        include "footer.php";
        ?>
    </footer>

    <script>
        document.getElementById("reserveringsFormulier").addEventListener("submit", function (event) {
            event.preventDefault(); // Voorkom standaardgedrag van het formulier

            // Verzamel de ingevulde waarden
            var voornaam = document.getElementById("voornaam").value;
            var tussenvoegsel = document.getElementById("tussenvoegsel").value;
            var achternaam = document.getElementById("achternaam").value;
            var telefoonnummer = document.getElementById("telefoonnummer").value;
            var email = document.getElementById("email").value;
            var aantal_personen = document.getElementById("aantal_personen").value;
            var datum = document.getElementById("datum").value;

            // Bouw de querystring voor de URL
            var queryString = "?voornaam=" + encodeURIComponent(voornaam) +
                "&tussenvoegsel=" + encodeURIComponent(tussenvoegsel) +
                "&achternaam=" + encodeURIComponent(achternaam) +
                "&telefoonnummer=" + encodeURIComponent(telefoonnummer) +
                "&email=" + encodeURIComponent(email) +
                "&aantal_personen=" + encodeURIComponent(aantal_personen) +
                "&datum=" + encodeURIComponent(datum);

            // Doorsturen naar de bedanktpagina met de querystring
            window.location.href = "bedankt.html" + queryString;
        });
    </script>

    <script>
        function checkVoorwaarde(event) {
            var voorwaarde = document.getElementById("voorwaarde").checked;
            if (!voorwaarde) {
                event.preventDefault(); // Onderbreekt het standaardgedrag van de link
                alert("Je moet eerst de voorwaarden accepteren.");
            }
        }
    </script>
</body>



</html>