/**
 * @author Elias De Hondt
 * @see https://eliasdh.com
 * @since 26/09/2023
 */

function updateComments() {
    const commentsList = document.getElementById("comments-list");
    fetch("/assets/php/comments.php") // Hiermee haal je de opmerkingen op van de server
        .then(response => response.text())
        .then(data => {
            commentsList.innerHTML = data; // Vervang de inhoud van het opmerkingenlijstelement
        });
}

// Roep de updateComments-functie onmiddellijk op om bestaande opmerkingen weer te geven
updateComments();

// Update de opmerkingen elke 5 seconden (pas dit interval aan indien nodig)
setInterval(updateComments, 5000);