@props(['row','url' => ''])

@if ($url)
<button type="button" {{ $attributes->merge(['class' => 'btn btn-danger btn-icon']) }}
    onclick="deleteConfirmation('{{ $url }}')"><i class="ti ti-trash"></i></button>
@endif