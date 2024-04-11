<div id="laravel-livewire-modals" tabindex="-1"
    data-bs-backdrop="static" data-bs-keyboard="true"
    wire:ignore.self class="modal fade">
        <div class="modal-dialog {{$size ?? "modal-lg"}}">
            @if($alias)
                @livewire($alias, $params, key($activeModal))
            @endif
        </div>
</div>
