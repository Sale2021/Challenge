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
                <span class="text-truncate">Liste des medecin</span>
            </h2>
        </div>
    </x-slot:header>

    <x-table :rows="$rows" url="docteur">
        <thead>
            <tr>
                <th>ID</th>
                <th>preNom</th>
                <th>Nom</th>
                <th>contact</th>
                <th>specialite</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($rows as $row)
            <tr>

                <td>{{ $row->id }}</td>
                <td>{{ $row->prenom }}</td>
                <td>{{ $row->nom }}</td>
                <td>{{ $row->contact }}</td>
                <td>{{ $row->specialite }}</td>
                <td>{{ $row->created_at }}</td>
                <td>
                    <x-button-edit href="{{ route('docteur.edit', ['docteur' => $row]) }}" />
                    <x-button-delete url="{{ url('docteur/'.$row->id) }}" />
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
        <x-form route="{{ route('docteur.store') }}">
            <x-input type="text" name="prenom" place="le prenom du medecin" />
            <x-input type="text" name="nom" place="le nom du medecin" />
            <x-input type="text" name="contact" place="le contact du medecin" />
            <x-input type="text" name="specialite" place="la specialite du medecin" />
        </x-form>
    </x-modal>
</x-app-layout>