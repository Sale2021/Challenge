<x-app-layout>
    <div class="row">
        <div class="col-8 mx-auto">
            <div class="card p-3">
                <x-form route="{{ route('quartier.update',$quartier) }}" type="update" url="{{ route('quartier') }}">
                    <x-input type="text" name="nom" :value="$quartier->nom" place="le nom du quartier" />
                </x-form>
            </div>
        </div>
    </div>
</x-app-layout>