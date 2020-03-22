<div class="row">
    <div class="col-md-12 p-6">
        <div class="card shadow mt-5">
            <?php

                if($this->session->flashdata('status')){
                    echo "<script>alert(".$this->session->flashdata('status').")</script>";
                }

            ?>
            <div class="card-header border-0">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="mb-0">Tambah Admin</h3>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="<?= site_url('admin/daftarAdmin/doTambah') ?>" method="POST">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for=""><small>Username</small></label>
                                    <div class="input-group input-group-alternative mb-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-key-25"></i></span>
                                        </div>
                                        <input class="form-control form-control-alternative"
                                            type="text" autocomplate="off" placeholder="Masukan username" name="user" id="" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for=""><small>Password</small></label>
                                    <div class="input-group input-group-alternative mb-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-key-25"></i></span>
                                        </div>
                                        <input class="form-control form-control-alternative"
                                            type="pass" autocomplate="off" placeholder="Masukan Password" name="pass" id="" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <label for=""><small>Re-Type Password</small></label>
                                    <div class="input-group input-group-alternative mb-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-key-25"></i></span>
                                        </div>
                                        <input class="form-control form-control-alternative"
                                            type="pass" autocomplate="off" placeholder="Masukan Ulang Password" name="ulang" id="" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="<?= base_url('admini') ?>" class="btn btn-secondary btn-sm">Batal</a>
                        <button type="submit" class="btn btn-success btn-sm" id="tambahAdmin">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- <script>
    $.ajax({
        url: `${base_url}admin/do/tambah`,
        type: 'POST',
        data: {
            username: usernameAdmin,
            password: passwordAdmin
        },
        beforeSend: function () {
            btnTambahAdmin.setAttribute('disabled', 'disabled');
            btnTambahAdmin.innerHTML = 'Loading...';
        },
        success: function (res) {
            let data = JSON.parse(res);
            if (data.result == 1) {
                toastr.success(data.pesan, 'Tambah Berhasil!');
            } else {
                toastr.error(data.pesan, 'Tambah Gagal!');
                btnTambahAdmin.removeAttribute('disabled');
                btnTambahAdmin.innerHTML = 'Tambah';
            }
        }
    });
</script> -->