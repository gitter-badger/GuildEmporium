<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Guild Emporium</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
			  <?php
		  $menu = Array(
            'home' => Array("sub-home1", "sub-home2"),
            'about' => Array("sub-about", "about2" => Array("sub-sub-about")),
            'staff' => Array("sub-staff1", "sub-staff2"),
            'contact' => "contact"
        );
		?>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="/">Home</a></li>
		<?php buildMenu(); ?>
      </ul>
      <ul class="nav navbar-nav navbar-right">
	  <?php if(LOGIN_MODAL_PLUGIN_STATUS == 1) {
		  ?>

        <li><a href="#" data-toggle="modal" data-target="#login-modal">Register</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Login <span class="caret"></span></a>
          <ul class="dropdown-menu">
		    <li><a href="/login">Login</a></li>
		    <li role="separator" class="divider"></li>
            <li><a href="#">Login With Facebook (Under Dev)</a></li>
            <li><a href="#">Login With Battle Net (Under Dev)</a></li>
          </ul>
        </li>
	  <?php } ?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>