<x-app-layout>
    <x-slot:header>
        <div class="col">
            <div class="mb-1">
                <ol class="breadcrumb" aria-label="breadcrumbs">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="#">dossiers</a></li>
                </ol>
            </div>
            <h2 class="page-title">
                <span class="text-truncate">Liste des dossiers</span>
            </h2>
        </div>
        <div class="col-auto">
            <div class="btn-list">
                <x-button-modal />
            </div>
        </div>
    </x-slot:header>
    <div>
        <div class="card-header">
            <div class="my-2 d-flex">
                <div class="m-2 d-inline-block">
                    <div class="input-icon">
                        <span class="input-icon-addon">
                            <!-- Download SVG icon from http://tabler-icons.io/i/search -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                                <path d="M21 21l-6 -6" />
                            </svg>
                        </span>
                        <input class="form-control" type="text" wire:model.live.debounce='search' id="search-input"
                            placeholder="Recherche…" aria-label="Search in website">
                    </div>

                </div>
            </div>
            <div wire:ignore>
                <select class="form-select select-tags" wire:model.live='date' value="">
                    <option selected disabled value="">Trier par date</option>
                    <option value="desc">le plus recent</option>
                    <option value="asc">le plus ancien</option>
                </select>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                {{-- <div wire:loading>
                    <div class="text-center justify-content-center">
                        <h1 class="text-center">Loading<span class="animated-dots"></span></h1>
                    </div>
                </div> --}}
                @forelse ($rows as $row)
                <div class="col-md-3">
                    <a wire:navigate class="nav-link" style="display: initial;"
                        href="{{ route('dossier.show', ['dossier' => $row]) }}">
                        <div class="card text-center mb-2 shadow">
                            <div class="card-body file">
                                <div class="rounded my-4">
                                    <span style="
                            font-size: 44PX;
                            background-color: #f8f9fa;
                            border-radius: 55px;
                            padding: 12px;" class="ti ti-folder-filled text-blue"></span>
                                </div>
                            </div> <!-- .card-body -->
                            <div class="card-footer bg-transparent border-0 fname">
                                <strong>Nom: {{ $row->patient->prenom }} {{ $row->patient->nom }}</strong> <br>
                                <strong>ID: {{ $row->patient->reference }}</strong> <br>
                                <strong>Date de creation {{ $row->created_at }}</strong>
                            </div> <!-- .card-footer -->
                        </div> <!-- .card -->
                    </a>
                </div>
                @empty
                <h1 class="my-5 text-center">Aucun dossier</h1>
                @endforelse
                {{ $rows->links() }}
            </div>
        </div>

    </div>
    <x-modal title="nouvelle dossier patient">
        <x-form route="{{ route('dossier.store') }}">
            <x-input type="text" name="poids" place="le poids du patient" />
            <x-input type="text" name="taille" place="la taille du patient" />
            <x-input type="text" name="tension" place="tension du patient" />
            <x-input type="text" name="frequence" place="tension du patient" />
            <x-input type="text" name="allergie" label="allergie faculatatif" :required="false"
                place="allergie du patient" />
            <x-input type="text" name="temperature" place="temperature du patient" />
            <x-input type="text" name="tuteur" place="le nom du patient" />
            <x-select name="patient_id" label="patient">
                @foreach ($patient as $row)
                <option value="{{ $row->id }}">{{ $row->reference }} {{ $row->prenom }} {{ $row->nom }}</option>
                @endforeach
            </x-select>
            <x-textarea place="observation ou commentaire sur le patient" name="observation" :required='false'
                label="observation ou commentaire Facultatif" />

        </x-form>
    </x-modal>
</x-app-layout>