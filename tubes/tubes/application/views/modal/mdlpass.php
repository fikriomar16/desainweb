<div class="modal fade right" id="mdlpass" tabindex="-1" role="dialog" aria-labelledby="DialogModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-side modal-bottom-right" role="document">
    <div class="modal-content">
      <div class="modal-header blue-gradient text-white">
        <h5 class="modal-title text-center col-12">Reset Password</h5>
      </div>
      <div class="modal-body md-form">
        <form id="form-pass" method="POST" action="">
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fas fa-user fa-lg"></i></span>
              <input type="email" name="usermail" id="usermail" class="form-control text-center mr-sm-2" placeholder="Masukkan E-Mail Anda">
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer form-group justify-content-center">
        <button class="btn btn-sm btn-success blue-gradient" type="button" data-dismiss="modal" onclick="forpass();">
          <i class="fas fa-save"></i>&nbsp;OK
        </button>
        <button class="btn btn-sm btn-danger" type="button" data-dismiss="modal">
          <i class="fas fa-window-close"></i>&nbsp;Batal
        </button>
      </div>
    </div>
  </div>
</div>