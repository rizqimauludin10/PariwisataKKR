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

            <div class="container">
                <div class="row mt-4">
                    <div class="col-sm-6 float-right ">
                        <form action="" method="POST">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Masukkan keyword pencarian.." name="keyword">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="submit" id="submit">Cari</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        <!-- <th class="sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Name: activate to sort column descending" style="width: 161px;" aria-sort="ascending">Name</th> -->

                        <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info">
                            <thead>
                                <tr role="row">
                                    <th class="sorting" tabindex="0" aria-controls="essay-table" rowspan="1" colspan="1" aria-sort="ascending"> # </th>
                                    <th aria-controls="essay-table" rowspan="1" colspan="1"> Nama Wisata </th>
                                    <th aria-controls="essay-table" rowspan="1" colspan="1"> Kategori </th>
                                    <th aria-controls="essay-table" rowspan="1" colspan="1"> Alamat </th>

                                    <th aria-controls="essay-table" rowspan="1" colspan="1"> Fasilitas </th>

                                    <th class="sorting" tabindex="0" aria-controls="essay-table" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending"">Action</th>
                                </tr>
                            </thead>

                            <?php $a = 1 + (10 * ($currentPage - 1)); ?>
                            <?php foreach ($wisata as $row) : ?>
                                <tbody>
                                    <td>
                                        <?= $a++ ?>
                                    </td>
                                    <td>
                                        <?= $row['wisata_name'] ?>
                                    </td>

                                    <td>
                                        <?= $row['nama_kategori']; ?>
                                    </td>

                                    <td>
                                        <?= $row['wisata_address']; ?>
                                    </td>

                                    <td>
                                        <?= $row['wisata_facility']; ?>
                                    </td>
                                    <td>

                                        <form action="/wisata/detail/<?= $row['wisata_slug']; ?>" method="POST" style="display: inline-block;">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="far fa-eye"></i></button>
                                        </form>

                                        <form action="<?= base_url('wisata/deleteWisata/' . $row['wisata_slug']) ?>" method="POST" style="display: inline-block;">
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

                <div class="row mt-3 float-right">
                    <div class="col-md-12">
                        <?= $pager->links('wisata', 'wisata_pagination'); ?>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div> <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->