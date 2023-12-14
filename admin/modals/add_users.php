<!-- ./modal -->
<div id="add_user" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
  <div class="modal-dialog">
      <div class="modal-content">
        <div div class="modal-header bg-light">
          <h5 class="modal-title text-lightblue"><i class="fas fa-user-plus"></i>&nbsp;&nbsp;Add User</h5>
            <button type="button" class="close text-lightblue" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form class="form-horizontal" method="POST" action="phpaction/add_user.php" name="form">
            <div class="modal-body">
                <div class="form-group">
                  <div class="input-group input-group">
                    <input type="text" class="form-control" placeholder="Username" name="username" required />
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group">
                    <input type="password" class="form-control" placeholder="Password" name="password" required />
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group">
                    <input type="password" class="form-control" placeholder="Confirm Password" name="confirm_password" required />
                  </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-b btn-sm" name="add_user_btn" style="float: right;"><i class="fa fa-paper-plane"></i>&nbspSubmit</button>
            </div>
        </form>
      </div>
   </div>
</div>