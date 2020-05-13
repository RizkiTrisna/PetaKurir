$(function(){
    $('.tampilModalTambah').on('click', function(){
        $('#judulModal').html('Tambah data peta');
        $('.btn-tambahData').html('Tambah data');
    });
    $('.tampilModalUbah').on('click', function(){
        $('#judulModal').html('Ubah data peta');
        $('.btn-tambahData').html('Ubah data');

        const id = $(this).data('id');
        $('.card-body form').attr('action', 'http://localhost/PetaKurir/public/peta/ubah');

        $.ajax({
            url: 'http://localhost/PetaKurir/public/peta/getUbah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data){
                
                $('#nama_pemilik').val(data.nama_pemilik);
                $('#alamat_lengkap').val(data.alamat_lengkap);
                $('#kota').val(data.kota);
                $('#provinsi').val(data.provinsi);
                $('#nohp').val(data.nohp);
                $('#lat').val(data.lat);
                $('#lon').val(data.lon);
                $('#id_peta').val(data.id_peta);

            }
        });
    });
});