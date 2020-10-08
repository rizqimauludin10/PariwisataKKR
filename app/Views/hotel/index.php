<div class="container-fluid">

    <div class="col-md-12">
        <div class="card shadow mb-4" style="margin-top: 20px;">
            <div class="card-header py-3">
                <div class="col">
                    <h6 class="m-0 font-weight-bold text-primary">Hotel dan Peginapan</h6>
                </div>

                <div class="d-flex justify-content-end">
                    <a href="<?= base_url('hotel/hotelCreate') ?>" class="btn btn-primary right">Tambah Data</a>
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
                        <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info">
                            <thead>
                                <tr role="row">
                                    <th class="sorting" tabindex="0" aria-controls="essay-table" rowspan="1" colspan="1" aria-sort="ascending"> # </th>
                                    <th aria-controls="essay-table" rowspan="1" colspan="1"> Nama Hotel </th>
                                    <th aria-controls="essay-table" rowspan="1" colspan="1"> Alamat </th>
                                    <th aria-controls="essay-table" rowspan="1" colspan="1"> Fasilitas </th>

                                    <th class="sorting" tabindex="0" aria-controls="essay-table" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending"">Action</th>
                                </tr>
                            </thead>

                            <?php $a = 1 + (10 * ($currentPage - 1)); ?>
                            <?php foreach ($hotel as $row) : ?>
                                <tbody>
                                    <td>
                                        <?= $a++ ?>
                                    </td>

                                    <td>
                                        <?= $row['hotel_name'] ?>
                                    </td>

                                    <td>
                                        <?= $row['hotel_address']; ?>
                                    </td>

                                    <td>
                                        <?= $row['hotel_facility']; ?>
                                    </td>
                                    <td>

                                        <form action="/hotel/detail/<?= $row['hotel_slug']; ?>" method="POST" style="display: inline-block;">
                                        <button type="submit" class="btn btn-primary">
                                            <i class="far fa-eye"></i></button>
                                        </form>

                                        <form action="<?= base_url('hotel/deleteHotel/' . $row['hotel_slug']) ?>" method="POST" style="display: inline-block;">
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
                        <?= $pager->links('hotel', 'hotel_pagination'); ?>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div> <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->