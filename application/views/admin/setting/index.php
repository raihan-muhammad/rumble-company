<div class="row">
    <div class="col-md-12 p-6">
        <div class="card shadow mt-5">
                <div class="card-header pb-0 border-0">
                    <div class="row align-items-center">
                        <div class="col-4">
                            <h3 class="mb-0">Setting Halaman home</h3>
                            <?php
                                if($jumlah > 0){ ?>
                                    <button class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Maaf Hanya bisa 1 data!">Tambah</button>
                                <?php } else { ?>
                                    <a href="<?= site_url('setting/tambah') ?>" class="btn btn-sm btn-primary my-3">Tambah</a>
                                <?php }
                            ?>
                        </div>
                        <div class="col-8">
                            <div class="alert alert-primary" role="alert">
                                <strong>Info!</strong> Menu ini adalah untuk mensetting data di bagian halaman home. Posisinya di atas bagian client bawah bagian portofolio.
                            </div>
                        </div>
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
                            <th scope="col">Judul</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Diskripsi</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no = 1;
                            foreach($setting as $s) :
                        ?>
                        <tr>
                            <td>
                                <?= $no++; ?>
                            </td>
                            <td style="width: 25%;">
                                <?= $s->judul_setting; ?>
                            </td>
                            <td>
                                <a href="<?= base_url('assets/img/setting/').$s->gambar_setting ?>" data-lightbox="roadtrip">
                                    <img class="img-thumbnail" style="width: 70%; height: 250px;" src="<?= base_url('assets/img/setting/').$s->gambar_setting ?>">
                                </a>
                            </td>
                            <td style="width: 25%;">
                                <?= $s->diskripsi_setting; ?>
                            </td>
                            <td>
                                <a href="<?= site_url('admin/setting/edit/').$s->id_setting; ?>" class="btn btn-sm btn-success" id="btnEdit" data-id="<?= $s->id_setting; ?>">Edit</a>
                                <a href="<?= site_url('admin/setting/delete/').$s->id_setting; ?>" onclick="return confirm('Yakin menghapus setting?')" class="btn btn-sm btn-danger">Hapus</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
