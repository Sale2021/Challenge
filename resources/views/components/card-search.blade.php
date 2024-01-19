@props(['city'])
<div {{ $attributes->merge(['class' => 'container-fluid']) }} >
    <div {{ $attributes->merge(['class' => 'row py-5']) }} >
        <div {{ $attributes->merge(['class' => 'col-md-10']) }} >
            <div {{ $attributes->merge(['class' => 'row']) }} >
                <div {{ $attributes->merge(['class' => 'col-md-2 mb-3']) }} >
                    <div {{ $attributes->merge(['class' => 'justify-content-center text-center']) }} >
                        <ul {{ $attributes->merge(['class' => 'nav nav-pills']) }} >
                            <li {{ $attributes->merge(['class' => 'nav-item me-2']) }} >
                                <a {{ $attributes->merge(['class' => 'btn btn-outline-primary active']) }}
                                    data-bs-toggle="pill" href="#box"><i {{ $attributes->merge(['class' => 'bi
                                        bi-ui-checks-grid']) }} ></i></a>
                            </li>
                            <li {{ $attributes->merge(['class' => 'nav-item']) }} >

                                <a {{ $attributes->merge(['class' => 'btn btn-outline-primary']) }}
                                    data-bs-toggle="pill" href="#map-view"><i {{ $attributes->merge(['class' => 'bi
                                        bi-geo-alt-fill']) }} ></i> </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div {{ $attributes->merge(['class' => 'col-md-4 mb-3']) }} >
                    <input {{ $attributes->merge(['class' => 'py-2 form-control']) }} {{ $attributes->merge(['type' =>
                    'text']) }} wire:model.debounce.500ms='search'
                    {{ $attributes->merge(['placeholder' => 'recherche...']) }}>
                </div>

                <div {{ $attributes->merge(['class' => 'col-md-4 mb-3']) }} >
                    <div wire:ignore>
                        <select id='quartier' {{ $attributes->merge(['class' => 'form-select']) }} >
                            <option selected disabled>-- choisir quartier --</option>
                            <option>Tout</option>
                            @foreach ($city as $row)
                            <option value='{{ $row->id }}'>{{ $row->nom }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>