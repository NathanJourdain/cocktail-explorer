<?php

$cocktails_list = [];

// Récupération de 3 cocktails aléatoires
for ($i = 0; $i < 3; $i++) {
    $url_api = "https://www.thecocktaildb.com/api/json/v1/1/random.php";
    $json = file_get_contents($url_api);
    $cocktails = json_decode($json, true);

    $cocktail = $cocktails['drinks'][0];
    $cocktails_list[] = $cocktail;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cocktail Explorer • Discover new flavor combinations</title>

    <!-- Balise meta -->
    <meta name="description" content="Welcome to Cocktail Explorer, the ultimate online resource for cocktail and beverage enthusiasts. Our website offers a multitude of recipes, tips, and inspiration to help you explore new flavor combinations.">

    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/ff241dcdf7.js" crossorigin="anonymous"></script>

    <!-- Style -->
    <link rel="stylesheet" href="style.css">

    <!-- Script -->
    <script src="scripts/global.js"></script>
    <script src="scripts/animation-logo.js"></script>

    <!-- GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js" integrity="sha512-f8mwTB+Bs8a5c46DEm7HQLcJuHMBaH/UFlcgyetMqqkvTcYg4g5VXsYR71b3qC82lZytjNYvBj2pf0VekA9/FQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Favicon -->
    <link rel="icon" href="assets/logo.png" type="image/png">
</head>

<body>
    <header class="home-header">
        <nav class="navbar">
            <a href="index.php" aria-current="page">Cocktail Explorer</a>
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

        <h1>Cocktail Explorer • Discover new flavor combinations</h1>
        <h2>Explore a variety of cocktail recipes for all tastes</h2>
    </header>

    <main class="home-page">
        <section class="description">
            <h2>What is Cocktail Explorer?</h2>
            <p>Cocktail Explorer is the ultimate online resource for cocktail and beverage enthusiasts. Our website offers a multitude of recipes, tips, and inspiration to help you explore new flavor combinations.</p>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 547.67 660.33">
                <style>
                    .cls-1 {
                        fill: #d6eced;
                    }
                    .cls-2 {
                        fill: #4f9a34;
                    }
                    .cls-3 {
                        fill: #8dc262;
                        opacity: 0.37;
                    }
                    .cls-13,
                    .cls-14,
                    .cls-15,
                    .cls-4 {
                        fill: #fff;
                    }
                    .cls-5 {
                        fill: #f6a229;
                    }
                    .cls-6 {
                        fill: #ffd840;
                    }
                    .cls-7 {
                        fill: #322f38;
                    }
                    .cls-8 {
                        opacity: 0.75;
                    }
                    .cls-9 {
                        fill: #e94855;
                    }
                    .cls-10 {
                        fill: #0ab09f;
                    }
                    .cls-11 {
                        fill: #fdcb5b;
                    }
                    .cls-12 {
                        opacity: 0.77;
                    }
                    .cls-13 {
                        opacity: 0.34;
                    }
                    .cls-14 {
                        opacity: 0.41;
                    }
                    .cls-15,
                    .cls-16 {
                        opacity: 0.55;
                    }
                    .cls-16 {
                        fill: #b5dee0;
                    }
                    .cls-17 {
                        fill: #c2e3e4;
                    }
                    .cls-18 {
                        fill: #debea6;
                    }
                    .cls-19,
                    .cls-20 {
                        fill: #71b04e;
                    }
                    .cls-20 {
                        opacity: 0.31;
                    }
                    .cls-21 {
                        fill: #f28b0d;
                    }
                </style>
                <!-- Verre tumbler -->
                <path class="cls-1" d="M336.49,128.84l180.35,24c1.95.26,3.12,2.87,2.43,5.45l-88.2,426.45c-.54,2-2,3.35-3.58,3.15l-114-15.17c-1.54-.2-2.66-1.89-2.63-4l21.9-435.27C332.74,130.77,334.54,128.58,336.49,128.84Z" />
                <!-- Feuille menthe droite -->
                <g id="mint_right">
                    <path class="cls-2" d="M357.87,179.26l7.71-34.07a127.12,127.12,0,0,1,58.27-80.65l16.42-9.85-2.64,19a127.16,127.16,0,0,1-51.42,85.18Z" />
                    <path class="cls-3" d="M440.27,54.69l-1.17.7L357.93,179l-.06.23,28.34-20.42a127.16,127.16,0,0,0,51.42-85.18Z" />
                </g>
                <!-- Feuille menthe gauche -->
                <g id="mint_left">
                    <path class="cls-2" d="M399.58,197.54l-24.44-20.69c-24.1-20.4-38.55-49.23-39.67-79.12l-.62-16.67,14.34,10.27c25.73,18.42,42.67,46.08,46.5,75.94Z" />
                    <path class="cls-3" d="M334.85,81.06l0,1.18,64.52,115.15.17.15-3.89-30.27c-3.83-29.86-20.77-57.52-46.5-75.94Z" />
                </g>
                <path class="cls-4" d="M343.47,130l166.34,22.12c1.81.24,2.87,2.67,2.24,5.08L431.31,545.87c-2.2,9.57-7.12,11.76-12.42,11.06L329.37,545c-4.36-.58-10.22-2.88-9.13-12.79l19.74-398C340,131.76,341.67,129.72,343.47,130Z" />
                <!-- Citron -->
                <g id="lemon">
                    <path class="cls-5" d="M492.81,69.35a62.57,62.57,0,1,1-73.32,101.42Z" />
                    <path class="cls-6" d="M489.15,74.42c26.14,18.9,32.55,54.65,14.33,79.86S449.3,184.6,423.16,165.7Z" />
                    <path class="cls-5" d="M486.2,78.5c23.81,17.21,29.65,49.77,13.06,72.72s-49.35,27.62-73.15,10.41Z" />
                    <path class="cls-6" d="M499.19,153.1c-3.91-2.33-7.71-4.82-11.46-7.37s-7.45-5.17-11.13-7.83-7.29-5.38-10.86-8.18-7.12-5.63-10.54-8.63c3.91,2.33,7.7,4.82,11.45,7.37s7.45,5.17,11.13,7.83,7.29,5.38,10.87,8.18S495.76,150.1,499.19,153.1Z" />
                    <path class="cls-6" d="M461.77,172.81c-1-4.2-1.76-8.42-2.48-12.66s-1.34-8.48-1.93-12.73-1.08-8.52-1.49-12.8-.78-8.56-.94-12.87c1,4.2,1.77,8.43,2.49,12.67s1.34,8.48,1.92,12.73,1.08,8.52,1.49,12.8S461.61,168.5,461.77,172.81Z" />
                    <path class="cls-6" d="M508.79,109.56c-4.32,1.33-8.69,2.48-13.07,3.55s-8.77,2.06-13.18,3-8.82,1.8-13.27,2.58-8.89,1.51-13.38,2c4.32-1.34,8.68-2.48,13.06-3.56s8.78-2.06,13.18-3,8.83-1.81,13.27-2.58S504.3,110.08,508.79,109.56Z" />
                    <path class="cls-6" d="M419.74,170.74q8.63-13,17.56-25.7c5.93-8.51,12-16.94,18-25.37s12.18-16.79,18.37-25.11S486.13,78,492.51,69.78q-8.62,13-17.56,25.69t-18,25.37q-9.12,12.6-18.37,25.11T419.74,170.74Z" />
                </g>
                <!-- Paille -->
                <g id="straw">
                    <path class="cls-7" d="M382.72,30l54-28.61,0,.06A11.4,11.4,0,0,1,441.56.05a21,21,0,0,1,15.88,5.29,26,26,0,0,1,7.63,12.6,27.48,27.48,0,0,1,1.08,9.63h0l-9.29,258.51-11.38-.41,9.25-257.42c-.43-6.59-2.56-9.93-4.63-12.29a8.73,8.73,0,0,0-9.05-2.2L388.82,41.48Z" />
                </g>
                <!-- Liquide verre tumbler -->
                <g class="cls-8">
                    <path class="cls-9" d="M342.46,129.06l167.43,22.26c1.82.25,2.9,2.68,2.26,5.09l-81,389.41c-2.21,9.59-7.16,11.78-12.5,11.07l-90.1-12c-4.39-.58-10.29-2.88-9.2-12.81L339,133.36C339,130.87,340.65,128.82,342.46,129.06Z" />
                    <path class="cls-10" d="M329.9,321.5,319.54,531.93c-1.09,9.93,4.82,12.23,9.2,12.82l90.11,12c5.33.71,10.28-1.48,12.49-11.07l42.65-205Z" />
                    <path class="cls-11" d="M509.89,151.32,342.46,129.06c-1.81-.24-3.48,1.81-3.51,4.3l-2.75,55.95,164.55,21.88,11.4-54.78C512.79,154,511.71,151.57,509.89,151.32Z" />
                </g>
                <!-- Glacons -->
                <g>
                    <g class="cls-12" id="ice_1">
                        <path class="cls-13" d="M422.73,186.86l-45.06-12.21a10.72,10.72,0,0,0-13.16,7.54L350.8,232.73a10.73,10.73,0,0,0,7.55,13.16l45.06,12.22a10.74,10.74,0,0,0,13.16-7.55L430.27,200A10.73,10.73,0,0,0,422.73,186.86Z" />
                        <path class="cls-14" d="M402.55,257.87,396,256.09c2.51-9.88,5.39-19.69,6.8-29.78,1.56-11.19,1.2-22.95-3.41-33.27a37,37,0,0,0-14-16.32l36.56,9.91A11.62,11.62,0,0,1,430,200.88L416.8,249.7A11.62,11.62,0,0,1,402.55,257.87Z" />
                    </g>
                    <g class="cls-12" id="ice_2">
                        <rect class="cls-13" x="381.66" y="288.16" width="76.78" height="73.68" rx="10.73" transform="translate(-98.15 441.34) rotate(-50.38)" />
                        <path class="cls-14" d="M425.83,280l5.68,4.7c-6.62,8.29-13.58,16.32-19.22,25.31-6.25,10-10.86,21.34-10.71,33.28a40.16,40.16,0,0,0,6.83,22l-31.54-26.11a12.32,12.32,0,0,1-2-17.32l33.54-40.52A12.33,12.33,0,0,1,425.83,280Z" />
                    </g>
                    <g class="cls-12" id="ice_3">
                        <rect class="cls-13" x="342.74" y="389.05" width="75.92" height="82.24" rx="10.73" transform="translate(-73.97 79.09) rotate(-10.82)" />
                        <path class="cls-14" d="M348.41,394.48l7.46-1.43c2.32,11.12,4.22,22.35,7.73,33.15,3.9,12,10,23.57,19.65,31.65a41.34,41.34,0,0,0,22,9.49l-41.44,7.92A12.94,12.94,0,0,1,348.7,465l-10.58-55.36A12.94,12.94,0,0,1,348.41,394.48Z" />
                    </g>
                </g>
                <!-- Verre cocktail -->
                <g>
                    <path class="cls-15" d="M234.83,372.92A47.92,47.92,0,0,0,262.62,351l114-196.34a5.45,5.45,0,0,0-5.35-8.15L32.56,185.92a5.45,5.45,0,0,0-3.34,9.15L182.93,358.24a47.84,47.84,0,0,0,12.53,9.54l3,1.62a48,48,0,0,0,18.28,5.37c7.38,48.54,13.74,110.11,16.66,140a26.89,26.89,0,0,1-8.8,22.64L179,578.54a1.4,1.4,0,0,0,1.1,2.44L315.77,565.2a1.41,1.41,0,0,0,.53-2.62l-51.74-29.15a26.94,26.94,0,0,1-13.44-19.53C246.89,485.21,238.49,424.64,234.83,372.92Z" />
                    <path class="cls-16" d="M234.83,372.92A47.92,47.92,0,0,0,262.62,351l114-196.34a5.45,5.45,0,0,0-5.35-8.15L32.56,185.92a5.45,5.45,0,0,0-3.34,9.15L182.93,358.24a47.84,47.84,0,0,0,12.53,9.54l3,1.62a48,48,0,0,0,18.28,5.37c7.38,48.54,13.74,110.11,16.66,140a26.89,26.89,0,0,1-8.8,22.64L179,578.54a1.4,1.4,0,0,0,1.1,2.44L315.77,565.2a1.41,1.41,0,0,0,.53-2.62l-51.74-29.15a26.94,26.94,0,0,1-13.44-19.53C246.89,485.21,238.49,424.64,234.83,372.92Z" />
                </g>
                <!-- Olives -->
                <g id="olive">
                    <path class="cls-18" d="M46.24,42.36c5.21,10.07,10.25,20.22,15.38,30.32l15.11,30.46c10.07,20.31,19.92,40.71,29.77,61.12s19.58,40.88,29.15,61.43L150,256.51c4.69,10.32,9.46,20.59,14.07,30.95-5.22-10.06-10.26-20.21-15.39-30.32l-15.11-30.45c-10.06-20.31-19.92-40.72-29.77-61.13s-19.57-40.88-29.14-61.42L60.31,73.32C55.62,63,50.84,52.72,46.24,42.36Z" />
                    <ellipse class="cls-7" cx="116.87" cy="183.42" rx="32.81" ry="33.22" transform="translate(-20.36 14.69) rotate(-6.62)" />
                    <path class="cls-19" d="M109.79,117.74a28.65,28.65,0,1,1-29.66-28A28.75,28.75,0,0,1,109.79,117.74Z" />
                </g>
                <!-- Liquide verre cocktail -->
                <g>
                    <path class="cls-20" d="M35,185.77l332.8-38.71-110,192.39a44.75,44.75,0,0,1-9.66,11.72h0a44,44,0,0,1-49.55,5.4L195,354.65a39.4,39.4,0,0,1-10.28-7.93Z" />
                    <path class="cls-20" d="M86.13,240.7l98.62,106c.49.53,1,1,1.54,1.53L257.48,340c.1-.18.22-.34.32-.52l72.74-127.17Z" />
                    <path class="cls-19" d="M137.63,295.79l47.12,50.93A39.4,39.4,0,0,0,195,354.65l3.56,1.92a44,44,0,0,0,49.55-5.4,44.75,44.75,0,0,0,9.66-11.72l36-62.2Z" />
                </g>
                <!-- Lettres "Cocktail explorer" -->
                <g>
                    <path class="cls-21" d="M30.28,633.7a13.09,13.09,0,0,0-3.76-.45,10.44,10.44,0,0,0-6.93,2.24,8.86,8.86,0,0,0-3,7.22,8.13,8.13,0,0,0,2.38,6,8.52,8.52,0,0,0,6.25,2.36,10.24,10.24,0,0,0,5-1.31c-.17.73-.47,2.07-.9,4q-.37,1.93-.72,4A21.72,21.72,0,0,1,21,659,20.29,20.29,0,0,1,6.5,653.35Q0,647.16,0,637.25q0-9.16,5.6-14.82,6-6,16.5-6a32.66,32.66,0,0,1,7.33.58Z" />
                    <path class="cls-21" d="M68.34,636.53q0,9.4-4.85,15.91-5.1,6.79-13,6.8a15.73,15.73,0,0,1-13.24-6.85q-4.77-6.45-4.77-15.86,0-10,5.19-15.78a16.53,16.53,0,0,1,12.82-5.38,16.33,16.33,0,0,1,12.69,5.41Q68.35,626.53,68.34,636.53Zm-12.82,4.69q0-7.41-5-7.41t-4.88,7.46a12.41,12.41,0,0,0,1.28,5.57q1.44,2.91,3.54,2.91t3.63-3A11.65,11.65,0,0,0,55.52,641.22Z" />
                    <path class="cls-21" d="M100.48,633.7a13,13,0,0,0-3.75-.45,10.45,10.45,0,0,0-6.94,2.24,8.89,8.89,0,0,0-3,7.22,8.14,8.14,0,0,0,2.39,6,8.51,8.51,0,0,0,6.25,2.36,10.24,10.24,0,0,0,5-1.31c-.18.73-.48,2.07-.91,4q-.37,1.93-.72,4A21.72,21.72,0,0,1,91.15,659a20.27,20.27,0,0,1-14.44-5.67q-6.51-6.2-6.5-16.1,0-9.16,5.59-14.82,6-6,16.5-6a32.54,32.54,0,0,1,7.33.58Z" />
                    <path class="cls-21" d="M141.56,619.07q-1.47,2.71-6,11.46-2.48,4.83-6.82,12.88.36.58,4.31,4.93,2.32,2.48,6.59,6.31l-5.84,2.51q-2.27,1-6.37,3c-.68-.82-2.06-2.73-4.16-5.73q-1.76-2.67-3.38-5.68h-.11l-.27,9.17H104.77l-.71-21.3q-.3-7-1.26-19.64h18.55l-1,18h.19q1.13-3.14,3.6-10.37,1-3.13,2.61-8.63l7.54,1.65C136.71,618.08,139.14,618.59,141.56,619.07Z" />
                    <path class="cls-21" d="M175.19,616.94l-.77,16.76c-.69-.1-1.8-.24-3.33-.4-.94,0-2.47-.1-4.59-.16q-.15,1.58-.56,7.6-.28,5.84-1,17.14h-12.9q-.21-5.39-.8-16.93c-.17-2.66-.36-5.27-.55-7.81l-4.22.16-3.81.4L142,616.94Z" />
                    <path class="cls-21" d="M209.36,657.88H194.78l-1-3.55c-.41.16-1.43.71-3.07,1.63a29.82,29.82,0,0,0-3.49,2.69l-1.52-3.22c-.3-.64-.74-1.54-1.31-2.7L183,657.88h-7.73q1.69-6.58,5.27-21.72,2.19-10.14,3.65-19.22h16q.75,4.18,4.08,19.48Q206.12,644.42,209.36,657.88Zm-16.82-8.74c-.3-.95-.83-2.47-1.6-4.59q-.69-1.75-2.1-4.85-.61,1.54-1.92,5.06c-.48,1.36-1,3.19-1.71,5.52.54,0,1.75-.11,3.63-.32A26.08,26.08,0,0,0,192.54,649.14Z" />
                    <path class="cls-21" d="M228.85,616.94l-1,21.77q-.3,7-.7,19.17h-15l-1.81-40.94Z" />
                    <path class="cls-21" d="M258.7,649.8c-.18.71-.51,2.05-1,4-.25,1.15-.46,2.5-.64,4H233q-.13-6.27-.67-20.63-.34-7.37-1.25-20.31h18.5L248,650.89a77.07,77.07,0,0,0,7.76-.56A24.07,24.07,0,0,0,258.7,649.8Z" />
                    <path class="cls-21" d="M298.89,616.94l-1.14,16.87c-.66-.11-2.08-.29-4.27-.56-1.49-.14-3.13-.23-4.9-.27l-.4,5.09c1.95.06,5.14,0,9.57-.13-.2.66-.51,1.89-.94,3.68-.25,1.08-.47,2.34-.66,3.76a35.62,35.62,0,0,0-3.87-.48c-1-.06-2.38-.07-4.26-.06l-.27,5.95c1.33,0,3.78-.13,7.36-.35a24.82,24.82,0,0,0,3.33-.64c-.14.55-.47,1.88-1,4q-.37,1.63-.9,4.11H272.69l-.77-20.9q-.21-7.17-1-20Z" />
                    <path class="cls-21" d="M339.88,616.94q-1.06,2-5.41,9.78Q332,631,327.06,639l9.71,18.9h-12.4l-5.06-8.34q-3.31,5.06-5.25,8.34h-10.9q1.41-2.13,6.21-10c1.24-2.13,2.64-4.57,4.21-7.3q-1.77-2.88-5.68-9.68-4.26-7.65-7.54-13.91h18.33c.24.74.73,2.2,1.5,4.37.46,1.24,1,2.58,1.73,4,.44-.76,1.15-2.07,2.13-3.91q.85-1.74,2-4.48Z" />
                    <path class="cls-21" d="M375.79,633.09q0,7.57-4.84,12.11t-12.83,4.55l-.32,8.13H343.11L342.34,638q-.34-7.68-1.1-21.08a67.23,67.23,0,0,1,12.18-.83q9.79,0,15.68,3.92Q375.79,624.49,375.79,633.09Zm-11.06,4.48q0-4.16-4.94-4.16a9.64,9.64,0,0,0-1.19.08l-.27,9.33C362.59,642.68,364.73,640.93,364.73,637.57Z" />
                    <path class="cls-21" d="M405.21,649.8c-.18.71-.5,2.05-1,4a39.45,39.45,0,0,0-.64,4H379.46q-.12-6.27-.66-20.63-.35-7.37-1.25-20.31H396l-1.52,33.95a76.88,76.88,0,0,0,7.76-.56A23.74,23.74,0,0,0,405.21,649.8Z" />
                    <path class="cls-21" d="M442.21,636.53q0,9.4-4.85,15.91-5.1,6.79-13,6.8a15.73,15.73,0,0,1-13.24-6.85q-4.79-6.45-4.78-15.86,0-10,5.2-15.78a16.52,16.52,0,0,1,12.82-5.38A16.33,16.33,0,0,1,437,620.78Q442.2,626.53,442.21,636.53Zm-12.82,4.69q0-7.41-5-7.41t-4.88,7.46a12.28,12.28,0,0,0,1.28,5.57q1.44,2.91,3.54,2.91t3.63-3A11.65,11.65,0,0,0,429.39,641.22Z" />
                    <path class="cls-21" d="M480,632.26a14.42,14.42,0,0,1-2.75,8.69,13.57,13.57,0,0,1-6.07,4.75q.77,1.2,3.81,5a61.62,61.62,0,0,0,4.63,4.64q-1.25.45-5.51,2.3-3,1.35-5.63,2.66c-.51-.64-1.66-2.29-3.43-5q-1.23-2-3.6-6.82h-.06l-.26,9.33h-15q-.28-5.82-.82-19.17-.24-7.86-1.1-21.77a127.23,127.23,0,0,1,13.38-.77Q480,616.17,480,632.26ZM467.93,638a3.75,3.75,0,0,0-2.14-3.62,7.76,7.76,0,0,0-3.94-.7l-.16,9.12a7.83,7.83,0,0,0,3.95-1A4.12,4.12,0,0,0,467.93,638Z" />
                    <path class="cls-21" d="M509.59,616.94l-1.15,16.87c-.66-.11-2.08-.29-4.26-.56-1.5-.14-3.13-.23-4.91-.27l-.4,5.09c2,.06,5.15,0,9.57-.13-.2.66-.51,1.89-.93,3.68-.25,1.08-.47,2.34-.67,3.76a34.91,34.91,0,0,0-3.86-.48c-1-.06-2.38-.07-4.27-.06l-.26,5.95c1.33,0,3.78-.13,7.35-.35a24.25,24.25,0,0,0,3.33-.64c-.14.55-.47,1.88-1,4-.25,1.09-.55,2.46-.91,4.11H483.39l-.78-20.9q-.21-7.17-1-20Z" />
                    <path class="cls-21" d="M547.67,632.26a14.41,14.41,0,0,1-2.74,8.69,13.6,13.6,0,0,1-6.08,4.75q.78,1.2,3.81,5a62.13,62.13,0,0,0,4.64,4.64q-1.24.45-5.52,2.3-3,1.35-5.62,2.66c-.52-.64-1.66-2.29-3.44-5-.82-1.35-2-3.62-3.6-6.82h0l-.27,9.33h-15q-.3-5.82-.83-19.17-.24-7.86-1.09-21.77a127.23,127.23,0,0,1,13.38-.77Q547.67,616.17,547.67,632.26ZM535.57,638a3.76,3.76,0,0,0-2.13-3.62,7.78,7.78,0,0,0-3.94-.7l-.16,9.12a7.79,7.79,0,0,0,3.94-1A4.1,4.1,0,0,0,535.57,638Z" />
                </g>
            </svg>

        </section>

        <section>
            <h2>Discover new cocktails</h2>
            <section class="cards-container">
                <?php foreach ($cocktails_list as $cocktail) : ?>
                    <a class="card-preview" href="cocktail-details.php?id=<?= $cocktail['idDrink'] ?>">
                        <img class="card-img" src="<?= $cocktail['strDrinkThumb'] ?>" alt="<?= $cocktail['strDrink'] ?>">
                        <h2 class="card-title"><?= $cocktail['strDrink'] ?></h2>
                    </a>
                <?php endforeach; ?>
            </section>
        </section>
    </main>

    <footer>
        <p>© 2023 Nathan Jourdain • Concours #4 "Utilisation d'une API REST dans une création web"</p>
    </footer>
</body>

</html>