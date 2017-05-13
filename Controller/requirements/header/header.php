<!-- Header Start -->

<header>

  <div class="top-wrapper hidden-xs">

    <div class="container">

      <div class="col-md-4 col-sm-6 hidden-xs top-wraper-left no-padding">

        <ul class="header-social-icons">

          <li class="facebook"><a href="javascript:void(0)" target="_blank"><i class="fa fa-facebook"></i></a></li>

          <li class="twitter"><a href="javascript:void(0)" target="_blank"><i class="fa fa-twitter"></i></a></li>

          <!--<li class="linkedin"><a href="javascript:void(0)" target="_blank"><i class="fa fa-linkedin"></i></a></li>-->

          <!--<li class="pinterest"><a href="javascript:void(0)" target="_blank"><i class="fa fa-pinterest"></i></a></li>-->

          <!--<li class="google-plus"><a href="javascript:void(0)" target="_blank"><i class="fa fa-google-plus"></i></a></li>-->

          <!--<li class="youtube"><a href="javascript:void(0)" target="_blank"><i class="fa fa-youtube"></i></a></li>-->

         <!--<li class="dribbble"><a href="javascript:void(0)" target="_blank"><i class="fa fa-dribbble"></i></a></li>-->

        </ul>

      </div>

      <div class="col-md-8 col-sm-6">

        <ul class="top-right pull-right ">
			<?php include ("Controller/sign in/logins.php");?>
        </ul>

      </div>

    </div>

  </div>
  
  <div class="logo-bar hidden-xs">
    <div class="container">
      <!-- Logo -->
      <div class="row">
        <div class="col-sm-4"><a href="index.php"> <img src="Bhevu Pics/Edited/Logo/logo2.png" alt="Bhevu Logo" style="width:218px; height:46px;"></a> </div>
        <div class="col-sm-7">
          <ul class="contact-info pull-right">
            <li><i class="fa fa-phone"></i>
              <p> <span>Call us</span><br>
               036 927 4565</p>
            </li>
            <li><i class="fa fa-envelope"></i>
              <p><span>Email Us</span><br>
                <a href="mailto:lenjabulothabiso@gmail.com">BhevuHigh@yahoo.com</a></p>
            </li>
          </ul>
        </div>
        <?php
			  if(isset($_SESSION['Register']))
			  {
				  $reg = $con -> query ("select * from learner where username = '$_SESSION[username]'");
					$resul = $reg ->fetch_array(MYSQLI_BOTH);
					{
						if($resul['Register'] == "Registered")
						{
							echo "<div class='col-sm-1'><a href=''><img src='Bhevu Pics/P.Ps/17362372_1955905461304830_1811470495680181031_n.jpg' alt='Profile Pic' style='width:60px; height:60px;' class='img-thumbnail'></a> </div>";
						}
					}
			  }
		?>
      </div>
    </div>
  </div>
  <div class="wow fadeInDown navigation" data-offset-top="197" data-spy="affix">

    <div class="container">

      <nav class="navbar navbar-default">

        <div class="row">

          <!-- Brand and toggle get grouped for better mobile display -->

          <div class="navbar-header">

            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>

            <a class="navbar-brand" href="index.php"><img src="Bhevu Pics/Edited/Logo/Bhevu Logo.jpg" alt="Bhevu Logo"/></a> </div>

          <!-- Collect the nav links, forms, and other content for toggling -->

          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav">

              <li class="active"><a href="index.php">Home</a></li>

              <li><a href="about-us.php">About us</a></li>

              <li><a href="contact-us.php">Contact Us</a></li>
              
              <!--Registerd Learner-->
			  <?php include ("Controller/sign in/login_navs.php");?>

            </ul>

          </div>

          <!-- /.navbar-collapse -->

        </div>

      </nav>

    </div>

  </div>

</header>

<!-- Header End -->