<div id="mapid"></div>

<script>
    // Reserved
    var locations = [
        <?php

        foreach ($data['peta'] as $peta) :
        ?>["<?= $peta['nama_pemilik']; ?>", <?= $peta['lat']; ?>, <?= $peta['lon']; ?>],
        <?php
        endforeach;
        ?>
    ];

    var mapCenter = [-7.983078, 112.635681];
    var map = L.map('mapid', {
        center: mapCenter,
        zoom: 10
    });
    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1Ijoicml6a2l0cmlzbmEiLCJhIjoiY2s5aW94N2dtMDR4MTNnbXNldXByenRueSJ9.w1vduTOwMrdBSO7zJsSF4w', {
        maxZoom: 18,
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
            '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
            'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        id: 'mapbox/streets-v11',
        tileSize: 512,
        zoomOffset: -1
    }).addTo(map);
    var marker;

    for (var i = 0; i < locations.length; i++) {
        marker = new L.marker([locations[i][1], locations[i][2]])
            .bindPopup(locations[i][0])
            .addTo(map);
    }

    //untuk memberikan pin sesuai dengan klik mouse

    // function updateMarker(lat, lng) {
    //     marker
    //         .setLatLng([lat, lng])
    //         .bindPopup("Your location :  " + marker.getLatLng().toString())
    //         .openPopup();
    //     return false;
    // };

    // map.on('click', function(e) {
    //     $('#latInput').val(e.latlng.lat);
    //     $('#lngInput').val(e.latlng.lng);
    //     updateMarker(e.latlng.lat, e.latlng.lng);
    // });


    // var updateMarkerByInputs = function() {
    //     return updateMarker($('#latInput').val(), $('#lngInput').val());
    // }
    // $('#latInput').on('input', updateMarkerByInputs);
    // $('#lngInput').on('input', updateMarkerByInputs);
</script>