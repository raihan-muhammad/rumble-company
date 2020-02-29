<div class="row">
    <div class="col-md-12 p-6">
        <div class="card shadow mt-5">
                <div class="card-header pb-0 border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Gambar Slider</h3>
                            <a href="<?= site_url('produk/tambah') ?>" class="btn btn-sm btn-primary my-3">Tambah</a>
                        </div>
                        <!-- <div class="col-4">
                            <div class="form-group">
                                <div class="input-group input-group-alternative mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="ni ni-zoom-split-in"></i></span>
                                    </div>
                                    <input class="form-control form-control-alternative" placeholder="Search" type="text">
                                </div>
                                
                            </div>
                        </div> -->
                    </div>
                </div>
            
             <?php

                if($this->session->flashdata('tambah') == TRUE){ 
                echo 
                "
                    <div class='alert alert-success' role='alert'>
                        <strong>Success! </strong>".$this->session->flashdata('tambah')."
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>  
                "; 
                     
                }
             
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
            
            <div class="table-responsive">
                <!-- Projects table -->
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Produk</th>
                            <th scope="col">Gambar Produk</th>
                            <th scope="col">Diskripsi Produk</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no = 1;
                            foreach($produk as $s) :
                        ?>
                        <tr>
                            <td>
                                <?= $no++; ?>
                            </td>
                            <td style="width: 25%;">
                                <?= $s->nama_produk; ?>
                            </td>
                            <td>
                                <a href="<?= base_url('assets/img/produk/').$s->foto_produk ?>" data-lightbox="roadtrip">
                                    <img class="img-thumbnail" style="width: 70%; height: 250px;" src="<?= base_url('assets/img/produk/').$s->foto_produk ?>">
                                </a>
                            </td>
                            <td>
                                <a href="<?= site_url('admin/produk/edit/').$s->id_produk; ?>" class="btn btn-sm btn-success" id="btnEdit" data-id="<?= $s->id_produk; ?>">Edit</a>
                                <a href="<?= site_url('admin/produk/delete/').$s->id_produk; ?>" onclick="return confirm('Yakin menghapus produk?')" class="btn btn-sm btn-danger">Hapus</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
