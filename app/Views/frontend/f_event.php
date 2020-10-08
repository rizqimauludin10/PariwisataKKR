<body>

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
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a href="/" class="nav-link">Beranda</a></li>
                        <li class="nav-item"><a href="f_destinasi.rm" class="nav-link">Destinasi</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Artikel</a></li>
                        <li class="nav-item active"><a href="f_event.rm" class="nav-link">Event</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Download</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">About</a></li>
                        <li class="nav-item cta"><a href="#" class="nav-link">Peta Wisata</a></li>
                    </ul>
                </ul>
            </div>
        </div>
    </nav>
    <section class="hero-wrap hero-wrap-2" style="background-image: url('../assets/assets_fe/images/bg_1.jpg'); height:500px;" data-stellar-background-ratio="0.5">
        <div class="overlay" style="height:500px;"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center" style="height:450px;">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <h2 class="mb-3 bread">Event Wisata Kubu Raya</h2>
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home
                                <i class="ion-ios-arrow-forward"></i></a></span> <span>Event
                            <i class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section ftco-no-pb ftco-no-pt">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-5 mt-5">
                    <div class="search-wrap-1 search-wrap-notop ftco-animate p-4">
                        <form action="#" class="search-property-1">
                            <div class="row">
                                <div class="col-lg align-items-end">
                                    <div class="form-group">
                                        <label for="#">Event</label>
                                        <div class="form-field">
                                            <div class="icon"><span class="ion-ios-search"></span></div>
                                            <input type="text" class="form-control" placeholder="Search place">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <div class="form-field">
                                            <input type="submit" value="Search" class="form-control btn btn-primary">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section ftco-no-pt">
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h2 class="mb-4">Event</h2>
                </div>
            </div>
            <div class="row">

                <?php foreach ($f_event as $event_fe) : ?>
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="blog-entry justify-content-end">

                            <a href="/f_event/detail/<?= $event_fe['event_slug']; ?>" class="block-20" style="background-image: url(<?= base_url('img/event/' . $event_fe['event_poster']); ?>);">
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



            <!-- Pagging -->
            <div class="row">
                <div class="col text-center">
                    <?= $pager->links('f_event', 'f_event_pagination'); ?>
                </div>
            </div>
        </div>
    </section>

</body>