<div class="row">
    <div class="col-md-12 p-6">
        <div class="card shadow mt-5">
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="mb-0">Tambah Data Setting</h3>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="<?= site_url('setting/do/tambah') ?>" method="POST" enctype='multipart/form-data'>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for=""><small>Judul</small></label>
                                    <div class="input-group input-group-alternative mb-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-key-25"></i></span>
                                        </div>
                                        <input class="form-control form-control-alternative"
                                            type="text" autocomplate="off" placeholder="Masukan Judul" name="judul" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for=""><small>Gambar</small></label>
                                    <div class="input-group input-group-alternative mb-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-album-2"></i></span>
                                        </div>
                                        <input class="form-control form-control-alternative" type="file"
                                            autocomplate="off" name="gambarsetting" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for=""><small>Diskripsi</small></label>
                                    <div class="input-group input-group-alternative mb-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-align-left-2"></i></span>
                                        </div>
                                        <textarea name="diskripsisetting" class="form-control form-control-alternative" placeholder="Masukan Diskripsi" id="" cols="30" rows="10" required></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="<?= base_url('admin/client') ?>" class="btn btn-secondary btn-sm">Batal</a>
                        <button type="submit" class="btn btn-success btn-sm">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>