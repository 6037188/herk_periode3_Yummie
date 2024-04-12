<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sushi webshop/restaurant">
    <meta name="author" content="N.Sloos">
    <meta name="keywords" content="Sushi Yummie, Yummie, Sushi, Japan">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <header>
        <?php
        include 'header.php';
        ?>
    </header>
    <main>
   
    <div class="review-container">
    <h2>Reviews</h2>

    <?php
    // Array met dummy reviewgegevens
    $reviews = [
        ["name" => "John Doe", "rating" => 4, "comment" => "Great food and service! Highly recommended."],
        ["name" => "Jane Smith", "rating" => 5, "comment" => "Best sushi in town! Will definitely come back."],
        ["name" => "Mike Johnson", "rating" => 3, "comment" => "Decent food, but a bit pricey for the portion sizes."]
    ];

    // Loop door de reviews en toon ze op de pagina
    foreach ($reviews as $review) {
        echo "<div class='review'>
                <div class='rating-box'>{$review['rating']}/5</div>
                <div class='content'>
                    <h3>{$review['name']}</h3>
                    <p>{$review['comment']}</p>
                </div>
              </div>";
    }
    ?>
</div>

<div class="form-container">
    <h2>Leave a Review</h2>
    <form action="" method="post">
        <label for="name">Your Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="rating">Rating (1-5):</label>
        <input type="text" id="rating" name="rating" required>

        <label for="comment">Your Review:</label>
        <textarea id="comment" name="comment" required></textarea>

        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
    // Verwerk het ingediende formulier
    if(isset($_POST['submit'])) {
        // Controleer of alle velden zijn ingevuld
        if(!empty($_POST['name']) && !empty($_POST['rating']) && !empty($_POST['comment'])) {
            // Haal de ingediende gegevens op
            $name = $_POST['name'];
            $rating = intval($_POST['rating']);
            $comment = $_POST['comment'];
            // Voeg de nieuwe review toe aan het begin van de array
            array_unshift($reviews, ["name" => $name, "rating" => $rating, "comment" => $comment]);
            // Toon de nieuwe review
            echo "<div class='review'>
                    <div class='rating-box'>{$rating}/5</div>
                    <div class='content'>
                        <h3>{$name}</h3>
                        <p>{$comment}</p>
                    </div>
                  </div>";
        } else {
            echo "<p class='error-message'>Please fill in all fields!</p>";
        }
    }
    ?>


</body>
</html>









    </main>
    <footer>
        <?php
        include 'footer.php';
        ?>
    </footer>
</body>

</html>