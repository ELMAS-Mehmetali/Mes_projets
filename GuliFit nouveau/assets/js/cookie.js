document.addEventListener('DOMContentLoaded', () => {
    const banner = document.getElementById('cookie-banner');
    const acceptButton = document.getElementById('accept-cookies');
    const declineButton = document.getElementById('decline-cookies');
    const changeSettingsButton = document.getElementById('change-cookie-settings');

    // Affiche ou masque le bandeau au chargement, selon la valeur stockée
    const cookieChoice = localStorage.getItem('cookies-accepted');
    if (cookieChoice === 'true' || cookieChoice === 'false') {
        banner.style.display = 'none';
    }

    // Accepter les cookies
    acceptButton.addEventListener('click', () => {
        localStorage.setItem('cookies-accepted', 'true');
        banner.style.display = 'none';
    });

    // Refuser les cookies
    declineButton.addEventListener('click', () => {
        localStorage.setItem('cookies-accepted', 'false');
        banner.style.display = 'none';
    });

    // Permet à l'utilisateur de revenir sur sa décision
    if (changeSettingsButton) {
        changeSettingsButton.addEventListener('click', () => {
            // On supprime le choix précédent et on réaffiche le bandeau
            localStorage.removeItem('cookies-accepted');
            banner.style.display = 'flex';
        });
    }
});
