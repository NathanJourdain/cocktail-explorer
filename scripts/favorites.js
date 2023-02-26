addEventListener('DOMContentLoaded', function() {

    const cardsContainer = document.querySelector('.cards-container');
    const favorites = getFavorites();

    // Supprime le message "Aucun favoris" si il y a des favoris
    if(favorites.length !== 0) {
        document.querySelector('.no-favorites').remove();
    }

    // Inverse l'ordre des favoris pour afficher les derniers ajouts en premier
    favorites.reverse();

    // Affiche les cocktails favoris
    favorites.forEach(cocktailId => {
        const url = `https://www.thecocktaildb.com/api/json/v1/1/lookup.php?i=${cocktailId}`;
        fetch(url)
            .then(response => response.json())
            .then(data => {
                const cocktail = data.drinks[0];
                const card = document.createElement('a');
                card.href = `cocktail-details.php?id=${cocktail.idDrink}`;
                card.classList.add('card-preview');
                card.innerHTML = `
                    <img src="${cocktail.strDrinkThumb}" alt="${cocktail.strDrink}" class="card-img">
                    <h2 class="card-title">${cocktail.strDrink}</h2>
                `;
                cardsContainer.appendChild(card);
            });
    })

    // Récupère les favoris dans le localStorage
    function getFavorites() {
        return JSON.parse(localStorage.getItem('favorites')) || [];
    }
});