<?php
    if(!isset($_GET['id']) || empty($_GET['id'])) {
        header('Location: index.php');
        exit;
    }

    $cocktail_id = $_GET['id'];

    // Récupération du cocktail depuis l'ID
    $url_api = "https://www.thecocktaildb.com/api/json/v1/1/lookup.php?i=$cocktail_id";
    $json = file_get_contents($url_api);
    $cocktails = json_decode($json, true);

    // Si le cocktail n'existe pas, on redirige vers l'accueil
    if(sizeof($cocktails['drinks']) == 0){
        header('Location: index.php');
        exit;
    }

    $cocktail = $cocktails['drinks'][0];


    // Fonction qui retourne le nombre d'ingrédients
    function getNumberOfIngredients($cocktail): int {
        $numberOfIngredients = 0;

        $i = 1;
        while($i <= 15) {
            if(!empty($cocktail['strIngredient' . $i])) {
                $numberOfIngredients++;
            }
            $i++;
        }

        return $numberOfIngredients;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title><?= $cocktail['strDrink'] ?> • Cocktail Explorer</title>

    <!-- Balises meta -->
    <meta name="og:title" content="<?= $cocktail['strDrink'] ?> • Cocktail Explorer">
    <meta name="og:description" content="Recipe of <?= $cocktail['strDrink'] ?>.">
    <meta name="og:image" content="<?= $cocktail['strDrinkThumb'] ?>">
    <meta name="theme-color" content="#F48C06">

    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/ff241dcdf7.js" crossorigin="anonymous"></script>

    <!-- Style -->
    <link rel="stylesheet" href="style.css">

    <!-- Script -->
    <script src="scripts/detail-page.js"></script>
    <script src="scripts/global.js"></script>

    <!-- Favicon -->
    <link rel="icon" href="assets/logo.png" type="image/png">
    
    <!-- Recipe snippet -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org/",
      "@type": "Recipe",
      "name": "<?= $cocktail['strDrink'] ?>",
      "image": [
        "<?= $cocktail['strDrinkThumb'] ?>"
       ],
      "author": {
        "@type": "Person",
        "name": "The Cocktail DB"
      },
      "datePublished": "<?= $cocktail['dateModified'] ?>",
      "keywords": "<?= $cocktail['strTags'] ?>",
      "recipeCategory": "Cocktail",
      "recipeIngredient": [
            <?php for($i = 1; $i <= getNumberOfIngredients($cocktail); $i++): ?>
                "<?= $cocktail['strMeasure' . $i] . $cocktail['strIngredient' . $i] ?>"
                <?= $i < getNumberOfIngredients($cocktail) ? "," : "" ?>
            <?php endfor; ?>
        ],
      "recipeInstructions": "<?= $cocktail['strInstructions'] ?>"
    }
    </script>
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
        <article class="detail-page">
            <img src="<?= $cocktail['strDrinkThumb'] ?>" alt="Image of <?= $cocktail['strDrink'] ?>" class="detail-image">
            <section class="detail-content">
                <div class="detail-title">
                    <h1><?= $cocktail['strDrink'] ?></h1>
                    <button title="Add to favorites" type="button" class="add-to-fav" data-id="<?= $cocktail['idDrink'] ?>">
                        <i class="fa-regular fa-heart"></i>
                    </button>
                </div>
                <p><?= $cocktail['strCategory'] ?> • <?= $cocktail['strAlcoholic'] ?></p>
                
                <section>
                    <h2>Ingredients</h2>
                    <ul class="ingredients-list">
                        <?php for($i = 1; $i <= getNumberOfIngredients($cocktail); $i++): ?>
                            <li class="ingredient">
                                <img src="https://www.thecocktaildb.com/images/ingredients/<?= $cocktail['strIngredient'.$i] ?>-Small.png" alt="Image of <?= $cocktail['strIngredient'.$i] ?>">
                                <span><?= $cocktail['strIngredient'.$i] ?></span>
                                <span><?= $cocktail['strMeasure'.$i] ?></span>
                            </li>
                        <?php endfor; ?>
                    </ul>
                </section>
                
                <section>
                    <h2>Instructions</h2>
                    <ol class="instructions-list">
                        <?php
                        $instructions = explode(".", $cocktail['strInstructions']);
                        foreach($instructions as $line):
                            if(!empty($line))
                                echo "<li>$line</li>";
                        endforeach;
                        ?>
                    </ol>
                </section>
            </section>
        </article>
    </main>

    <footer>
        <p>© 2023 Nathan Jourdain • Concours #4 "Utilisation d'une API REST dans une création web"</p>
    </footer>
</body>
</html>