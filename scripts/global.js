addEventListener('DOMContentLoaded', function(){

    const searchInput = document.querySelector('.search-bar input');
    const searchDatalist = document.querySelector('.search-bar datalist');

    // Recherche en temps réel des cocktail dans la barre de recherche
    searchInput?.addEventListener('keyup', function(e){
        const searchValue = e.target.value;
        if(searchValue.length > 2){
            searchCocktails(searchValue)
                .then(cocktails => {
                    searchDatalist.innerHTML = '';
                    for(const cocktail of cocktails){
                        const option = document.createElement('option');
                        option.value = cocktail;
                        searchDatalist.appendChild(option);
                    }
                });
        }
    });

    // Recherche les cocktails en fonction d'un nom
    async function searchCocktails(name){
        const response = await fetch(`https://www.thecocktaildb.com/api/json/v1/1/search.php?s=${name}`);
        const data = await response.json();
        return data.drinks?.map(cocktail => cocktail.strDrink) || [];
    }

})