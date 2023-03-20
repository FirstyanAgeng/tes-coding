<section class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h4>
                    Tambah Data User
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
                <!-- Modal content-->
                <div class="card">
                    <?php if($data->num_rows()==0){ ?>
                    <div class="modal-body text-gray">
                        <b style="font-size: 20pt;"><i class="fas fa-info-circle"></i> Data Not Found</b>
                        <br>
                        Data does not exist or has been deleted, please refresh the page!
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal"><i
                                class="fas fa-times"></i></button>
                    </div>
                    <?php }else{ $row = $data->row(); ?>
                    <!-- form start -->
                    <form action="<?= base_url('user/edit_proses') ?>" id="myForm" method="POST" class="form-inputdata"
                        enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $row->id ?>">
                        <div class="card-body">
                            <div class="div-outline-success">
                                <b>Note:</b>
                                Kolom dengan tanda bintang merah ( <b class="text-danger">*</b> ) wajib untuk diisi.
                            </div>
                            <br>
                            <div class="form-group">
                                <label>Nama <b class="text-danger">*</b></label>
                                <input type="text" name="nama" class="form-control" placeholder="..."
                                    value="<?= $row->nama ?>" required>
                            </div>
                            <div class="form-group">
                                <label>No HP <b class="text-danger">*</b></label>
                                <input type="text" name="nohp" class="form-control" placeholder="..."
                                    value="<?= $row->nohp ?>" required>
                            </div>
                            <div class="form-group">
                                <label>Username <b class="text-danger">*</b></label>
                                <input type="text" name="username" class="form-control" placeholder="..."
                                    value="<?= $row->username ?>" required>
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select name="status" class="form-control">
                                    <option value="Aktif" <?= $row->status == 'Aktif' ? 'selected' : '' ?>>Aktif
                                    </option>
                                    <option value="Nonaktif" <?= $row->status == 'Nonaktif' ? 'selected' : '' ?>>
                                        Nonaktif</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea name="alamat" class="form-control"
                                    placeholder="..."><?= $row->alamat ?></textarea>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="<?= base_url('user') ?>"
                                onclick="return confirm('Data tidak tersimpan, apakah anda yakin ingin membatalkannya?')">
                                <button type="button" class="btn btn-danger"><i class="fas fa-times"></i> Batal</button>
                            </a>
                        </div>
                    </form>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>