@props(['row', 'type' => '', 'icon' => ''])

@if ($row)
<div {{ $attributes->merge(['class' => 'col-md-4 mb-3']) }}>
    <div {{ $attributes->merge(['class' => 'card shadow-lg border-primary rounded']) }}>
        <div {{ $attributes->merge(['class' => 'card-body']) }}>
            <h5 {{ $attributes->merge(['class' => 'card-title']) }}><i class="fas {{ $icon }} text-primary"></i> {{
                $type }} {{ $row->nom }}</h5>
            <div {{ $attributes->merge(['class' => 'card-text fw-bold']) }}>
                <p><i {{ $attributes->merge(['class' => 'fas fa-map-marker-alt text-primary']) }}></i> Quartier: {{
                    $row->quartier->nom }}</p>
                <p><i {{ $attributes->merge(['class' => 'fas fa-phone-alt text-primary']) }}></i> Contact: +223 {{
                    $row->contact }}</p>
                <p><i {{ $attributes->merge(['class' => 'fas fa-user-shield text-primary']) }}></i> Assurance: {{
                    $row->assurance }}</p>
                <p><i {{ $attributes->merge(['class' => 'fas fa-clock text-primary']) }}></i> Horaire: {{ $row->horaire
                    }}</p>
            </div>

            <p {{ $attributes->merge(['class' => 'text-end']) }}>
                <a href="#" onclick="getUserLocationAndNavigate('{{ $row->map }}')"
                    class="btn btn-sm btn-primary">Allez<i class="fas fa-location-arrow"></i></a>
            </p>
        </div>
    </div>
</div>


@endif