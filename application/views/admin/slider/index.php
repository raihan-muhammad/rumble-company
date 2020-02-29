<div class="row">
    <div class="col-md-12 p-6">
        <div class="card shadow mt-5">
            <!-- 
                Header Second
                <div class="card-header pb-0 border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Gambar Slider</h3>
                            <a href="#!" class="btn btn-sm btn-primary my-3">Tambah</a>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <div class="input-group input-group-alternative mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-zoom-split-in"></i></span>
                                    </div>
                                    <input class="form-control form-control-alternative" placeholder="Search" type="text">
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
             -->
             <?php
             
                if($this->session->flashdata('update') == TRUE){ 
                echo 
                "
                    <div class='alert alert-success' role='alert'>
                        <strong>Success! </strong>".$this->session->flashdata('update')."
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>  
                "; 
                     
                }

                if($this->session->flashdata('delete') == TRUE){ 
                echo 
                "
                    <div class='alert alert-success' role='alert'>
                        <strong>Success! </strong>".$this->session->flashdata('delete')."
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>  
                "; 
                     
                }

             ?>
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="mb-0">Gambar Slider</h3>
                    </div>
                    <div class="col text-right">
                        <?php
                            if($jumlah > 4){
                             ?>
                                <button class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Maaf slider max 5">Tambah</button>
                        <?php 
                        } else {
                        ?>
                        <a href="#!" class="btn btn-sm btn-primary" data-toggle="modal"
                            data-target="#tambahSlider">Tambah</a>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <!-- Projects table -->
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Slider</th>
                            <th scope="col">Gambar Slider</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no = 1;
                            foreach($slider as $s) :
                        ?>
                        <tr>
                            <td>
                                <?= $no++; ?>
                            </td>
                            <td style="width: 25%;">
                                <?= $s->nama_slider; ?>
                            </td>
                            <td>
                                <a href="<?= base_url('assets/img/slider/').$s->gambar_slider ?>" data-lightbox="roadtrip">
                                    <img class="img-thumbnail" style="width: 70%; height: 250px;" src="<?= base_url('assets/img/slider/').$s->gambar_slider ?>">
                                </a>
                            </td>
                            <td>
                                <a href="<?= site_url('admin/slider/edit/').$s->id_slider; ?>" class="btn btn-sm btn-success" id="btnEdit" data-id="<?= $s->id_slider; ?>">Edit</a>
                                <a href="<?= site_url('admin/slider/delete/').$s->id_slider; ?>" onclick="return confirm('Yakin menghapus slider?')" class="btn btn-sm btn-danger">Hapus</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- MODAL SECTION -->

<div class="modal fade" id="tambahSlider" tabindex="-2" role="dialog" aria-labelledby="tambahSlider" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahSlider">Tambah Slider</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" id="formSlider" enctype='multipart/form-data'>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for=""><small>Nama Slider</small></label>
                                <div class="input-group input-group-alternative mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-key-25"></i></span>
                                    </div>
                                    <input class="form-control form-control-alternative" placeholder="Nama Slider"
                                        type="text" autocomplate="off" id="namaSlider">
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for=""><small>Gambar Slider</small></label>
                                <div class="input-group input-group-alternative mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-check-bold"></i></span>
                                    </div>
                                    <input class="form-control form-control-alternative" type="file" autocomplate="off"
                                        id="gambarSlider" name="gambar">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary btn-sm" id="btnTambahSlider">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- END MODAL SECTION -->