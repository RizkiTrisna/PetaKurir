<div class="container">
    <div class="row pt-4">
        <form class="form-inline mr-auto">
            <input class="form-control mr-sm-2" type="text" placeholder="Cari di dalam tabel" aria-label="Search">
            <button class="btn btn-unique btn-rounded btn-sm my-0" type="submit">Cari</button>
        </form>
    </div>
    <div class="row pt-2">

        <table class="table table-striped">
            <thead>
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
                            <a href="#"><img src="<?= BASEURL; ?>/img/detail-btn.png" width="150" alt=""></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>
    <a href="#"><img src="<?= BASEURL;?>/img/btn-add.png" id="fixedbutton"></a>
</div>
