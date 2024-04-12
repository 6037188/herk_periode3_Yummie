
<?php
// Ontvang de ingevulde gegevens van het formulier
$voornaam = $_POST['voornaam'];
$tussenvoegsel = $_POST['tussenvoegsel'];
$achternaam = $_POST['achternaam'];
$telefoonnummer = $_POST['telefoonnummer'];
$email = $_POST['email'];
$aantal_personen = $_POST['aantal_personen'];
$datum = $_POST['datum'];
$tijd = $_POST['tijd'];

// Stel het e-mailadres in waar je de reserveringsgegevens naartoe wilt sturen
$ontvanger_email = "test12082003coding@gmail.com";

// Stel het onderwerp van de e-mail in
$onderwerp = "Nieuwe reservering";

// Stel de boodschap van de e-mail in
$boodschap = "Nieuwe reservering ontvangen:\n\n";
$boodschap .= "Voornaam: $voornaam\n";
$boodschap .= "Tussenvoegsel: $tussenvoegsel\n";
$boodschap .= "Achternaam: $achternaam\n";
$boodschap .= "Telefoonnummer: $telefoonnummer\n";
$boodschap .= "E-mailadres: $email\n";
$boodschap .= "Aantal personen: $aantal_personen\n";
$boodschap .= "Datum: $datum\n";
$boodschap .= "Tijd: $tijd\n";

// Verzend de e-mail
     
$to_email = 'test12082003coding@gmail.com';
$subject = 'Testing PHP Mail';
$message = 'This mail is sent using the PHP mail function';
$headers = 'From: noreply @ company . com';
mail($to_email,$subject,$message,$headers, $boodschap);

// Doorverwijzen naar de bedanktpagina
header("Location: bedankt.html");
exit;
?>
