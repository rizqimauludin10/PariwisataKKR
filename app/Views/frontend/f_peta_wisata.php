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
                <li class="nav-item"><a href="/" class="nav-link">Beranda</a></li>
                <li class="nav-item"><a href="f_destinasi.rm" class="nav-link">Destinasi</a></li>
                <li class="nav-item"><a href="about.html" class="nav-link">Artikel</a></li>
                <li class="nav-item"><a href="" class="nav-link">Event</a></li>

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
                <li class="nav-item cta"><a href="f_peta_wisata.rm" class="nav-link">Peta Wisata</a></li>
            </ul>
        </div>
    </div>
</nav>

<section class="hero-wrap hero-wrap-2" style="background-image: url('../assets/assets_fe/images/bg_2.jpg'); height:400px;" data-stellar-background-ratio="0.5">
    <div class="overlay" style="height:400px;"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center" style="height:300px;">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <h3 class="mb-3 bread">Peta Wisata Kubu Raya</h3>
            </div>
        </div>
    </div>
</section>

<div class="container-fluid">
    <div class="col-lg-12 mt-4" style="display: inline-block;">
        <div class="card shadow mb-4" style="margin-top: 20px;">
            <div class="card-body py-4">
                <div class="row">
                    <div class="col-sm-12" style="position:sticky;">
                        <!-- <label for="mapsLabel">Peta Lokasi</label> -->
                        <div id="mapid"></div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<style>
    #mapid {
        width: 100%;
        height: 500px;
    }
</style>

<script>
 

 var mymap = L.map('mapid').setView([-0.126644, 109.403667], 10);

    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
        id: 'mapbox/streets-v11',
    }).addTo(mymap);

    var iconWisata = L.icon({
        iconUrl : '../assets/assets_fe/images/loc.png',
        iconSize : '[47,57]',
    });

    var myIcon = L.icon({
        iconUrl: '<?= base_url('../img/locIcon.png') ?>', 
        iconSize: [50, 50],
    // iconAnchor: [22, 94],
    // popupAnchor: [-3, -76],
    // shadowUrl: '../assets/assets_fe/images/loc.png',
    // shadowSize: [68, 95],
    // shadowAnchor: [22, 94]
});
    

    <?php foreach($f_peta_wisata as $wisata_fe) { ?>
        L.marker([<?= $wisata_fe['wisata_lat'] ?>, <?= $wisata_fe['wisata_lng'] ?>], {icon:myIcon}).addTo(mymap)
        .bindPopup("<b><?= $wisata_fe['wisata_name'] ?><b><br/><br/>"+
        "<img src='<?= base_url('img/wisata/'.$wisata_fe['wisata_poster']) ?>' width='200px' height='130px'><br/>");
    <?php } ?>
    
</script>