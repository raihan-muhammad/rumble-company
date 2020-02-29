<div class="row">
    <div class="col-md-12 p-6">
        <div class="card shadow mt-5">
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="mb-0">Tambah Produk</h3>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="<?= site_url('produk/do/tambah') ?>" method="POST" enctype='multipart/form-data'>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for=""><small>Nama Produk</small></label>
                                    <div class="input-group input-group-alternative mb-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-key-25"></i></span>
                                        </div>
                                        <input class="form-control form-control-alternative"
                                            type="text" autocomplate="off" placeholder="Masukan Nama Produk" name="namaProduk">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for=""><small>Foto Produk</small></label>
                                    <div class="input-group input-group-alternative mb-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-album-2"></i></span>
                                        </div>
                                        <input class="form-control form-control-alternative" type="file"
                                            autocomplate="off" name="gambarProduk">
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
                                        <textarea name="diskripsiProduk" class="form-control form-control-alternative" placeholder="Masukan Diskripsi" id="" cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="<?= base_url('admin/slider') ?>" class="btn btn-secondary btn-sm">Batal</a>
                        <button type="submit" class="btn btn-success btn-sm">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>