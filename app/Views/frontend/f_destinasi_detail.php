    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.html">RISING<span>Kubu Raya</span></a>
            <!-- <a class="navbar-brand" href="index.html">
                <img src="" alt="">
            </a> -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item "><a href="/" class="nav-link">Beranda</a></li>
                    <li class="nav-item active"><a href="<?= base_url('f_destinasi/') ?>" class="nav-link">Destinasi</a></li>
                    <li class="nav-item"><a href="about.html" class="nav-link">Artikel</a></li>
                    <li class="nav-item"><a href="<?= base_url('f_event/') ?>" class="nav-link">Event</a></li>

                    <li class="nav-item .dropdown-menu">
                        <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Link Terkait</a>
                        <!-- <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown
                        </a> -->
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>

                    <li class="nav-item"><a href="#" class="nav-link">About</a></li>
                    <li class="nav-item cta"><a href="#" class="nav-link">Peta Wisata</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url(<?= base_url('img/wisata/' .      $wisata['wisata_poster']); ?>);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <h1 class="mb-3 bread"><?= $wisata['wisata_name']; ?></h1>
            </div>
            </div>
        </div>
    </section>


    <div class="container-fluid">
        <div class="col-lg-12 mt-4 mb-5" style="display: inline-block;">
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h6 class="mb-0">
                            <b>
                                Informasi Destinasi
                            </b>
                        </h6>
                    </div>
                        <div class="card-body">
                            <table class="w-full">
                                <tbody>
                                    <tr>
                                        <td class="align-top py-2 pr-4 whitespace-no-wrap">Nama Tempat</td>
                                        <td class="align-top py-2 whitespace-no-wrap">
                                            <b><?= $wisata['wisata_name']; ?></b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-top py-2 pr-4 whitespace-no-wrap">Kategori</td>
                                        <td class="align-top py-2 whitespace-no-wrap"><?= $wisata['nama_kategori']; ?></td>
                                    </tr>

                                    <tr>
                                        <td class="align-top py-2 pr-4 whitespace-no-wrap">Alamat</td>
                                        <td class="align-top py-2 whitespace-no-wrap"><?= $wisata['wisata_address']; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="align-top py-2 pr-4 whitespace-no-wrap">Kontak</td>
                                        <td class="align-top py-2 whitespace-no-wrap"><?= $wisata['wisata_contact']; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="align-top py-2 pr-4 whitespace-no-wrap">Operasional</td>
                                        <td class="align-top py-2 whitespace-no-wrap"><?= $wisata['wisata_operational']; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="align-top py-2 pr-4 whitespace-no-wrap">Fasilitas</td>
                                        <td class="align-top py-2 whitespace-no-wrap">
                                            <?= $wisata['wisata_facility']; ?> <br>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="align-top py-2 pr-4 whitespace-no-wrap">Biaya</td>
                                        <td class="align-top py-2 whitespace-no-wrap">
                                            <?= $wisata['wisata_cost']; ?> <br>
                                        </td>
                                    </tr>
                                </tbody>

                            </table>
                        </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                            <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Deskripsi Destinasi</a>
                        </h2>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="collapse multi-collapse" id="multiCollapseExample1">
                                <div class="card card-body">
                                    <?= $wisata['wisata_desc']; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- LightBoxImage -->
                <div class="card">
                    <div class="row justify-content-center">
                        <div class="row p-4">
                                <div class="col-md-12">
                                    <h6 class="mb-4">
                                        <b>
                                            Galleri Destinasi Wisata <?= $wisata['wisata_name']; ?>
                                        </b>
                                    </h6>
                                </div>
                                <?php foreach ($gallery as $row) : ?>
                                    <div class="col-lg-2 col-md-4 col-xs-6 mb-2">
                                        <a href="/img/wisata/gallerywisata/<?= $row['gallery_file'] ?>" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                                            <img src="/img/wisata/gallerywisata/<?= $row['gallery_file'] ?>" class="img-fluid rounded">
                                        </a>
                                    </div>
                                <?php endforeach; ?>
                                </div>
                        </div>
                </div>

                <div class="card">
                        <div class="row justify-content-center" style="position:sticky;">
                            <div id="mapid" style="width: 100%; height: 300px;"></div>
                        </div>
                </div>

            </div>
        </div>

  
    </div>

    
    <script>
        var mymap = L.map('mapid').setView([<?= $wisata['wisata_lat'] ?>, <?= $wisata['wisata_lng'] ?>], 15);

        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
            id: 'mapbox/streets-v11',
        }).addTo(mymap);

        

        var myIcon = L.icon({
        iconUrl: '<?= base_url('../img/locIcon.png') ?>', 
        iconSize: [50, 50],
        // iconAnchor: [22, 94],
        // popupAnchor: [-3, -76],
        // shadowUrl: '../assets/assets_fe/images/loc.png',
        // shadowSize: [68, 95],
        // shadowAnchor: [22, 94]
        });

            L.marker([<?= $wisata['wisata_lat'] ?>, <?= $wisata['wisata_lng'] ?>], {icon:myIcon}).addTo(mymap).bindPopup("<b><?= $wisata['wisata_name'] ?><b><br/><br/>"+
        "<img src='<?= base_url('img/wisata/'.$wisata['wisata_poster']) ?>' width='200px' height='130px'><br/>");
    </script>