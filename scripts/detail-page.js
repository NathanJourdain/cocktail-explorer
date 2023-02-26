addEventListener('DOMContentLoaded', function() {
  
    const btnAddToFav = document.querySelector('.add-to-fav');
    const btnAddToFavIcon = btnAddToFav.querySelector('i');

    // Ajout ou suppresion d'un cocktail dans les favoris
    btnAddToFav.addEventListener('click', function() {
        const id = this.dataset.id;
        const favorites = getFavorites();
        if(favorites.includes(id)) {
            btnAddToFavIcon.classList.add('fa-regular');
            btnAddToFavIcon.classList.remove('fa-solid');
            favorites.splice(favorites.indexOf(id), 1);

            addNotification('Cocktail supprimé des favoris !');
        } else {
            btnAddToFavIcon.classList.add('fa-solid');
            btnAddToFavIcon.classList.remove('fa-regular');
            favorites.push(id);

            animBtnFavorite();
            addNotification('Cocktail ajouté aux favoris !');
        }
        localStorage.setItem('favorites', JSON.stringify(favorites));
    });


    // Affichage de l'icone en fonction de si le cocktail est dans les favoris ou non au chargement de la page
    const favorites = getFavorites();
    if(favorites.includes(btnAddToFav.dataset.id)) {
        btnAddToFavIcon.classList.add('fa-solid');
        btnAddToFavIcon.classList.remove('fa-regular');
    }

    // Récupère les favoris dans le localStorage
    function getFavorites() {
        return JSON.parse(localStorage.getItem('favorites')) || [];
    }

    // Animation du bouton ajout aux favoris
    function animBtnFavorite(){
        btnAddToFav.animate([
            { transform: 'translateY(0px)' },
            { transform: 'translateY(-10px)' },
            { transform: 'translateY(0px)' },

        ], {
            duration: 500,
            iterations: 1,
            easing: 'cubic-bezier(0.175, 0.885, 0.32, 1.275)'
        });
    }

    // Ajout d'une notification
    function addNotification(message) {
        const notification = document.createElement('p');
        notification.classList.add('notification');
        notification.innerHTML = message;
        document.body.appendChild(notification);

        setTimeout(() => {
            notification.classList.add('show');
        }, 100);

        setTimeout(() => {
            notification.classList.remove('show');
            setTimeout(() => {
                notification.remove();
            }, 500);
        }, 3000);
    }

});