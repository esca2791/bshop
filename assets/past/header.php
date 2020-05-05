<style>
h4 {
	/*margin-top:20px;*/
}
</style>
<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" id="brandTitle" href="/projects/bt/"><h2 id="brandTitleText">OTTOBooks</h2></a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li <?php if($currentPage=="index.php"){ ?>class="active"<?php } ?>><a href="index"><h4>Home</h4></a></li>
              <li <?php if($currentPage=="about.php"){ ?>class="active"<?php } ?>><a href="about"><h4>About</h4></a></li>
              <li <?php if($currentPage=="contact.php"){ ?>class="active"<?php } ?>><a href="contact"><h4>Contact</h4></a></li>
              <?php if($sessionID == "") { } else { ?>
			  <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><h4>My Account <b class="caret"></b></h4></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li class="nav-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li>
			  <?php } ?>
            </ul>
			<?php
			if($sessionID == "") {
			?>
            <form action="action" method="POST" class="navbar-form pull-right" style="margin-top:20px;">
              <input class="span2" type="text" placeholder="Email" name="email">
              <input class="span2" type="password" placeholder="Password" name="password">
              <button type="submit" class="btn">Sign in</button>
            </form>
			<?php
				} else {
			?>
			<div class="pull-right" style="color:white;">
				<h3 style="display:inline;">Welcome Eric</h3><br>
				<a href="/projects/bt/profile/profile" class="btn btn-primary" style="display:inline;">Profile</a> | <a href="/projects/bt/logout" class="btn btn-primary" style="display:inline;">Logout</a>
			</div>
			<?php } ?>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>