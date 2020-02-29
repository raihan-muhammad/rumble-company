<div class="row">
    <div class="col-md-12 p-6">
        <div class="card shadow mt-5">
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="mb-0">Update Slider</h3>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <?php foreach($upSlider as $s) : ?>
                <form action="<?= site_url('admin/slider/update') ?>" method="POST" enctype='multipart/form-data'>
                    <input type="hidden" name="id" value="<?= $s->id_slider; ?>">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for=""><small>Nama Slider</small></label>
                                    <div class="input-group input-group-alternative mb-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-key-25"></i></span>
                                        </div>
                                        <input class="form-control form-control-alternative" value="<?= $s->nama_slider; ?>"
                                            type="text" autocomplate="off" name="nama">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 mb-4">
                                <img class="img-thumbnail" src="<?= base_url('assets/img/slider/').$s->gambar_slider ?>" style="height: 450px; width: auto;">
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for=""><small>Ubah Gambar Slider</small></label>
                                    <div class="input-group input-group-alternative mb-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-check-bold"></i></span>
                                        </div>
                                        <input type="hidden" name="foto" value="<?= $s->gambar_slider; ?>">
                                        <input class="form-control form-control-alternative" type="file"
                                            autocomplate="off" id="uGambarSlider" name="gambar">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="<?= base_url('admin/slider') ?>" class="btn btn-secondary btn-sm">Batal</a>
                        <button type="submit" class="btn btn-success btn-sm" id="btnUpdateSlider">Update</button>
                    </div>
                </form>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>