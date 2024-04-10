import {Modal} from 'bootstrap';

let modalsElement = document.getElementById('laravel-livewire-modals');

modalsElement.addEventListener('hidden.bs.modal', () => {
    Livewire.dispatch('resetModal');
});

Livewire.on('showBootstrapModal', () => {
    let modal = Modal.getOrCreateInstance(modalsElement);
    modal.show();
});

Livewire.on('hideModal', () => {
    let modal = Modal.getInstance(modalsElement);
    modal.hide();
    Livewire.dispatch('resetModal');
});
