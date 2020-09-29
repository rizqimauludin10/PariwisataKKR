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
                    <li class="nav-item "><a href="/" class="nav-link">Beranda</a></li>
                    <li class="nav-item active"><a href="<?= base_url('f_destinasi/') ?>" class="nav-link">Destinasi</a></li>
                    <li class="nav-item"><a href="about.html" class="nav-link">Artikel</a></li>
                    <li class="nav-item"><a href="<?= base_url('f_event/') ?>" class="nav-link">Event</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Download</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">About</a></li>
                    <li class="nav-item cta"><a href="#" class="nav-link">Peta Wisata</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url(
                               <?= base_url('img/wisata/' . $wisata['wisata_poster']); ?>);" data-stellar-background-ratio="0.5">
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
        <div class="col-lg-9 mt-4 mb-4" style="display: inline-block;">
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h6 class="mb-0">
                            <b>
                                Informasi Destinasi
                            </b>
                        </h6>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            <table class="w-full">
                                <tbody>
                                    <tr>
                                        <td class="align-top py-2 pr-2 whitespace-no-wrap">Nama Tempat</td>
                                        <td class="align-top py-2 whitespace-no-wrap">
                                            <b><?= $wisata['wisata_name']; ?></b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="align-top py-2 pr-2 whitespace-no-wrap">Kategori</td>
                                        <td class="align-top py-2 whitespace-no-wrap">-</td>
                                    </tr>

                                    <tr>
                                        <td class="align-top py-2 pr-2 whitespace-no-wrap">Alamat</td>
                                        <td class="align-top py-2 whitespace-no-wrap"><?= $wisata['wisata_address']; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="align-top py-2 pr-2 whitespace-no-wrap">Kontak</td>
                                        <td class="align-top py-2 whitespace-no-wrap"><?= $wisata['wisata_contact']; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="align-top py-2 pr-2 whitespace-no-wrap">Jam Operasional</td>
                                        <td class="align-top py-2 whitespace-no-wrap"><?= $wisata['wisata_operational']; ?></td>
                                    </tr>
                                    <tr>
                                        <td class="align-top py-2 pr-2 whitespace-no-wrap">Fasilitas</td>
                                        <td class="align-top py-2 whitespace-no-wrap">
                                            <?= $wisata['wisata_facility']; ?> <br>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="align-top py-2 pr-2 whitespace-no-wrap">Biaya</td>
                                        <td class="align-top py-2 whitespace-no-wrap">
                                            <?= $wisata['wisata_cost']; ?> <br>
                                        </td>
                                    </tr>
                                </tbody>

                            </table>
                        </div>
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
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-lg-3 mt-4 mb-4" style="display: inline-block; position: absolute;">
            <div class="card">
                <a href="#">
                    <div class="card-body p-3">
                        <svg width="2em" height="1em" viewBox="0 0 16 16" class="bi bi-geo-alt" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M12.166 8.94C12.696 7.867 13 6.862 13 6A5 5 0 0 0 3 6c0 .862.305 1.867.834 2.94.524 1.062 1.234 2.12 1.96 3.07A31.481 31.481 0 0 0 8 14.58l.208-.22a31.493 31.493 0 0 0 1.998-2.35c.726-.95 1.436-2.008 1.96-3.07zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                            <path fill-rule="evenodd" d="M8 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                        </svg>
                        <span class="text">Lokasi</span>

                    </div>
                </a>
            </div>

            <div class="card mt-3">
                <a href="#">
                    <div class="card-body p-3">
                        <svg width="2em" height="1em" viewBox="0 0 16 16" class="bi bi-images" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M12.002 4h-10a1 1 0 0 0-1 1v8l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094l1.777 1.947V5a1 1 0 0 0-1-1zm-10-1a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2h-10zm4 4.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                            <path fill-rule="evenodd" d="M4 2h10a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1v1a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2h1a1 1 0 0 1 1-1z" />
                        </svg>
                        <span class="text">Lihat Gallery</span>
                    </div>
                </a>
            </div>

            <div class="card mt-3">
                <a href="#">
                    <div class="card-body p-3">
                        <svg width="2em" height="1em" viewBox="0 0 16 16" class="bi bi-film" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M0 1a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm4 0h8v6H4V1zm8 8H4v6h8V9zM1 1h2v2H1V1zm2 3H1v2h2V4zM1 7h2v2H1V7zm2 3H1v2h2v-2zm-2 3h2v2H1v-2zM15 1h-2v2h2V1zm-2 3h2v2h-2V4zm2 3h-2v2h2V7zm-2 3h2v2h-2v-2zm2 3h-2v2h2v-2z" />
                        </svg>
                        <span class="text">Lihat Video</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</body>