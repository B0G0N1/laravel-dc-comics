// Importa i file di bootstrap necessari per l'inizializzazione dei componenti JS
import './bootstrap'; 
import '~resources/scss/app.scss';  // Importa il file SCSS principale dell'app
import '~icons/bootstrap-icons.scss';  // Importa le icone di Bootstrap
import * as bootstrap from 'bootstrap';  // Importa tutte le funzionalità di bootstrap

// Abilita il caricamento automatico di immagini dalla cartella "img"
import.meta.glob([
    '../img/**'
]);

// Recupera il bottone per l'eliminazione del fumetto tramite l'ID
const deleteButton = document.getElementById('delete-comic');

// Aggiunge un evento 'click' al bottone per mostrare il modal di conferma
deleteButton.addEventListener('click', (e) => {
    e.preventDefault();  // Evita che il bottone attivi immediatamente l'azione di submit

    // Recupera il modal di conferma eliminazione tramite l'ID
    const modal = document.getElementById('deleteComicModal');
    
    // Inizializza il modal usando il plugin Modal di Bootstrap
    const bootstrapModal = new bootstrap.Modal(modal);
    
    // Mostra il modal
    bootstrapModal.show();

    // Recupera il titolo del fumetto dall'attributo 'data-comictitle' del bottone
    const comicTitle = deleteButton.getAttribute('data-comictitle');

    // Trova l'elemento all'interno del modal dove mostrare il testo di conferma
    const modalText = modal.querySelector('#modal-text');
    
    // Aggiorna il testo del modal per mostrare il nome del fumetto
    modalText.innerText = `Sei sicuro/a di voler cancellare il fumetto "${comicTitle}"?`;

    // Recupera il bottone di conferma all'interno del modal
    const confirmDelete = document.getElementById('confirm-delete');
    
    // Aggiunge un evento 'click' al bottone di conferma eliminazione
    confirmDelete.addEventListener('click', function() {
        // Esegue il submit del form associato al bottone di eliminazione
        deleteButton.parentElement.submit();
    });
});
