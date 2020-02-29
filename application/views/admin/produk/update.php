<div class="row">
    <div class="col-md-12 p-6">
        <div class="card shadow mt-5">
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="mb-0">Update Produk</h3>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <?php foreach($produk as $p) : ?>
                <form action="<?= site_url('produk/do/update') ?>" method="POST" enctype='multipart/form-data'>
                    <input type="hidden" value="<?= $p->id_produk ?>" name="id">
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
                                            type="text" autocomplate="off" value="<?= $p->nama_produk ?>" name="namaProduk">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <img src="<?= base_url('assets/img/produk/').$p->nama_produk ?>" class="img-thumbnail" alt="Foto Produk">
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for=""><small>Foto Produk</small></label>
                                    <div class="input-group input-group-alternative mb-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-album-2"></i></span>
                                        </div>
                                        <input type="hidden" value="<?= $p->foto_produk ?>" name="fotoPro">
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
                                        <textarea name="diskripsiProduk" class="form-control form-control-alternative" placeholder="Masukan Diskripsi" id="" cols="30" rows="10"><?= $p->diskripsi_produk ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="<?= base_url('admin/slider') ?>" class="btn btn-secondary btn-sm">Batal</a>
                        <button type="submit" class="btn btn-success btn-sm">update</button>
                    </div>
                </form>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>