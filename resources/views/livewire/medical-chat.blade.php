<div>
    <form wire:submit="askQuestion">
        <div class="row">
            <div class="col">
                <input type="text" class="form-control" placeholder="Posez votre question" wire:model="question"
                    id="question">
            </div>
            <div class="col-auto">
                <button class="btn btn-primary" type="submit">Envoyer</button>
            </div>
        </div>
    </form>
    <div wire:loading>
        <div class="loader my-2"></div>
    </div>
    @if($answer)
    <div class="my-3">
        <strong>Réponse :</strong>
        <p>{{ $answer }}</p>
    </div>
    @endif
</div>