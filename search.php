<?php
    if(!isset($_GET['search']) || empty($_GET['search'])) {
        header('Location: index.php');
        exit;
    }

    $search_term = $_GET['search'];

    // Récupération des cocktails correspondant à la recherche
    $url_api = "https://www.thecocktaildb.com/api/json/v1/1/search.php?s=$search_term";
    $json = file_get_contents($url_api);
    $cocktails = json_decode($json, true);

    $cocktails = $cocktails['drinks'] ?? [];

    // Si il n'y a qu'un seul cocktail, on redirige vers la page du cocktail
    if(sizeof($cocktails) == 1){
        $cocktail = $cocktails[0];
        header("Location: cocktail-details.php?id=$cocktail[idDrink]");
        die();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Search any cocktail • Cocktail Explorer</title>
    
    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/ff241dcdf7.js" crossorigin="anonymous"></script>
   
    <!-- Style -->
    <link rel="stylesheet" href="style.css">

    <!-- Script -->
    <script src="scripts/global.js"></script>

    <!-- Favicon -->
    <link rel="icon" href="assets/logo.png" type="image/png">
</head>
<body>
    <header>
        <nav class="navbar">
            <a href="index.php">Cocktail Explorer</a>
            <form action="search.php" class="search-bar">
                <input type="text" name="search" placeholder="Search a cocktail" required list="search-datalist" autocomplete="FALSE">
                <button type="submit" title="Submit">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
                <datalist id="search-datalist">

                </datalist>
            </form>
            <a href="favorites.php">
                <i class="fa-solid fa-heart"></i>
                Favorites
            </a>
        </nav>
    </header>

    <main>
        <h1>Results for <span><?= $search_term ?></span></h1>

        <?php if($cocktails == null): ?>
            <p>No results found.</p>
        <?php endif; ?>

        <section class="cards-container">
            <?php foreach($cocktails as $cocktail): ?>
                <a class="card-preview" href="cocktail-details.php?id=<?= $cocktail['idDrink'] ?>">
                    <img class="card-img" src="<?= $cocktail['strDrinkThumb'] ?>" alt="<?= $cocktail['strDrink'] ?>">
                    <h2 class="card-title"><?= $cocktail['strDrink'] ?></h2>
                </a>
            <?php endforeach; ?>
        </section>
    </main>

    <footer>
        <p>© 2023 Nathan Jourdain • Concours #4 "Utilisation d'une API REST dans une création web"</p>
    </footer>
</body>
</html>