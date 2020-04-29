<!-- Hai <?php var_dump($data['peta']) ?> -->
<div class="container pt-5" >

    <div class="row">
        <div class="col-sm-5">
            <div class="card text-center h-500 ">
                <div class="card-header header-detail">
                    <strong> Lokasi</strong>    
                </div>
                <div class="card-body">
                    <div id="mapdetail"></div>
                </div>

            </div>
        </div>
        <div class="col-sm-7">
            <div class="card h-500 ">
                <div class="card-header header-detail" style="text-align: center;"> 
                    <strong> Detail </strong>
                </div>
                <div class="card-body">
                    <!-- <ul class="list-group list-group-flush">
                        <li class="list-group-item">Cras justo odio</li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Morbi leo risus</li>
                        <li class="list-group-item">Porta ac consectetur ac</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                    </ul> -->
                    <!-- <ul class="pt-3">
                        <li style="list-style-type: none;">asdas</li>
                    </ul> -->
                    <table id="table-detail">

                        <tbody>
                            <tr class="">
                                <td class="bolded">Nama Pemilik Alamat</td>
                                <td><?=$data['peta']['nama_pemilik'];?></td>
                            </tr>

                            <tr class="">
                                <td class="bolded">Alamat Lengkap</td>
                                <td><?=$data['peta']['alamat_lengkap'];?></td>
                            </tr>
                            <tr class="">
                                <td class="bolded">Kabupaten</td>
                                <td><?=$data['peta']['kota'];?></td>
                            </tr>
                            <tr class="">
                                <td class="bolded">Provinsi</td>
                                <td><?=$data['peta']['provinsi'];?></td>
                            </tr>
                            <tr class="">
                                <td class="bolded">Nomor HP</td>
                                <td><?=$data['peta']['nohp'];?></td>
                            </tr>
                            <tr class="">
                                <td class="bolded">Terakhir dikunjungi kurir</td>
                                <td><?= date('d M Y', strtotime($data['peta']['terakhir_dikunjungi']));?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</div>
<script>
    // Map Detail
    var mapCenter = [<?= $data['peta']['lat'];?>, <?= $data['peta']['lon'];?>];
    var map = L.map('mapdetail', {
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
</script>