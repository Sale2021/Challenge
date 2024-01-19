<x-app-layout>
    <x-slot:header>
        <div class="col">
            <div class="mb-1">
                <ol class="breadcrumb" aria-label="breadcrumbs">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="#">Agenda</a></li>
                </ol>
            </div>
            <h2 class="page-title">
                <span class="text-truncate">Liste des agandas</span>
            </h2>
        </div>
        <div class="col-auto">
            <div class="btn-list">
                <x-button-modal />
            </div>
        </div>
    </x-slot:header>

    <div id="calendar"></div>
    <x-modal title="nouveau évènement">
        <x-form route="{{ route('planning.store') }}">
            <input type="hidden" name="type" value="event">
            <x-select name="patient_id" label="patient">
                @foreach ($patient as $row)
                <option value="{{ $row->id }}">{{ $row->reference }} {{ $row->prenom }}</option>
                @endforeach
            </x-select>
            <x-select name="type" label="type de rdv">
                <option value="Consultations">Consultations</option>
                <option value="Urgences">Urgences</option>
                <option value="Examens">Examens</option>
                <option value="Suivi">Suivi</option>
                <option value="Rééducations">Rééducations</option>
            </x-select>
            <div class="col-md-6">
                <x-input type="datetime-local" name="debut" label="Debut de l'évènement" />
            </div>
            <div class="col-md-6">
                <x-input type="datetime-local" name="fin" label="Fin de l'évènement" />
            </div>
            <x-textarea place="Fait une description de l'évènement" name="description"
                label="description de l'évènement" />
        </x-form>
    </x-modal>
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.7/index.global.min.js'></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var calendarEl = document.getElementById('calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'timeGridWeek',
                timeZone: 'UTC',
                locale: 'fr',

                events: @json($events),
                buttonText:{
                today:    "Aujourd'hui",
                month:    'Mois',
                week:     'Semaine',
                day:      'Jour',
                list:     'liste'
            },

            });
            calendar.render();
        });
    </script>
</x-app-layout>