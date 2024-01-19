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
                <span class="text-truncate">Liste des patients</span>
            </h2>
        </div>
    </x-slot:header>

    <x-table :rows="$rows" url="docteur">
        <thead>
            <tr>
                <th>ID</th>
                <th>Identifiant</th>
                <th>preNom</th>
                <th>Nom</th>
                <th>contact</th>
                <th>sexe</th>
                <th>naissance</th>
                <th>adresse</th>
                <th>sang</th>
                <th>Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($rows as $row)
            <tr>

                <td>{{ $row->id }}</td>
                <td>{{ $row->reference }}</td>
                <td>{{ $row->prenom }}</td>
                <td>{{ $row->nom }}</td>
                <td>{{ $row->contact }}</td>
                <td>{{ $row->sexe }}</td>
                <td>{{ $row->naissance }}</td>
                <td>{{ $row->adresse }}</td>
                <td>{{ $row->sang }}</td>
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
        <x-form route="{{ route('patient.store') }}">
            <x-input type="text" name="prenom" place="le prenom du patient" />
            <x-input type="text" name="nom" place="le nom du patient" />
            <x-input type="text" name="contact" place="le contact du patient" />
            <x-input type="text" name="adresse" place="adresse du patient" />
            <x-input type="text" name="adresse" place="adresse du patient" />
            <x-input type="date" name="naissance" />
            <x-select name="sexe" label="Sexe">
                <option value="Homme">Homme</option>
                <option value="Femme">Femme</option>
            </x-select>
            <x-select name="sang" label="Groupe sangins">
                <option value="AB">AB</option>
                <option value="B+">B+</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
            </x-select>
            <x-input type="email" name="email" :required="false" />
        </x-form>
    </x-modal>
</x-app-layout>