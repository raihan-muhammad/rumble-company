<div class="row">
    <div class="col-md-12 p-6">
        <div class="card shadow mt-5">
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="mb-0">Update Portofolio</h3>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <?php foreach($portofolio as $p) : ?>
                <form action="<?= site_url('portofolio/do/update') ?>" method="POST" enctype='multipart/form-data'>
                    <input type="hidden" value="<?= $p->id_portofolio ?>" name="id">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for=""><small>Nama portofolio</small></label>
                                    <div class="input-group input-group-alternative mb-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-key-25"></i></span>
                                        </div>
                                        <input class="form-control form-control-alternative"
                                            type="text" autocomplate="off" value="<?= $p->nama_portofolio ?>" name="namaPortofolio">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <img src="<?= base_url('assets/img/portofolio/').$p->gambar ?>" class="img-thumbnail" alt="Foto portofolio">
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for=""><small>Foto portofolio</small></label>
                                    <div class="input-group input-group-alternative mb-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-album-2"></i></span>
                                        </div>
                                        <input type="hidden" value="<?= $p->gambar ?>" name="fotoPro">
                                        <input class="form-control form-control-alternative" type="file"
                                            autocomplate="off" name="gambarPortofolio">
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