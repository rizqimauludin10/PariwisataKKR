<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Detail Wisata</h6>
                </div>
                <div class="card-body">
                    <div class="col-md-12">

                        <div class="col-md-4 mb-3" style="display: inline-block;">
                            <img src="/img/wisata/<?= $wisata['wisata_poster'] ?>" class="img-thumbnail img-preview">
                        </div>

                        <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">

                            <thead>
                                <tr role="row">
                                    <th class="sorting" tabindex="0" aria-controls="essay-table" rowspan="1" colspan="1">Profil</th>

                                    <th class="sorting" tabindex="0" aria-controls="essay-table" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending">Operasional
                                    </th>

                                    <th class="sorting" tabindex="0" aria-controls="essay-table" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending">Alamat</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr role="row" class="odd">
                                    <td>
                                        <b> <label for="label">Nama Destinasi </label> </b>
                                    </td>
                                    <td colspan="2">
                                        <label for="label1"><?= $wisata['wisata_name'] ?> </label>
                                    </td>

                                </tr>

                            </tbody>
                        </table>


                        <div class="col-md-4" style="display: block">


                        </div>

                        <div class="col-md-4" style="display: block">
                            <b> <label for="label">Kategori Destinasi : </label> </b>
                            <label for="label1"><?= $wisata['nama_kategori'] ?></label>
                        </div>


                        <?php foreach ($gallery as $row) : ?>
                            <div class="col-md-4 mb-3" style="display: inline-block;">
                                <img src="/img/wisata/gallerywisata/<?= $row['gallery_file'] ?>" class="img-thumbnail img-preview">
                            </div>
                        <?php endforeach; ?>








                        <!-- <table class="table table-borderless">
                            <thead>
                                <tr>

                                    <th scope="col">Profil</th>
                                    <th scope="col">Operasional</th>
                                    <th scope="col">Alamat</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="1">Nama Destinasi</td>
                                    <td colspan="1">Nama Destinasi</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table> -->




                    </div>




                </div>
            </div>
        </div>