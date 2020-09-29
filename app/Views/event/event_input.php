<div class="container">


    <div class="row">
        <div class="col-lg-12">
            <!-- Circle Buttons -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Tambahkan Event</h6>
                </div>
                <div class="card-body">
                    <div class="col-md-12">
                        <form action="<?= base_url('event/eventSave') ?>" method="post" enctype="multipart/form-data">
                            <?= csrf_field(); ?>
                            <div class="form-group">
                                <input type="hidden" class="form-control form-control-user" id="idUser" name="idUser" value="<?= session()->get('id') ?>">
                            </div>

                            <div class="form-group">
                                <label for="posterUpload">Event Name</label>
                                <input type="text" class="form-control form-control-user" id="eventName" name="eventName" placeholder="Event Name" value="">
                            </div>

                            <div class="form-group">
                                <label>Event Kategori</label>
                                <select class="form-control" name="idKategori" id="idKategori" required>
                                    <option value="">No Selected</option>
                                    <?php foreach ($kategori as $row) : ?>
                                        <option value="<?php echo $row['id']; ?>">
                                            <?php echo $row['nama_kategori']; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <label for="posterUpload">Event Description</label>
                            <textarea name="eventDesc" id="ckeditor" required></textarea>

                            <div class="form-group" style="margin-top: 20px;">
                                <label for="posterUpload">Event Date </label>
                                <input type="date" class="form-control form-control-user" id="eventDate" name="eventDate" placeholder="Event Date" value="" style="width: 20%;">
                            </div>

                            <div class="form-group">
                                <label for="posterUpload">Event Poster</label>
                                <div class="col-md-12">
                                    <div class="col-md-3 mb-3" style="display: inline-block;">
                                        <img src="/img/defaultimage.png" class="img-thumbnail img-preview">
                                    </div>
                                    <div class="custom-file col-md-8">
                                        <input type="file" class="custom-file-input" id="eventPoster" name="eventPoster" onchange="previewImg()">
                                        <label class="custom-file-label" for="inputGroupFile01">Pilih Gambar</label>
                                    </div>
                                </div>

                                <hr>

                                <div class="d-flex justify-content-end">
                                    <button type="reset" class="btn btn-warning" style="margin-right: 10px;">Reset</button>
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
            height: '150px'
        });
    });

    function previewImg() {
        const eventPoster = document.querySelector('#eventPoster');
        const eventPosterLabel = document.querySelector('.custom-file-label');
        const posterPreview = document.querySelector('.img-preview');

        eventPosterLabel.textContent = eventPoster.files[0].name;

        const filePoster = new FileReader();
        filePoster.readAsDataURL(eventPoster.files[0]);

        filePoster.onload = function(e) {
            posterPreview.src = e.target.result;
        }

    }
</script>