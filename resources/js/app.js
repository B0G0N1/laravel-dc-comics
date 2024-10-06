import './bootstrap';
import '~resources/scss/app.scss';
import '~icons/bootstrap-icons.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
]);

const deleteButton = document.getElementById('delete-comic');

deleteButton.addEventListener('click', (e) => {
    e.preventDefault();

    const modal = document.getElementById('deleteComicModal');
    
    const bootstrapModal = new bootstrap.Modal(modal);
    
    bootstrapModal.show();

    const comicTitle = deleteButton.getAttribute('data-comictitle');

    const modalText = modal.querySelector('#modal-text');
    modalText.innerText = `Sei sicuro/a di voler cancellare il fumetto "${comicTitle}"?`;

    const confirmDelete = document.getElementById('confirm-delete');
    confirmDelete.addEventListener('click', function() {
        deleteButton.parentElement.submit();
    });
});