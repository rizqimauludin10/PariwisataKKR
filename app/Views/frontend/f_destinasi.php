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
                        <li class="nav-item active"><a href="f_destinasi.fh" class="nav-link">Destinasi</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Artikel</a></li>
                        <li class="nav-item"><a href="f_event.rm" class="nav-link">Event</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Download</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">About</a></li>
                        <li class="nav-item cta"><a href="" class="nav-link">Peta Wisata</a></li>
                    </ul>
                </ul>
            </div>
        </div>
    </nav>
    <section class="hero-wrap hero-wrap-2 js-fullheight " style="background-image: url('../assets/assets_fe/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <h1 class="mb-3 bread">Destinasi Wisata Kubu Raya</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home
                                <i class="ion-ios-arrow-forward"></i></a></span> <span>Destinasi
                            <i class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h2 class="mb-4">Kategori Destinasi</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 ftco-animate">
                    <div class="project-destination">
                        <a href="#" class="img" style="background-image: url(../assets/assets_fe/images/place-1.jpg);">
                            <div class="text">
                                <h3>Wisata Alam</h3>
                                <span>8</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 ftco-animate">
                    <div class="project-destination">
                        <a href="#" class="img" style="background-image: url(../assets/assets_fe/images/place-2.jpg);">
                            <div class="text">
                                <h3>Wisata Buatan</h3>
                                <span>5</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 ftco-animate">
                    <div class="project-destination">
                        <a href="#" class="img" style="background-image: url(../assets/assets_fe/images/place-3.jpg);">
                            <div class="text">
                                <h3>Wisata Budaya</h3>
                                <span>5</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3 ftco-animate">
                    <div class="project-destination">
                        <a href="#" class="img" style="background-image: url(../assets/assets_fe/images/place-4.jpg);">
                            <div class="text">
                                <h3>Agrowisata</h3>
                                <span>5</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pb ftco-no-pt">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-5">
                    <div class="search-wrap-1 search-wrap-notop ftco-animate p-4">
                        <form action="#" class="search-property-1">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="#">Destinasi</label>
                                        <div class="form-field">
                                            <div class="icon"><span class="ion-ios-search"></span></div>
                                            <input type="text" name="keyword" class="form-control" placeholder="Cari Destinasi">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="#"> Kategori </label>
                                        <div class="form-field">
                                            <div class="select-wrap">
                                                <div class="icon"> <span class="ion-ios-arrow-down"></span> </div>
                                                <select name="" id="" class="form-control">
                                                    <?php foreach($f_kategori as $kategori ) : ?> 
                                                        <option id="kategori" name="kategori" value="<?= $kategori['nama_kategori'] ?>"> <?= $kategori['nama_kategori']?> </option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <div class="form-field">
                                            <input type="submit" value="Cari" class="form-control btn btn-primary">
                                        </div>
                                    </div>
                                </div>

                                <!-- <div class="col-md-2">
                                    <div class="form-group">
                                        <div class="form-field">
                                            <input type="submit" value="Cari" class="form-control btn btn-primary">
                                        </div>
                                    </div>
                                </div> -->
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
                    <h2 class="mb-4">Destinasi Wisata</h2>
                </div>
            </div>
            <div class="row">
                <?php foreach ($f_destinasi as $wisata_fe) : ?>
                    <div class="col-md-4 ftco-animate ">
                        <div class="project-wrap">
                            <a href="/f_wisata/detail/<?= $wisata_fe['wisata_slug']; ?>" class="img" style="background-image: url(
                                <?= base_url('img/wisata/' . $wisata_fe['wisata_poster']); ?>);"></a>
                                
                            <div class="text p-4">
                            <?php if($wisata_fe['nama_kategori'] === "Wisata Budaya") { ?>
                                <span class="badge badge-primary" style="font-weight: 500; background-color: #dac425;"><?= $wisata_fe['nama_kategori']; ?>
                                </span>
                            <?php } else { ?>
                                </span><span class="badge badge-primary" style="font-weight: 500; background-color: #2747bb;"><?= $wisata_fe['nama_kategori']; ?>
                                </span>
                            <?php } ?>

                            
                                <!-- <span class="days">7 Days Tour</span> -->

                                <h3 style="margin-bottom: -1px;">
                                    <a href="/f_wisata/detail/<?= $wisata_fe['wisata_slug']; ?>"><?= $wisata_fe['wisata_name'] ?></a>
                                </h3>

                                <p class="location" style="display:inline-block"><span class="ion-ios-map"></span> <?= $wisata_fe['wisata_address'] ?></p>
<!-- 
                                <ul>
                                    <li><span class="flaticon-shower"></span>2</li>
                                    <li><span class="flaticon-king-size"></span>3</li>
                                    <li><span class="flaticon-mountains"></span>Near Mountain</li>
                                </ul> -->
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Pagging -->
            <div class="row">
                <div class="col text-center">
                    <?= $pager->links('f_wisata', 'f_wisata_pagination'); ?>
                </div>
            </div>
        </div>
    </section>


</body>