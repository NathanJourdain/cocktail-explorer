<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>My favorites • Cocktail Explorer</title>

    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/ff241dcdf7.js" crossorigin="anonymous"></script>

    <!-- Style -->
    <link rel="stylesheet" href="style.css">

    <!-- Script -->
    <script src="scripts/favorites.js"></script>
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
            <a href="favorites.php" aria-current="page">
                <i class="fa-solid fa-heart"></i>
                Favorites
            </a>
        </nav>
    </header>

    <main>
        <h1>Your <span>favorites</span></h1>

        <section class="cards-container">
            <!-- Favorites Cocktail from localstorage -->
            <p class="no-favorites">You don't have any favorites yet.</p>
        </section>
    </main>

    <footer>
        <p>© 2023 Nathan Jourdain • Concours #4 "Utilisation d'une API REST dans une création web"</p>
    </footer>
</body>
</html>