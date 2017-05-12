<?php

  if(isset($_SESSION['username']) || isset($_SESSION['userid']) || isset($_SESSION['id_stuff']))

  {

	 echo "

	  <!-- Lgout -->

  <li class='register'><a href='javascript:void(0)'><i class='fa fa-user'></i>Logout</a>

	<div class='register-form'>

	  <h4>Logout</h4>

	  <form action='Logout.php' method='post'>

		<button type='submit' class='btn'>Logout</button>

	  </form>

	</div>

  </li>";}
  else

  {

	  echo "

  <!-- Login -->

  <li class='login'><a href='javascript:void(0)'><i class='fa fa-lock'></i>Login</a>

	<div class='login-form'>

	  <h4>Login</h4>

	  <form action='' method='post'>

		<input type='text' name='username' placeholder='Username'>

		<input type='password' name='password' placeholder='Password'>
		<!--Button-->
		<button type='submit' name='login' class='btn'>Login</button>

	  </form>

	</div>

  </li>
  <!-- Apply -->

  <li class='register'><a href='Apply.php'><i class='fa fa-user'></i>Apply</a>

	<div class='register-form'>

	  <h4>Apply</h4>
	  
	  <form action='Apply.php' method='post'>
		<!--Button-->
		<button type='submit' name='Apply' class='btn'>Apply</button>

	  </form>

	</div>

   </li>";}
		
		if(isset($error)){echo $error;}
  ?>
