<!-- ./modal -->
<div id="forgot_password" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
      <div class="modal-content">
        <div div class="modal-header bg-light">
          <h5 class="modal-title text-lightblue"><i class="fas fa-envelope"></i>&nbsp;&nbsp;Forgot your Password</h5>
            <button type="button" class="close text-lightblue" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form class="form-horizontal" method="POST" action="phpaction/forgot_password.php" name="form">
            <div class="modal-body">
                <div class="input-group mb-3">
                    <input type="email" class="form-control" name="email" placeholder="Email" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <button type="submit" name="forgot_pass" class="btn btn-primary btn-block">Request new password</button>
                    </div>
                <!-- /.col -->
                </div>
            </div>
        </form>
      </div>
   </div>
</div>