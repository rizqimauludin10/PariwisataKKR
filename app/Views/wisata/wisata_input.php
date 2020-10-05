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
                                <label for="name">Nama Destinasi</label>
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

                            <div class="form-group mt-4">
                                <label for="address">Alamat Destinasi</label>
                                <input type="text" class="form-control form-control-user" id="destinasiAddress" name="destinasiAddress" placeholder="Nama Destinasi" value="">
                            </div>

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
                                <div id="mapid" style="width: 100%; height: 400px;"></div>
                            </div>

                            <div class="col-md-12">
                                <div class="col-md-5" style="display: inline-block;">
                                    <div class="form-group mt-2">
                                        <label for="posterUpload">Lattitude</label>
                                        <input type="text" class="form-control form-control-user" id="lat" name="lat" placeholder="Lattitude" value="">
                                    </div>
                                </div>

                                <div class="col-md-5" style="display: inline-block;">
                                    <div class="form-group mt-2">
                                        <label for="posterUpload">Langitude</label>
                                        <input type="text" class="form-control form-control-user" id="lang" name="lang" placeholder="Langitude" value="">
                                    </div>
                                </div>
                            </div>

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

                            <div class="form-group" style="margin-top: 20px;">
                                <label for="posterUpload">Upload Gallery Foto Destinasi </label>
                                <input class="form-control" name="destinasiUpload[]" id="destinasiUpload" type="file" multiple="true" />
                            </div>



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

<script>
    $(function() {
        $("#datepicker").datepicker();

        CKEDITOR.replace('ckeditor', {
            filebrowserImageBrowseUrl: '<?= base_url('assets/kcfinder/browse.php'); ?>',
            height: '100px'
        });
        CKEDITOR.replace('ckeditor3', {
            filebrowserImageBrowseUrl: '<?= base_url('assets/kcfinder/browse.php'); ?>',
            height: '100px'
        });
        // CKEDITOR.replace('ckeditor4', {
        //     filebrowserImageBrowseUrl: '<?= base_url('assets/kcfinder/browse.php'); ?>',
        //     height: '100px'
        // });
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


    var curLocation = [0, 0];
    if (curLocation[0] == 0 && curLocation[1] == 0) {
        curLocation = [-0.126644, 109.403667];
    }

    var mymap = L.map('mapid').setView([-0.126644, 109.403667], 15);

    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
        id: 'mapbox/streets-v11',
    }).addTo(mymap);

    mymap.attributionControl.setPrefix(false);
    // L.marker([-0.126644, 109.403667]).addTo(map);
    var marker = new L.marker(curLocation, {
        draggable: 'true'
    });

    marker.on('dragend', function(event) {
        var position = marker.getLatLng();
        marker.setLatLng(position, {
            draggable: 'true'
        }).bindPopup(position).update();
        $("#lat").val(position.lat);
        $("#lang").val(position.lng).keyup();
    });

    $("#lat, #lang").change(function() {
        var position = [parseInt($("#lat").val()), parseInt($("#lang").val())];
        marker.setLatLng(position, {
            draggable: 'true'
        }).bindPopup(position).update();
        mymap.panTo(position);
    });

    mymap.addLayer(marker);
</script>