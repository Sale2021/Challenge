<x-app-layout>
    <x-slot:header>
        <div class="col">
            <div class="mb-1">
                <ol class="breadcrumb" aria-label="breadcrumbs">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="#">departement</a></li>
                </ol>
            </div>
            <h2 class="page-title">
                <span class="text-truncate">Liste des departements</span>
            </h2>
        </div>
    </x-slot:header>

    <x-table :rows="$rows" url="departement">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($rows as $row)
            <tr>

                <td>{{ $row->id }}</td>
                <td>{{ $row->nom }}</td>
                <td>{{ $row->created_at }}</td>
                <td>
                    <x-button-edit href="{{ route('departement.edit', ['departement' => $row]) }}" />
                    <x-button-delete url="{{ url('departement/'.$row->id) }}" />
                </td>

            </tr>
            @empty
            <tr>
                <td colspan="4">
                    <h2 class="text-center">Aucun element</h2>
                </td>
            </tr>
            @endforelse
        </tbody>
    </x-table>
    <x-modal title="nouvelle departement">
        <x-form route="{{ route('departement.store') }}">
            <x-input type="text" name="nom" place="le nom du departement" />
        </x-form>
    </x-modal>
</x-app-layout>