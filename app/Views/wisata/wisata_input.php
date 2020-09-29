<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tambahkan Destinasi</h6>
                </div>
                <div class="card-body">
                    <div class="col-md-12">
                        <form action="<?= base_url('wisata/wisataSave') ?>" method="post" enctype="multipart/form-data">
                            <?= csrf_field(); ?>
                            <div class="form-group">
                                <input type="hidden" class="form-control form-control-user" id="idUser" name="idUser" value="<?= session()->get('id') ?>">
                            </div>


                            <div class="form-group">
                                <label for="posterUpload">Nama Destinasi</label>
                                <input type="text" class="form-control form-control-user" id="destinasiName" name="destinasiName" placeholder="Nama Destinasi" value="">
                            </div>

                            <div class="form-group">
                                <label>Kategori Destinasi</label>
                                <select class="form-control" name="idKategori" id="idKategori" required>
                                    <option value="">No Selected</option>
                                    <?php foreach ($kategori as $row) : ?>
                                        <option value="<?php echo $row['id']; ?>">
                                            <?php echo $row['nama_kategori']; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <label for="posterUpload">Deskripsi Destinasi</label>
                            <textarea name="destinasiDesc" id="ckeditor" required></textarea>

                            <label for="posterUpload">Alamat Destinasi</label>
                            <textarea name="destinasiAddress" id="ckeditor2" required></textarea>


                            <div class="form-group" style="margin-top: 20px;">
                                <label for="posterUpload">Waktu Operasional</label>
                                <input type="text" class="form-control form-control-user" id="destinasiOperational" name="destinasiOperational" placeholder="Operasional Destinasi" value="" style="width: 20%;">
                            </div>

                            <div class="form-group" style="margin-top: 20px;">
                                <label for="posterUpload">Biaya</label>
                                <input type="text" class="form-control form-control-user" id="destinasiCost" name="destinasiCost" placeholder="Biaya Destinasi" value="" style="width: 20%;">
                            </div>


                            <div class="form-group" style="margin-top: 20px;">
                                <label for="posterUpload">Kontak</label>
                                <input type="text" class="form-control form-control-user" id="destinasiContact" name="destinasiContact" placeholder="Kontak" value="" style="width: 20%;">
                            </div>

                            <label for="posterUpload">Fasilitas</label>
                            <textarea name="destinasiFacility" id="ckeditor3" required></textarea>

                            <div class="form-group mt-4">
                                <label for="mapsLabel">Peta Lokasi</label>
                            </div>
                            <div id="map"></div>

                            <div class="form-group mt-4">
                                <label for="posterUpload">Destinasi Poster</label>
                                <div class="col-md-12">
                                    <div class="col-md-3 mb-3" style="display: inline-block;">
                                        <img src="/img/defaultimage.png" class="img-thumbnail img-preview">
                                    </div>
                                    <div class="custom-file col-md-8">
                                        <input type="file" class="custom-file-input" id="destinasiPoster" name="destinasiPoster" onchange="previewImg()">
                                        <label class="custom-file-label" for="inputGroupFile05">Pilih Gambar</label>
                                    </div>
                                </div>
                            </div>

                            <hr>

                            <!-- <div class="form-group" style="margin-top: 20px;">
                                <label for="posterUpload">Keterangan Foto</label>
                                <input type="text" class="form-control form-control-user" id="galleri_name" name="galleri_name[]" placeholder="Keterangan Foto" value="" style="width: 20%;">
                            </div>

                            <label for="posterUpload">Deskripsi Foto</label>
                            <textarea name="galleri_desc[]" id="ckeditor4" required></textarea> -->

                            <!-- Multiple Image Upload  -->
                            <!-- <div class="form-group mt-4 addImage">
                                <label for="galleriWisataUpload">Foto Gallery</label>
                                <div class="col-md-12">
                                    <div class="col-md-3 mb-3" style="display: inline-block;">
                                        <img src="/img/defaultimage.png" class="img-thumbnail img-preview2" id="img-preview2">
                                    </div>
                                    <div class="custom-file col-md-2">
                                        <input type="file" class="custom-file-input" id="galleriFile" name="galleriFile[]" multiple onchange="previewImgGallery()">
                                        <label class="custom-file-label lb2" for="fotoGalleryLabel">Pilih Gambar</label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-success">Tambah Foto</button>
                            </div> -->

                            <form method="post" action="upload-page.php" enctype="multipart/form-data">
                                <input name="filesToUpload[]" id="filesToUpload" type="file" multiple="" />
                            </form>


                            <hr>

                            <div class="d-flex justify-content-end">
                                <button type="reset" class="btn btn-warning mr-4">Reset</button>
                                <button type="submit" class="btn btn-success">Publish</button>
                            </div>
                        </form>

                    </div>

                </div>
            </div>

        </div>

    </div>
