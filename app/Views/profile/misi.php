<div class="container">
    <div class="row">
        <div class="col-md-12">

            <h1 class="h3 mb-4 text-gray-800">Misi</h1>
            <div class="col-md-12">

                <?php foreach ($misi as $row) : ?>
                    <form action="<?= base_url('misi/misiPublish') ?>" method="post">

                        <div class="form-group">
                            <input type="hidden" class="form-control form-control-user" id="idUser" name="idUser" value="<?= session()->get('id') ?>">
                        </div>

                        <div class="form-group">
                            <input type="hidden" class="form-control form-control-user" id="idMisi" name="idMisi" value="<?= $row['id']; ?>">
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="misiTitle" name="misiTitle" placeholder="Misi Title" value="<?= $row['misi_title']; ?>">
                        </div>

                        <textarea name="misiDesc" id="ckeditor" required><?= $row['misi_desc']; ?></textarea>

                        <hr>

                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-danger" style="margin-right: 10px;">Cancel</button>
                            <button type="submit" class="btn btn-success">Publish</button>
                        </div>
                    </form>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<script src="<?= base_url(''); ?>/assets/jquery.js"></script>
<script src="<?= base_url(''); ?>/assets/bootstrap/bootstrap.bundle.js"></script>
<script src="<?= base_url(''); ?>/assets/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
    $(function() {
        CKEDITOR.replace('ckeditor', {
            filebrowserImageBrowseUrl: '<?= base_url('assets/kcfinder/browse.php'); ?>',
            height: '400px'
        });
    });
</script>