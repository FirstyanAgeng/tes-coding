<section class="content-header">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <h4>
          Data User
        </h4>
      </div>
    </div>
  </div>
</section>
<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <!-- Main row -->
    <div class="row">
      <div class="col-md-12">
        <div class="card">			
          <div class="card-body">
            <button type="button" onclick="window.location='<?= base_url('user/form_tambah') ?>'" class="btn btn-primary mb-3">
              <span class="fas fa-plus"></span> 
              Create
            </button>
            <div class="table-responsive">
              <table class="table table1 table-bordered table-striped datatables">
                <thead>
                  <tr>
                    <th width="5px">#</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No HP</th>
                    <th>Username</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no=1;
                  foreach($data->result() as $row)
                  {
                    ?>
                    <tr>
                      <td><?= $no ?></td>
                      <td><?= $row->nama ?></td>
                      <td><?= $row->alamat ?></td>
                      <td><?= $row->nohp ?></td>
                      <td><?= $row->username ?></td>
                      <td><?= $row->status  ?></td>
                      <td align="center">
                        <button type="button" class="btn btn-primary mrg-btn btn-sm" onclick="window.location='<?= base_url('user/form_edit/'.$row->id) ?>'"><i class="fas fa-edit"></i> Edit</button>

                        <a href="<?= base_url('user/hapus_proses/'.$row->id) ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">
                          <button type="button" class="btn btn-danger mrg-btn btn-sm"><i class="fas fa-trash"></i></button>
                        </a>
                      </td>
                    </tr>
                  <?php $no++; } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>