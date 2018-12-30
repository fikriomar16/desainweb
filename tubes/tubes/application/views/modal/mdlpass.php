<div class="modal fade right" id="mdlpass" tabindex="-1" role="dialog" aria-labelledby="DialogModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-side modal-bottom-right cascading-modal" role="document">
    <div class="modal-content">
      <div class="modal-header text-white amy-crisp-gradient">
        <h5 class="modal-title text-center col-12">Reset Password</h5>
      </div>      
      <form id="form-pass" method="POST" action="<?= base_url('kirimreset') ?>">
        <div class="modal-body md-form">
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fas fa-user fa-lg animated rotateIn"></i></span>
              <input type="email" name="usermail" id="usermail" class="form-control text-center mr-sm-2" placeholder="Masukkan E-Mail Anda">
            </div>
          </div>
        </div>
        <div class="modal-footer form-group justify-content-center">
          <button class="btn btn-sm btn-success amy-crisp-gradient" type="submit">
            <i class="fas fa-save animated rotateIn"></i>&nbsp;Submit
          </button>
          <button class="btn btn-sm btn-danger" type="button" data-dismiss="modal">
            <i class="fas fa-window-close animated rotateIn"></i>&nbsp;Batal
          </button>
        </div>
      </form>
    </div>
  </div>
</div>