<div class="container-fluid">

    <div class="col-md-12">
        <div class="card shadow mb-4" style="margin-top: 20px;">
            <div class="card-header py-3">
                <div class="col">
                    <h6 class="m-0 font-weight-bold text-primary">Event Pariwisata Kubu Raya</h6>
                </div>

                <div class="d-flex justify-content-end">
                    <a href="<?= base_url('event/eventCreate') ?>" class="btn btn-primary right">Tambah Event</a>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">

                        <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                            <thead>
                                <tr role="row">
                                    <th class="sorting" tabindex="0" aria-controls="essay-table" rowspan="1" colspan="1" style="width: 20%;"> Event Name </th>
                                    <th class="sorting" tabindex="0" aria-controls="essay-table" rowspan="1" colspan="1" style="width: 40%"> Event Description </th>
                                    <th class="sorting" tabindex="0" aria-controls="essay-table" rowspan="1" colspan="1" style="width: 20%;"> Event Date </th>

                                    <th class="sorting" tabindex="0" aria-controls="essay-table" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 18%">Action</th>
                                </tr>
                            </thead>

                            <?php foreach ($event as $row) : ?>
                                <tbody>


                                    <tr role="row" class="odd">
                                        <td>
                                            <?= $row['event_name'] ?>
                                        </td>
                                        <td>
                                            <?= $row['event_desc']; ?>
                                        </td>

                                        <td>
                                            <?= $row['event_date']; ?>
                                        </td>
                                        <td>

                                            <form action="<?= base_url('event/eventView') ?>" method="POST" style="display: inline-block;">

                                                <button type="submit" class="btn btn-primary right">
                                                    <i class="far fa-eye"></i></button>

                                            </form>


                                            <form action="<?= base_url('event/eventUpdate') ?>" method="POST" style="display: inline-block;">
                                                <button type="submit" class="btn btn-warning">
                                                    <i class="far fa-edit"></i></button>
                                            </form>

                                            <form action="<?= base_url('event/deleteEvent/' . $row['id']) ?>" method="POST" style="display: inline-block;">
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