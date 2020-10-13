    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="/">
                <div class="centering-demo">
                    <img class="logo_dashboard" src="<?= base_url('../img/logomenanjak_new.png') ?>">
                    <img class="logo_dashboard" src="<?= base_url('../img/logorising_new.png') ?>">
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item "><a href="/" class="nav-link">Beranda</a></li>
                    <li class="nav-item"><a href="<?= base_url('f_destinasi/') ?>" class="nav-link">Destinasi</a></li>
                    <li class="nav-item"><a href="about.html" class="nav-link">Artikel</a></li>
                    <li class="nav-item active"><a href="<?= base_url('f_event/') ?>" class="nav-link">Event</a></li>
                    <li class="nav-item cta"><a href="#" class="nav-link">Peta Wisata</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="hero-wrap hero-wrap-2 " style="background-image: url(<?= base_url('img/event/'.$f_event['event_poster']); ?>); height:500px;" data-stellar-background-ratio="0.5">
        <div class="overlay" style="height:500px;"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end" style="height:450px;">
                <div class="col-md-9 ftco-animate pb-5">
                    <!-- Nama Event -->
                    <h3 class="bread" style="width: 300px;"><?= $f_event['event_name']; ?></h3>
                    <div class="w-41 text-blue-401 mb-2">	
                        <svg class="fill-current" viewBox="0 0 187 12" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="Page-1" stroke="none" stroke-width="1" fill-rule="evenodd">
                                <g id="10.1-Destination" transform="translate(-85.000000, -323.000000)" fill-rule="nonzero">
                                    <g id="wave-short" transform="translate(85.000000, 323.000000)">
                                        <path d="M179.28625,3.9 C176.581429,2.1 173.876607,0 168.166429,0 C162.756786,0 159.751429,2.1 157.347143,3.9 C155.243393,5.4 153.440179,6.6 149.533214,6.6 C145.62625,6.6 144.123571,5.4 141.719286,3.9 C139.315,2.1 136.610179,0 130.9,0 C125.490357,0 122.485,2.1 120.080714,3.9 C117.976964,5.4 116.17375,6.6 112.266786,6.6 C108.359821,6.6 106.857143,5.4 104.452857,3.9 C102.048571,2.1 99.34375,0 93.6335714,0 C88.2239286,0 85.2185714,2.1 82.8142857,3.9 C80.7105357,5.4 78.9073214,6.6 75.0003571,6.6 C71.0933929,6.6 69.5907143,5.4 67.1864286,3.9 C64.7821429,2.1 61.7767857,0 56.3671429,0 C50.9575,0 47.9521429,2.1 45.5478571,3.9 C43.4441071,5.4 41.6408929,6.6 37.7339286,6.6 C33.8269643,6.6 32.3242857,5.4 29.92,3.9 C27.5157143,2.1 24.5103571,0 19.1007143,0 C13.6910714,0 10.6857143,2.1 8.28142857,3.9 C5.87714286,5.4 4.07392857,6.6 0.4675,6.6 L0.4675,12 C5.87714286,12 8.8825,9.9 11.2867857,8.1 C13.3905357,6.6 15.19375,5.4 19.1007143,5.4 C23.0076786,5.4 24.5103571,6.6 26.9146429,8.1 C29.3189286,9.9 32.3242857,12 37.7339286,12 C43.1435714,12 46.1489286,9.9 48.5532143,8.1 C50.6569643,6.6 52.4601786,5.4 56.3671429,5.4 C60.2741071,5.4 61.7767857,6.6 64.1810714,8.1 C66.5853571,9.9 69.5907143,12 75.0003571,12 C80.41,12 83.4153571,9.9 85.8196429,8.1 C87.9233929,6.6 89.7266071,5.4 93.6335714,5.4 C97.5405357,5.4 99.0432143,6.6 101.4475,8.1 C103.851786,9.9 106.857143,12 112.266786,12 C117.676429,12 120.681786,9.9 123.086071,8.1 C125.189821,6.6 126.993036,5.4 130.9,5.4 C134.806964,5.4 136.309643,6.6 138.713929,8.1 C141.118214,9.9 144.123571,12 149.533214,12 C154.942857,12 157.948214,9.9 160.3525,8.1 C162.45625,6.6 164.259464,5.4 168.166429,5.4 C172.073393,5.4 173.576071,6.6 175.980357,8.1 C178.685179,9.9 181.39,12 186.799643,12 L186.799643,6.6 C183.193214,6.6 181.39,5.4 179.28625,3.9 Z" id="Path"></path>
                                    </g>
                                </g>
                            </g>
                        </svg>
	                </div>
                    <h5 class="mb-3 breadd" style="width: 500px; font-size: 12px;"><?= $f_event['event_address']; ?></h5>

                    <div class="seeMaps">
                        <a href="http://www.google.com/maps/place/<?=$f_event['event_lat']?>,<?=$f_event['event_lng']?>" target="_blank"> 
                        <span class="icon icon-map-marker">
                        </span>
                        <b> Lihat Peta </b></a> 
                    </div>

                </div>
            </div>
        </div>
    </section>

    <div class="container mb-5 mt-5 pt-5">
        <div class="row">
            <div class="col-md-8" style="display:inline-block">
                <h5 class="mb-0"> 
                    <b>Deskripsi</b>
                </h5>

                <p><?= $f_event['event_desc']; ?></p>

                <h5 class="mb-2"> 
                    <b>Waktu</b>
                </h5>

                <?php $dateExplode = $f_event['event_date']; ?>
                <?php $convertDate = date('d-M-Y', strtotime($dateExplode)); ?>
                <?php $data = explode("-", $convertDate); ?>

                <div class="mb-4 dateEvent">
                    <span>
                        <?php echo ($data[0]); ?>
                    </span>

                    <span>
                        <?php echo ($data[1]); ?>
                    </span>

                    <span>
                        <?php echo ($data[2]); ?>
                    </span>
                </div>


                <h5 class="mb-0"> 
                    <b>Galeri</b>
                </h5>

               
                    <div class="row">
                        <div class="row p-4">
                        <?php foreach ($gallery as $row) : ?>
                            <div class="col-lg-4 col-md-4 col-xs-6 mb-2">
                                <a href="/img/event/galleryevent/<?= $row['event_gallery_file'] ?>" data-toggle="lightbox" data-gallery="gallery" class="col-md-4">
                                    <img src="/img/event/galleryevent/<?= $row['event_gallery_file'] ?>" class="img-fluid rounded">
                                </a>
                            </div>
                        <?php endforeach; ?>
                        </div>
                    </div>
                

            </div>

            <div class="col-md-4">
                <h5 class="mb-3">
                    <b>Event Lokasi</b>
                </h5>
                
                <div class="mb-5" style="position:sticky;">
                    <div class="rounded" id="mapid" style="width: 100%; height: 250px;"></div>
                </div>

                <h5 class="mb-2">
                    <b><?= $f_event['event_name']; ?></b>
                </h5>

                <?= $f_event['event_address']; ?>

                <h5 class="mb-3">
                    <b>Bagikan</b>
                </h5>

                <ul class="ftco-footer-sociall list-unstyled float-md-left float-lft">
                        <li class="ftco-animate"><a href="https://twitter.com/share?url=<?= base_url('/f_event/detail/') ?>/<?= $f_event['event_slug'] ?>" target="_blank"> <span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                    </ul>
            </div>
        </div>

    </div>

    <section class="ftco-section testimony-section bg-bottom" style="background-image: url(<?= base_url('/assets/assets_fe/images/bg_3.jpg') ?>);">
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-md-7 text-center heading-section ftco-animate">
                    <h2 class="mb-4">Event Lainnya</h2>
                </div>
            </div>
            <section class="ftco-section ftco-no-pt">
            <div class="row">

                <?php foreach ($f_event_r as $event_fe) : ?>
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="blog-entry justify-content-end">

                            <a href="/f_event/detail/<?= $event_fe['event_slug']; ?>" class="block-20" style="background-image: url(
                                <?= base_url('img/event/' . $event_fe['event_poster']); ?>);">
                            </a>

                            <div class="text mt-3 float-right d-block">
                                <div class="d-flex align-items-center mb-4 topp">

                                    <?php $dateExplode = $event_fe['event_date']; ?>
                                    <?php $convertDate = date('d-M-Y', strtotime($dateExplode)); ?>
                                    <?php $data = explode("-", $convertDate); ?>

                                    <div class="one">

                                        <span class="day">
                                            <?php echo ($data[0]); ?>
                                        </span>
                                    </div>
                                    <div class="two">
                                        <span class="yr"><?php echo ($data[2]); ?></span>
                                        <span class="mos"><?php echo ($data[1]); ?></span>
                                    </div>


                                </div>
                                <h3 class="heading"><a href="/f_event/detail/<?= $event_fe['event_slug']; ?>"><?= $event_fe['event_name'] ?></a></h3>

                                <p><?= character_limiter($event_fe['event_desc'] , 70)?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            </div>
            </section>
            </div>
        </section>


    <script>
        var mymap = L.map('mapid').setView([<?= $f_event['event_lat'] ?>, <?= $f_event['event_lng'] ?>], 15);

        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
            id: 'mapbox/streets-v11',
        }).addTo(mymap);

        

        var myIcon = L.icon({
        iconUrl: '<?= base_url('../img/locIcon.png') ?>', 
        iconSize: [50, 50],
        });

            L.marker([<?= $f_event['event_lat'] ?>, <?= $f_event['event_lng'] ?>], {icon:myIcon}).addTo(mymap);
    </script>