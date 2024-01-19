@props(['header' => '', 'filter' => '', 'rows' => '', 'btn'=> false,'btn_filter'=> true, 'btn_export' => false, 'url' =>
'',
'create' =>
""])
<div class="col-12">
    <div class="row">
        <div class="col">
            <div class="card-header">
                {{ $header }}
            </div>
        </div>
        <div {{ $attributes->merge(['class' => 'col-auto mt-2']) }} >

            <x-button-modal />
            @if ($btn)
            {{ $btn }}
            @endif
            @if ($btn_export)
            <button type="button" class="btn btn-indigo dropdown-toggle mx-2" data-bs-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="ti ti-database-export"></i>
                Exporter
            </button>
            <div class="dropdown-menu">
                <button wire:click='export' class="dropdown-item">Excel</button>
            </div>
            @endif

        </div>
    </div>
    @if ($btn_filter)
    <div class="card my-3">
        <div class="card-body">
            <div {{ $attributes->merge(['class' => 'd-flex']) }} >
                <div {{ $attributes->merge(['class' => 'text-muted']) }} >
                    <div {{ $attributes->merge(['class' => 'ms-2 d-inline-block']) }} >
                        <div {{ $attributes->merge(['class' => 'input-icon']) }} >
                            <span {{ $attributes->merge(['class' => 'input-icon-addon']) }} >
                                <!-- Download SVG icon from http://tabler-icons.io/i/search -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                    viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                                    <path d="M21 21l-6 -6" />
                                </svg>
                            </span>
                            <input {{ $attributes->merge(['class' => 'form-control']) }} type="text" value=""
                            id="search-input" placeholder="Recherche…"
                            aria-label="Search in website">
                        </div>
                    </div>
                </div>
            </div>
            @empty(!$filter)
            <div {{ $attributes->merge(['class' => 'row row-cards mt-3']) }} >
                {{ $filter }}
            </div>
            <button wire:click='ResetFilter' {{ $attributes->merge(['class' => 'btn btn-danger mx-2']) }}
                type="button">
                <i class="ti ti-file-export"></i>
                Reset Filtres
            </button>
            @endempty
        </div>
    </div>
    @endif
    <div class="card">
        {{-- <div wire:loading>
            <div class="text-center justify-content-center">
                <h1 class="text-center">Loading<span class="animated-dots"></span></h1>
            </div>
        </div> --}}
        <div {{ $attributes->merge(['class' => 'table-responsive']) }}>
            <div wire:loading.remove>
                <table id="datatable" {{ $attributes->merge(['class' => 'table card-table table-vcenter text-nowrap
                    datatable']) }}>
                    {{ $slot }}
                    <h3 id="no-results" class="text-center " style="display:none;">Aucun resultat trouvé.</h3>
                </table>
            </div>
        </div>
        <div class="card-footer align-items-center">
            @if($rows)
            {{ $rows->links() }}
            @endif
        </div>
    </div>
</div>