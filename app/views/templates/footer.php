<script>
    // var mymap = L.map('mapid').setView([51.505, -0.09], 13);

    // L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1Ijoicml6a2l0cmlzbmEiLCJhIjoiY2s5aW94N2dtMDR4MTNnbXNldXByenRueSJ9.w1vduTOwMrdBSO7zJsSF4w', {
    //     maxZoom: 18,
    //     attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
    //         '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
    //         'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    //     id: 'mapbox/streets-v11',
    //     tileSize: 512,
    //     zoomOffset: -1
    // }).addTo(mymap);

    // var lat, lng;

    // mymap.addEventListener('mousemove', function(ev) {
    //     lat = ev.latlng.lat;
    //     lng = ev.latlng.lng;
    // });

    // document.getElementById("mapid").addEventListener("contextmenu", function(event) {
    //     // Prevent the browser's context menu from appearing
    //     event.preventDefault();

    //     // Add marker
    //     // L.marker([lat, lng], ....).addTo(map);
    //     alert(lat + ' - ' + lng);

    //     return false; // To disable default popup.
    // });


    // var map = L.map('mapid').setView([51.505, -0.09], 13);
    // L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1Ijoicml6a2l0cmlzbmEiLCJhIjoiY2s5aW94N2dtMDR4MTNnbXNldXByenRueSJ9.w1vduTOwMrdBSO7zJsSF4w', {
    //     maxZoom: 18,
    //     attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
    //         '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
    //         'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    //     id: 'mapbox/streets-v11',
    //     tileSize: 512,
    //     zoomOffset: -1
    // }).addTo(map);
    // var marker = L.marker(mapCenter).addTo(map);

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
    var marker = L.marker(mapCenter).addTo(map);

    function updateMarker(lat, lng) {
        marker
            .setLatLng([lat, lng])
            .bindPopup("Your location :  " + marker.getLatLng().toString())
            .openPopup();
        return false;
    };

    map.on('click', function(e) {
        $('#latInput').val(e.latlng.lat);
        $('#lngInput').val(e.latlng.lng);
        updateMarker(e.latlng.lat, e.latlng.lng);
    });


    var updateMarkerByInputs = function() {
        return updateMarker($('#latInput').val(), $('#lngInput').val());
    }
    $('#latInput').on('input', updateMarkerByInputs);
    $('#lngInput').on('input', updateMarkerByInputs);
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="<?= BASEURL; ?>/js/bootstrap.js"></script>

<script>
    $(".navbar .container . .nav-link").on("click", function() {
        $(".nav").find(".active").removeClas("active");
        $(this).addClass("active");
    });
</script>
</body>

</html>