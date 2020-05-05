<?php
	session_start();
	$id = @$_SESSION['btID'];
	if($id == "") {
		//then visitor
		$_SESSION['btID'] = "visitor";
		$id = "visitor";
	} else {
		//registered user and logged in
	}
	//echo "<h2>".isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER']:"N/A"."</h2>";
	include('templates/nav.php');
?>

<link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>


<style>.indexModule{width:80%;min-height:50px;background:#ffff;}
#searchForThis{cursor:pointer;}</style>
    <div class="indexModule">
      <div class="row">
        <div class="col-lg-12">
          <h1>Login and Post.  Search and buy.  Sell and make money.</h1>
          <p>Complete with pre-defined file paths that you won't have to change!</p>
        </div>
      </div>
    </div><!-- /.container -->
	
	<?php
		if($id != "visitor") {
			?>
			<div style="position:relative;top:25px;margin-bottom:75px;width:50%;">
				<div class="input-group">
					<span class="input-group-addon" style="background:#fff;border:0px;">Start digging:  </span>
					<input type="text" class="form-control" id="searchTerm">
					<span id="searchForThis" class="input-group-addon" style="color:#3c763d;"><i class="glyphicon glyphicon-search"></i></span>
				</div>
			</div>
			<?php
		} else {
			echo "Sign in to search...";
		}
	?>
	
	<div id="myCarousel" class="carousel slide" style="width:50%;left:25%;">
      <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <!-- <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide One');"></div> -->
			<div class="fill" style="background-image:url('assets/img/booksspeced.jpg');"></div>
            <div class="carousel-caption">
              <h1>A Full-Width Image Slider Template</h1>
            </div>
          </div>
          <div class="item">
            <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Two');"></div>
            <div class="carousel-caption">
              <h1>Caption 2</h1>
            </div>
          </div>
          <div class="item">
            <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
            <div class="carousel-caption">
              <h1>Caption 3</h1>
            </div>
          </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="icon-next"></span>
        </a>
    </div>    
	<script type="text/javascript">
		$('.carousel').carousel({
			interval: 5000
		})
		$("#searchForThis").click(function(){window.location="/projects/bookshop/actions/search";
		});
		$( "#searchTerm" ).autocomplete({
      source: "/projects/bookshop/actions/search",
      minLength: 2,
      select: function( event, ui ) {
        log( ui.item ?
          "Selected: " + ui.item.value + " aka " + ui.item.id :
          "Nothing selected, input was " + this.value );
      }
    });
	</script>
	
  </body>
</html>