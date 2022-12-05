<!DOCTYPE html>
<html>
<head>
	<title><?=_("Home")?></title>
</head>
<body>

<nav class="navigation">

		<div class="titleLogo">
		<h1 class="title"><?=_("TechW0rld") ?></h1> <img class="logo" src="../../images/logo.png">
		</div>

		<div class="options">
			<ul>
				<li class="dashboard"><?=_("Your cart") ?></li>
				<li> 
					<div class="navbar">
					  	<div class="dropdown">
						    <button class="dropbtn"><?= $_SESSION['username'] ?> 
						      <i class="fa fa-caret-down"></i>
						    </button>
					    <div class="dropdown-content">
					    	<a href="/User/home"><?=_("Products") ?></a>
					    	<a href="/ContactUs/index"><?=_("Contact Us") ?></a>
                            <a href="/AboutUs/aboutus"><?=_("About Us") ?></a>
					      <a class="logOutBtn" href="logout"><?=_("Log out") ?></a>
					    </div>
					  </div> 
					</div>
				</li>
			</ul>
		</div>
	</nav>

    <p>About Us</p>
