<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?= $data['judul']; ?></title>
    <link rel="icon" href="<?= BASEURL; ?>/img/favicon.png">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin="" />
    <style>
        /* Modify the background color */

        .navbar-custom {
            background-color: white;
        }

        /* Modify brand and text color */
        .navbar-link {
            text-decoration: none;
        }

        .navbar-custom .navbar-brand,
        .navbar-custom .navbar-nav .nav-link {

            color: grey;
        }

        body {
            padding-top: 60px;
        }

        #wrapper-peta{
            width: 100%;
            height: 100%;
        }
        #mapid {
            height: 700px;
        }

        #mapdetail {
            height: 100%;
        }
        #maptambah {
            height: 100%;
        }

        .th-orange {
            background-color: #FF6F00;
            color: white;
        }

        #fixedbutton {
            position: fixed;
            bottom: 30px;
            right: 50px;
            width: 80px;
        }

        .header-detail {
            background-color: #FF6F00;
            color: white;
        }

        .h-500 {
            height: 500px;
        }

        #table-detail {
            margin-top: 20px;
            width: 100%;
        }

        #table-detail td{
            padding: 15px;
        }

        .bolded{
            font-weight: bold;
        }
    </style>

    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==" crossorigin=""></script>

</head>

<body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-custom shadow">
        <div class="container">
            <a class="navbar-brand" href="<?= BASEURL; ?>"><img src="<?= BASEURL; ?>/img/icon.png" width="180" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" style="text-decoration: none;" href="<?= BASEURL; ?>">HOME<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASEURL; ?>/peta">DAFTAR PETA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASEURL; ?>/about">TENTANG</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>