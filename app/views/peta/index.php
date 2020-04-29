<div class="container">
    <div class="row pt-4">
        <form class="form-inline mr-auto">
            <input class="form-control mr-sm-2" type="text" placeholder="Cari di dalam tabel" aria-label="Search">
            <button class="btn btn-unique btn-rounded btn-sm my-0" type="submit">Cari</button>
        </form>
    </div>
    <div class="row pt-2">

        <table class="table table-striped">
            <thead class="th-orange">
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama pemilik alamat</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Terakhir dikunjungi kurir</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($data['peta'] as $peta) :
                ?>
                    <tr>
                        <td scope="row"><?= $no++; ?></td>
                        <td><?= $peta['nama_pemilik']; ?></td>
                        <td><?= $peta['alamat_lengkap']; ?></td>
                        <td><?= $peta['terakhir_dikunjungi']; ?></td>
                        <td>
                            <a href="<?= BASEURL;?>/peta/detail/<?= $peta['id_peta'];?>"><img src="<?= BASEURL; ?>/img/detail-btn.png" width="150" alt=""></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>
    <a href=""><img src="<?= BASEURL;?>/img/btn-add.png" id="fixedbutton"></a>
</div>

<script>
    
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