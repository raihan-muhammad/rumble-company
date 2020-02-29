<div class="row">
    <div class="col-md-12 p-6">
        <div class="card shadow mt-5">
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="mb-0">Update Alur</h3>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <?php foreach($alur as $p) : ?>
                <form action="<?= site_url('alur/do/update') ?>" method="POST" enctype='multipart/form-data'>
                    <input type="hidden" value="<?= $p->id_alur ?>" name="id">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for=""><small>Nama Alur</small></label>
                                    <div class="input-group input-group-alternative mb-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-key-25"></i></span>
                                        </div>
                                        <input class="form-control form-control-alternative"
                                            type="text" autocomplate="off" value="<?= $p->nama_alur ?>" name="nama">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="<?= base_url('admin/alur') ?>" class="btn btn-secondary btn-sm">Batal</a>
                        <button type="submit" class="btn btn-success btn-sm">update</button>
                    </div>
                </form>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>