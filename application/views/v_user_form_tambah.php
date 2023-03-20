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
                    <!-- form start -->
                    <form action="<?= base_url('user/tambah_proses') ?>" id="myForm" method="POST"
                        class="form-inputdata" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="div-outline-success">
                                <b>Note:</b>
                                Kolom dengan tanda bintang merah ( <b class="text-danger">*</b> ) wajib untuk diisi.
                            </div>
                            <br>
                            <div class="form-group">
                                <label>Nama <b class="text-danger">*</b></label>
                                <input type="text" name="nama" class="form-control" placeholder="..." required>
                            </div>
                            <div class="form-group">
                                <label>No HP <b class="text-danger">*</b></label>
                                <input type="text" name="nohp" class="form-control" placeholder="..." required>
                            </div>
                            <div class="form-group">
                                <label>Username <b class="text-danger">*</b></label>
                                <input type="text" name="username" class="form-control" placeholder="..." required>
                            </div>
                            <div class="form-group">
                                <label>Password <b class="text-danger">*</b></label>
                                <input type="password" name="password" class="form-control" placeholder="***" required>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea name="alamat" class="form-control" placeholder="..."></textarea>
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
                </div>
            </div>
        </div>
    </div>
</section>