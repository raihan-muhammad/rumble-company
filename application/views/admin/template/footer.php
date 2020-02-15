    <!-- Modal Section -->

    <!-- Modal -->
    <div class="modal fade" id="modalProfile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="gantiJudul">My Profile</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
		  </div>
		  <form action="" method="POST">
          	<div class="modal-body">
				<?php
					foreach($pengurus as $p):
				?>
				<input type="hidden" value="<?= $p->id_admin ?>" id="id">
				<div class="row" id="editProfile">
					<div class="col-12">
						<div class="form-group">
							<label for=""><small>Username</small></label>
							<div class="input-group input-group-alternative mb-4">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="ni ni-single-02"></i></span>
								</div>
								<input class="form-control form-control-alternative pl-2" placeholder="Username" type="text" value="<?= $p->username; ?>" id="userAdmin" disabled>
							</div>
						</div>
					</div>
				</div>
				<div class="row" id="editPass">
					<div class="col-12">
						<div class="form-group">
							<div class="input-group input-group-alternative mb-4">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="ni ni-key-25"></i></span>
								</div>
								<input class="form-control form-control-alternative" placeholder="Password Lama" type="password" id="passLama">
							</div>
						</div>
					</div>
					<div class="col-12">
						<div class="form-group">
							<div class="input-group input-group-alternative mb-4">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="ni ni-check-bold"></i></span>
								</div>
								<input class="form-control form-control-alternative" placeholder="Password Baru" type="password" id="passBaru">
							</div>
						</div>
					</div>
					<div class="col-12">
						<div class="form-group">
							<div class="input-group input-group-alternative mb-4">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="ni ni-check-bold"></i></span>
								</div>
								<input class="form-control form-control-alternative" placeholder="Tulis kembali Password baru" type="password" id="passUlang">
							</div>
						</div>
					</div>
				</div>
				<?php
					endforeach;
				?>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-sm btn-warning" id="batalUbah">Batal</button>
				<button type="button" class="btn btn-sm btn-warning" id="batalPass">Batal</button>
				<button type="button" class="btn btn-sm btn-info" id="ubahPass">Ubah Password</button>
				<button type="submit" class="btn btn-sm btn-primary" id="doUbahProfile">Ubah Username</button>
				<button type="submit" class="btn btn-sm btn-info" id="doUbahPass">Ubah Password</button>
				<button type="button" class="btn btn-sm btn-primary" id="btnUbahProfile">Ubah Username</button>
			</div>
		  </form>
        </div>
      </div>
    </div>

    <!-- End Modal section -->
    </div>
  </div>
  <style>
	  #editPass, #batalUbah, #doUbahProfile, #batalPass, #doUbahPass {
		  display: none;
	  }
  </style>
  <!--   Core   -->
  <script src="<?= base_url('assets/js/plugins/jquery/dist/jquery.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js') ?>"></script>
  <!--   Argon JS   -->
  <script src="<?= base_url('assets/js/argon-dashboard.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/jController/CtrlSystem.js') ?>"></script>
  <script src="<?= base_url('assets/js/toastr.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/jController/CtrlTemplate.js') ?>"></script>
  <script>
	  var controller = new CtrlTemplate();
	  var init = controller.init();
    <?php
      if(!empty($scJav)){
        echo " </script><script src='".base_url('assets/js/jController/'.$scJav['file'])."'></script> ";
        echo " <script>".$scJav['controller']."</script>";
        echo " <script>".$scJav['init']."";
      }
    ?>
  </script>
</body>

</html>