      <!-- Begin Page Content -->
      <div class="container-fluid">
          <!-- Page Heading -->

          <div class="card">
              <div class="card-header row">
                  <div class="col">
                      <h4 class="card-tittle">Profile Pariwisata</h4>
                  </div>
                  <div class="d-flex justify-content-end">
                      <a href="<?= base_url('profile/profileUpdate') ?>" class="btn btn-primary right">Update Profile</a>
                  </div>
              </div>
          </div>

          <div class="col-md-12">
              <div class="card shadow mb-4" style="margin-top: 20px;">
                  <div class="card-header py-3">
                      <h6 class="m-0 font-weight-bold text-primary">Profile Pariwisata Kubu Raya</h6>
                  </div>
                  <div class="card-body">
                      <div class="row">
                          <div class="col-sm-12">
                              <?php foreach ($profile as $row) : ?>
                                  <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                      <thead>
                                          <tr role="row">
                                              <th class="sorting" tabindex="0" aria-controls="essay-table" rowspan="1" colspan="1" style="width: 120px;"> <?= $row['profile_title'] ?> </th>

                                              <th class="sorting" tabindex="0" aria-controls="essay-table" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 50px;">Action</th>
                                          </tr>
                                      </thead>


                                      <tbody>
                                          <tr role="row" class="odd">
                                              <td style="width: 470px;">
                                                  <?= $row['profile_desc']; ?>
                                              </td>
                                              <td>

                                                  <form action="<?= base_url('profile/profileUpdate') ?>" method="POST" style="display: inline-block;">

                                                      <button type="submit" class="btn btn-primary right">
                                                          <i class="far fa-edit"></i></button>
                                                  </form>


                                                  <form action="<?= base_url('profile/profileDelete') ?>" method="POST" style="display: inline-block;">
                                                      <input type="hidden" name="">
                                                      <button type="submit" class="btn btn-danger">
                                                          <i class="far fa-trash-alt"></i></button>
                                                  </form>
                                              </td>
                                          </tr>
                                      </tbody>

                                  </table>
                              <?php endforeach; ?>
                          </div>


                          <div class="col-sm-12">
                              <?php foreach ($visi as $row) : ?>
                                  <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                      <thead>
                                          <tr role="row">
                                              <th class="sorting" tabindex="0" aria-controls="essay-table" rowspan="1" colspan="1" aria-label="Soal: activate to sort column ascending" style="width: 120px;"><?= $row['visi_title'] ?></th>
                                              <th class="sorting" tabindex="0" aria-controls="essay-table" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 60px;">Action</th>
                                          </tr>
                                      </thead>
                                      <tbody>


                                          <tr role="row" class="odd">
                                              <td style="width: 470px;">
                                                  <?= $row['visi_desc'] ?>
                                              </td>
                                              <td>
                                                  <form action="<?= base_url('visi/visiUpdate') ?>" method="POST" style="display: inline-block;">
                                                      <input type="hidden" name="">
                                                      <button type="submit" class="btn btn-primary right">
                                                          <i class="far fa-edit"></i></button>
                                                  </form>

                                                  <form action="<?= base_url('visi/visiDelete') ?>" method="POST" style="display: inline-block;">
                                                      <input type="hidden" name="">
                                                      <button type="submit" class="btn btn-warning">
                                                          <i class="fas fa-sync-alt"></i></i></button>
                                                  </form>
                                              </td>

                                          </tr>
                                      </tbody>
                                  <?php endforeach; ?>
                                  </table>
                          </div>

                          <div class="col-sm-12">
                              <?php foreach ($misi as $row) : ?>
                                  <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                      <thead>
                                          <tr role="row">
                                              <th class="sorting" tabindex="0" aria-controls="essay-table" rowspan="1" colspan="1" aria-label="Soal: activate to sort column ascending" style="width: 120px;"><?= $row['misi_title'] ?></th>
                                              <th class="sorting" tabindex="0" aria-controls="essay-table" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 60px;">Action</th>
                                          </tr>
                                      </thead>
                                      <tbody>


                                          <tr role="row" class="odd">
                                              <td style="width: 470px;">
                                                  <?= $row['misi_desc'] ?>
                                              </td>
                                              <td>
                                                  <form action="<?= base_url('misi/misiUpdate') ?>" method="POST" style="display: inline-block;">
                                                      <input type="hidden" name="">
                                                      <button type="submit" class="btn btn-primary right">
                                                          <i class="far fa-edit"></i></button>
                                                  </form>

                                                  <form action="<?= base_url('profile/misiDelete') ?>" method="POST" style="display: inline-block;">
                                                      <input type="hidden" name="">
                                                      <button type="submit" class="btn btn-danger">
                                                          <i class="far fa-trash-alt"></i></button>
                                                  </form>
                                              </td>

                                          </tr>
                                      </tbody>
                                  </table>
                              <?php endforeach; ?>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div> <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->