
    <div class="navbar navbar-fixed-top">
		  <div class="navbar-inner">
		    <div class="container">
		      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </a>
		      <a class="brand" href="http://hack-12-plan.herokuapp.com/index.php">Kisan Online </a>
		      <div class="nav-collapse">
		        <ul class="nav">
		          <li><a href="/news">News & Announcements </a></li>
		          <li><a href="/about">About </a></li
		        </ul>
			 
	<ul class="nav pull-right">
               	<?php
          	if ($_SESSION['loggedin']!=1  )
          		echo '<li><a href="/login">Sign Up</a></li>';
               ?>
     	        <li class="divider-vertical"></li>
               <li><?php
                if($_SESSION['loggedin']!=1) { ?>
					<form method="POST" class="form-inline" action="http://hack-12-plan.herokuapp.com/?pid=login&login=1">
 					<input type="text" name="aadhar" size="10" placeholder="Aadhar Number" />&nbsp;&nbsp;
					<input type="password" name="password" size="10"  placeholder="Password" />&nbsp;&nbsp;
 					<input type="submit" class="btn" value="Login" />
 					</form>
		<?php }
                else
                	echo "<a href='/profile'>".$_SESSION['fname']."</a>";  ?>
					
				</li>
			 </ul>    
			 </div><!-- /.nav-collapse -->
		    </div><!-- /.container -->
		  </div><!-- /navbar-inner -->
		</div><!-- /navbar -->
