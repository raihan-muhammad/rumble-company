<div class="row">
    <div class="col-md-12 p-6">
        <div class="card shadow mt-5">
                <div class="card-header pb-0 border-0">
                    <div class="row align-items-center">
                        <div class="col-4">
                            <h3 class="mb-0">Setting Alur</h3> 
                            <a href="<?= site_url('alur/tambah') ?>" class="btn btn-sm btn-primary my-3">Tambah</a>  
                            
                        </div>
                        <div class="col-8">
                            <div class="alert alert-primary" role="alert">
                                <strong>Info!</strong> Menu ini adalah untuk mensetting alur di bagian halaman home. Posisinya di bawah slider
                            </div>
                        </div>
                    </div>
                    <hr class="mt-0">
                    <?php foreach($warna as $w) : ?>
                    <form action="<?= site_url('alur/warna') ?>" method="POST">
                        <div class="row mb-2">
                            <div class="col-2">
                                <input type="color" class="form-control" name="warna" data-toggle="tooltip" data-placement="top" value="#fff" title="Klik untuk memilih warna">
                            </div>
                            <div class="col-4 pt-2">
                                <small>Warna background saat ini : <?= $w->warna; ?></small>
                            </div>
                            <div class="col-6 mt--2">
                                <button type="submit" class="btn btn-sm btn-default my-3">Ubah Background</a>
                            </div>
                        </div>
                    </form>
                    <?php endforeach; ?>
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
                            <th scope="col">Nama Alur</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no = 1;
                            foreach($alur as $s) :
                        ?>
                        <tr>
                            <td>
                                <?= $no++; ?>
                            </td>
                            <td style="width: 25%;">
                                <?= $s->nama_alur; ?>
                            </td>
                            <td>
                                <a href="<?= site_url('admin/alur/edit/').$s->id_alur; ?>" class="btn btn-sm btn-success" id="btnEdit" data-id="<?= $s->id_alur; ?>">Edit</a>
                                <a href="<?= site_url('admin/alur/delete/').$s->id_alur; ?>" onclick="return confirm('Yakin menghapus alur?')" class="btn btn-sm btn-danger">Hapus</a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
