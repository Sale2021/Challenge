<x-app-layout>
    <x-slot:header>
        <div class="col">
            <div class="mb-1">
                <ol class="breadcrumb" aria-label="breadcrumbs">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="#">structure</a></li>
                </ol>
            </div>
            <h2 class="page-title">
                <span class="text-truncate">Liste des structures</span>
            </h2>
        </div>
    </x-slot:header>

    <x-table :rows="$rows" url="structure">
        <thead>
            <tr>
                <th>ID</th>
                <th>type</th>
                <th>Nom</th>
                <th>quartier</th>
                <th>contact</th>
                <th>assurance</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($rows as $row)
            <tr>

                <td>{{ $row->id }}</td>
                <td>{{ $row->type }}</td>
                <td>{{ $row->nom }}</td>
                <td>{{ $row->quartier->nom }}</td>
                <td>{{ $row->contact }}</td>
                <td>{{ $row->assurance }}</td>

                <td>{{ $row->created_at }}</td>
                <td>
                    <x-button-edit :row="$row" href="{{ route('structure.edit', ['structure' => $row]) }}" />
                    <x-button-delete :row="$row" url="{{ url('structure/'.$row->id) }}" />
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
    <x-modal title="nouvelle structure">
        <x-form route="{{ route('structure.store') }}">
            <x-input type="text" name="nom" place="le nom de la structure" />
            <x-input type="text" name="contact" place="le contact de la structure" />
            <x-input type="text" name="horaire" place="horaire de la structure" />
            <x-input type="text" name="horaire" place="horaire de la structure" />
            <x-input type="text" name="assurance" place="assurance de la structure" />
        </x-form>
    </x-modal>
</x-app-layout>