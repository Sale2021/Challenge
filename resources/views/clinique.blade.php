@extends('layouts.app')
@section('content')
<div class="container-fluid page-header py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5 mt-4">
        <h1 class="display-2 text-white mb-3 animated slideInDown">Liste des cliiniques</h1>
    </div>
</div>
<x-card-search :city="$quartier" />
<div class="tab-content">
    <x-map :rows="$rows" type='clinique' />

    <div id="box" class="p-0 tab-pane fade show active">

        <div class="container-fluid">

            <div class="row">
                @foreach ($rows as $row)
                <x-card :row="$row" type="Clinique" icon="fa-clinic-medical" />
                @endforeach
                {{ $rows->links() }}
            </div>
        </div>
    </div>
</div>
<script>
    function getUserLocationAndNavigate(destination) {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(
                function(position) {
                    const userLatitude = position.coords.latitude;
                    const userLongitude = position.coords.longitude;

                    const linkUrl = `https://www.google.com/maps/dir/${userLatitude},${userLongitude}/${destination}`;
                    window.open(linkUrl, '_blank');
                }
                , function(error) {
                    console.error(error.message);
                }
            );
        } else {
            console.error('La géolocalisation n\'est pas prise en charge par ce navigateur.');
        }
    }

</script>
@endsection