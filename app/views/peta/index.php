<div class="container">
    <div class="row pt-4">
        <form action="<?= BASEURL; ?>/peta/cari" method="POST" class="form-inline mr-auto">
            <input class="form-control mr-sm-2" type="text" name="cari_peta" placeholder="Cari di dalam tabel" aria-label="Search">
            <button class="btn btn-unique btn-rounded btn-sm my-0" type="submit">Cari</button>
        </form>
    </div>
    <div class="row pt-4">
        <?php Flasher::flash();?>
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
                // var_dump($data);
                foreach ($data['peta'] as $peta) :
                ?>
                    <tr>
                        <td scope="row"><?= $no++; ?></td>
                        <td><?= $peta['nama_pemilik']; ?></td>
                        <td><?= $peta['alamat_lengkap']; ?></td>
                        <td><?= date('d M Y', strtotime($peta['terakhir_dikunjungi'])); ?></td>
                        <td>
                            <a href="<?= BASEURL; ?>/peta/detail/<?= $peta['id_peta']; ?>"><img src="<?= BASEURL; ?>/img/detail-btn.png" width="100" alt=""></a>
                            <a href="#" data-toggle="modal" data-id="<?= $peta['id_peta'];?>" class="tampilModalUbah" data-target="#modalTambah"><img src="<?= BASEURL; ?>/img/ubah-btn.png" width="100" alt=""></a>
                            <a href="<?= BASEURL; ?>/peta/hapus/<?= $peta['id_peta']; ?>" onclick="return confirm('Yakin ingin menghapus data?');"><img src="<?= BASEURL; ?>/img/delete-btn.png" width="100" alt=""></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>
    <!-- Button trigger modal -->
    <!-- <button type="button" style="background: url(<?= BASEURL; ?>/img/btn-add.png)" >
        
    </button> -->
    <a type="button" data-toggle="modal" data-target="#modalTambah" class="tampilModalTambah"><img src="<?= BASEURL; ?>/img/btn-add.png" id="fixedbutton"></a>
</div>
<!-- Modal -->
<div class="modal fade" id="modalTambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="judulModal">Tambah data peta</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="row">
                    <div class="col-sm-5">
                        <div class="card text-center h-500 ">
                            <div class="card-header header-detail">
                                <strong> Lokasi</strong>
                            </div>
                            <div class="card-body">
                                <div id="maptambah"></div>
                            </div>

                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="card h-500 ">
                            <div class="card-header header-detail" style="text-align: center;">
                                <strong> Detail </strong>
                            </div>
                            <div class="card-body">

                                <form action="<?= BASEURL; ?>/peta/tambah" method="post">
                                    <div class="container" style="margin-top: 20px;">
                                        <input type="hidden" class="form-control" name="id_peta" id="id_peta">
                                        <div class="form-group row">
                                            <label for="nama_pemilik" class="col-sm-4 col-form-label">Nama Pemilik Alamat</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="nama_pemilik" id="nama_pemilik">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="alamat_lengkap" class="col-sm-4 col-form-label">Alamat Lengkap</label>

                                            <div class="col-sm-8">
                                                <textarea class="form-control" id="alamat_lengkap" name="alamat_lengkap" rows="2"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="kota" class="col-sm-4 col-form-label">Kota</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="kota" name="kota">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="provinsi" class="col-sm-4 col-form-label">Provinsi</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="provinsi" id="provinsi">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="nohp" class="col-sm-4 col-form-label">Nomor HP</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="nohp" id="nohp">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="lat" class="col-sm-4 col-form-label">Lat</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="lat" id="lat">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="lon" class="col-sm-4 col-form-label">Lon</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="lon" id="lon">
                                            </div>
                                        </div>

                                    </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary " data-dismiss="modal">Batalkan</button>
                <button type="submit" class="btn btn-primary btn-tambahData">Tambah data</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    var locations = [
        
    ];

    var mapCenter = [-7.983078, 112.635681];
    var map = L.map('maptambah', {
        center: mapCenter,
        zoom: 10
    });
    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=YOUR_MAPBOX_TOKEN', {
        maxZoom: 18,
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
            '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
            'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        id: 'mapbox/streets-v11',
        tileSize: 512,
        zoomOffset: -1
    }).addTo(map);
    var marker = L.marker(mapCenter).addTo(map);

    for (var i = 0; i < locations.length; i++) {
        marker = new L.marker([locations[i][1], locations[i][2]])
            .bindPopup(locations[i][0])
            .addTo(map);
    }

    //untuk memberikan pin sesuai dengan klik mouse

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
        $('input[name=lat]').val(e.latlng.lat);
        $('input[name=lon]').val(e.latlng.lng);
    });


    var updateMarkerByInputs = function() {
        return updateMarker($('#latInput').val(), $('#lngInput').val());
    }
    $('#latInput').on('input', updateMarkerByInputs);
    $('#lngInput').on('input', updateMarkerByInputs);
</script>