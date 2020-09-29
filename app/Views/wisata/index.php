<div class="container-fluid">

    <div class="col-md-12">
        <div class="card shadow mb-4" style="margin-top: 20px;">
            <div class="card-header py-3">
                <div class="col">
                    <h6 class="m-0 font-weight-bold text-primary">Destinasi Wisata</h6>
                </div>

                <div class="d-flex justify-content-end">
                    <a href="<?= base_url('wisata/wisataCreate') ?>" class="btn btn-primary right">Tambah Destinasi</a>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        <!-- <th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Name: activate to sort column descending" style="width: 161px;" aria-sort="ascending">Name</th> -->

                        <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info">
                            <thead>
                                <tr role="row">
                                    <th class="sorting" tabindex="0" aria-controls="essay-table" rowspan="1" colspan="1" style="width: 20%;" aria-sort="ascending"> Nama Wisata </th>
                                    <th class="sorting" tabindex="0" aria-controls="essay-table" rowspan="1" colspan="1" style="width: 20%;"> Operasional </th>
                                    <th class="sorting" tabindex="0" aria-controls="essay-table" rowspan="1" colspan="1" style="width: 20%;"> Alamat </th>
                                    <th class="sorting" tabindex="0" aria-controls="essay-table" rowspan="1" colspan="1" style="width: 20%;"> Kontak </th>
                                    <th class="sorting" tabindex="0" aria-controls="essay-table" rowspan="1" colspan="1" style="width: 20%;"> Fasilitas </th>

                                    <th class="sorting" tabindex="0" aria-controls="essay-table" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 18%">Action</th>
                                </tr>
                            </thead>

                            <?php foreach ($wisata as $row) : ?>
                                <tbody>


                                    <tr role="row" class="odd">
                                        <td>
                                            <?= $row['wisata_name'] ?>
                                        </td>

                                        <td>
                                            <?= $row['wisata_operational']; ?>
                                        </td>

                                        <td>
                                            <?= $row['wisata_address']; ?>
                                        </td>

                                        <td>
                                            <?= $row['wisata_contact']; ?>
                                        </td>

                                        <td>
                                            <?= $row['wisata_facility']; ?>
                                        </td>
                                        <td>

                                            <form action="/wisata/detail/<?= $row['wisata_slug']; ?>" method="POST" style="display: inline-block;">
                                                <button type="submit" class="btn btn-primary right">
                                                    <i class="far fa-eye"></i></button>
                                            </form>

                                            <form action="<?= base_url('wisata/deleteWisata/' . $row['id']) ?>" method="POST" style="display: inline-block;">
                                                <button type="submit" class="btn btn-danger">
                                                    <i class="far fa-trash-alt"></i></button>
                                            </form>
                                        </td>

                                    </tr>
                                </tbody>
                            <?php endforeach; ?>

                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->