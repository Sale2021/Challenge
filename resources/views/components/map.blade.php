@props(['rows', 'type' => ''])
<div id="map-view" class="p-0 tab-pane fade show">
    <div class="p-2 container-xxl">
        <div class="row">
            <div class="col-md-12">
                <h2>Map</h2>
                @if ($rows)
                <div wire:ignore>
                    <div class="mb-3 rounded">
                        <div style="height: 600px;" id="map"></div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", () => {

        // map config
        var mymap = L.map('map').setView([12.641651,-8.0192691], 13);
var greenIcon = L.icon({
    iconUrl: '/assets/img/LocDispo.png',
    iconSize: [25, 41],

});


L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>'
}).addTo(mymap);
@foreach ($rows as $row)
var popup = L.popup({
closeOnClick: true
}).setContent(
'<h6>{{ $row->type }} {{ $row->nom }} a {{ $row->quartier->nom }}</h6>'
);
var marker = L.marker([{{ $row->map }}], {icon: greenIcon}).addTo(mymap).bindPopup(popup);
L.tooltip({
    permanent: true
}).setContent();
marker.bindTooltip("{{ $type }} {{ $row->nom }}").openTooltip();

@endforeach

var mapTab = document.getElementById('map-view');
    var observer1 = new MutationObserver(function(){
        if(mapTab.style.display != 'none'){
        mymap.invalidateSize();
        }
    });
  observer1.observe(mapTab, {attributes: true});

});
</script>