</div>

<script src="<?= base_url(''); ?>/assets/jquery.js"></script>
<script src="<?= base_url(''); ?>/assets/bootstrap/bootstrap.bundle.js"></script>
<script src="<?= base_url(''); ?>/assets/ckeditor/ckeditor.js"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBLVUltI28Rc8tpWWBc0P3qdTWciWRmNn8&callback=initMap"></script>
<!-- <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script> -->

<style>
    .inputfile {
        width: 0.1px;
        height: 0.1px;
        opacity: 0;
        overflow: hidden;
        position: absolute;
        z-index: -1;
    }

    .inputfile+label {
        font-size: 1.25em;
        font-weight: 700;
        color: white;
        cursor: pointer;
        background-color: black;
        display: inline-block;
    }

    .inputfile:focus+label {
        outline: 1px dotted #000;
        outline: -webkit-focus-ring-color auto 5px;
    }

    .inputfile+label * {
        pointer-events: none;
    }

    .inputfile:focus+label,
    .inputfile+label:hover {
        background-color: red;
    }
</style>


<script>
    $(function() {
        $("#datepicker").datepicker();

        CKEDITOR.replace('ckeditor', {
            filebrowserImageBrowseUrl: '<?= base_url('assets/kcfinder/browse.php'); ?>',
            height: '100px'
        });
        CKEDITOR.replace('ckeditor2', {
            filebrowserImageBrowseUrl: '<?= base_url('assets/kcfinder/browse.php'); ?>',
            height: '100px'
        });
        CKEDITOR.replace('ckeditor3', {
            filebrowserImageBrowseUrl: '<?= base_url('assets/kcfinder/browse.php'); ?>',
            height: '100px'
        });
        CKEDITOR.replace('ckeditor4', {
            filebrowserImageBrowseUrl: '<?= base_url('assets/kcfinder/browse.php'); ?>',
            height: '100px'
        });
    });

    function previewImg() {
        const destinasiPoster = document.querySelector('#destinasiPoster');
        const destinasiPosterLabel = document.querySelector('.custom-file-label');
        const posterPreview = document.querySelector('.img-preview');

        destinasiPosterLabel.textContent = destinasiPoster.files[0].name;

        const filePoster = new FileReader();
        filePoster.readAsDataURL(destinasiPoster.files[0]);

        filePoster.onload = function(e) {
            posterPreview.src = e.target.result;
        }
    }

    function previewImgGallery() {
        const galleryWisataName = document.querySelector('#galleriFile');
        const galleryWisataLabel = document.querySelector('.lb2');
        const posterPreview = document.querySelector('.img-preview2');

        galleryWisataLabel.textContent = galleryWisataName.files[0].name;

        const filePoster = new FileReader();
        filePoster.readAsDataURL(galleryWisataName.files[0]);

        filePoster.onload = function(e) {
            posterPreview.src = e.target.result;
        }

    }



    let map;

    function initMap() {
        map = new google.maps.Map(document.getElementById("map"), {
            center: {
                lat: 51.506821,
                lng: -0.0879
            },
            zoom: 10,
            scaleControl: true,
            map: map,
            title: 'The London Bridge',

        });
    }

    //get the input and UL list
    var input = document.getElementById('filesToUpload');
    var list = document.getElementById('fileList');

    //empty list for now...
    while (list.hasChildNodes()) {
        list.removeChild(ul.firstChild);
    }

    //for every file...
    for (var x = 0; x < input.files.length; x++) {
        //add to list
        var li = document.createElement('li');
        li.innerHTML = 'File ' + (x + 1) + ':  ' + input.files[x].name;
        list.append(li);
    }
</script>