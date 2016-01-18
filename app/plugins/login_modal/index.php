<!-- Modal -->
<div id="login-modal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Register For <?php echo GUILD_NAME; ?></h4>
      </div>
      <div class="modal-body">
		<input type="text" placeholder="Email" class="form-control"></input><br />
		<input type="password" placeholder="Password" class="form-control"></input><br />
		<button type="submit" class="btn btn-success form-control">Register</button><br /><br />
		<div class="alert alert-warning">By Registering with <?php echo GUILD_NAME; ?> you agree to be bound to our 
		<a href="/tou">Terms of Use</a></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>