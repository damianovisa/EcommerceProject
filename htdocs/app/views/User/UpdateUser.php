<!DOCTYPE html>
<html>
<head>
	<title><?=_("User Update profile")?></title>
</head>
<body>

<nav class="navigation">

		<div class="titleLogo">
		<h1 class="title"><a href="/User/home"><?=_("TechW0rld") ?></a></h1> <img class="logo" src="../../images/logo.png">
		</div>

		<div class="options">
			<ul>
				<li class="dashboard"><?=_("User Dashboard") ?></li>
				<li> 
					<div class="navbar">
					  	<div class="dropdown">
						    <button class="dropbtn"><?= $_SESSION['username'] ?> 
						      <i class="fa fa-caret-down"></i>
						    </button>
					    <div class="dropdown-content">
					    	<a href="/User/home"><?=_("Products") ?></a>
					    	<a href="/Cart/index"><?=_("Cart") ?></a>
					    	<a href="/ContactUs/index"><?=_("Contact Us") ?></a>
					    	<a href="/User/aboutUs"><?=_("About Us") ?></a>
							<a href="/Wishlist/index"><?=_("Wishlist") ?></a>
					      <a href="logout" class="logOutBtn"><?=_("Log out") ?></a>
					    </div>
					  </div> 
					</div>
				</li>
			</ul>
		</div>
	</nav>

<?php
if(isset($_GET['error'])){
?>
<div class="alert alert-danger" role="alert">
	<?=$_GET['error']?>
</div>
<?php
}
?>

	<div class="container">
		<form action="" method="post">
			<h2><?=_("Update")?></h2>

			<input placeholder="First name" type="text" name="fname" required>
			<input placeholder="Last name" type="text" name="lname" required>
			<input placeholder="Username" type="text" name="username" required>
			<input placeholder="Password" type="password" name="password" required>	
			<input placeholder="Confirm password" type="password" name="password_conf" required>
			<input class="register" type="submit" name="action" value="Update">

		</form>
	</div>
</body>

<style type="text/css">
	@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
	
	.logOutBtn{
        background-color: #b23b3b;
    }

	body{
		font-family: 'Poppins', sans-serif;
		margin: 0;
		padding: 0;
		background-color: gray;
	}

	.container{
		display: flex;
		position: absolute;
		padding: 5px;
		top: 50%;
		left: 50%;
		height: 500px;
		width: 20%;
		transform: translate(-50%,-50%);
		background-color: #332d2d;
		text-align: center;
		border-radius: 10px;
	}
	form{
		position: absolute;
		top: 50%;
		left: 50%;
		width: 90%;
		height: 90%;
		margin: auto;
		transform: translate(-50%,-50%);
	}
	form input{
		font-family: 'Poppins', sans-serif; 
		display: flex;
		margin: 10px auto;
		width: 90%;
		height: 35px;
		border-radius: 5px;
		outline: none;
		border:white solid 2px;
		padding: 2px 10px;
		background-color: transparent;
		color: white;
		transition: 0.3s;
	}
	.title a{
		color: white;
		text-decoration: none;
	}
	h2{
		color: white;
	}
	.register{
		padding: 0 auto;
		width: 50%;
		transition: 0.3s;
	}
	::placeholder{
		color: white;
	}
	.register:hover{
		color: black;
		background-color:white ;
		transition: 0.3s;
	}
	.login{
		text-decoration: none;
		color: #FFFFFF80;
		font-size: 13px;
	}
	form input:focus{
		transition: 0.3s;
		border: solid 2px black;
	}
	.alert-danger{
		background-color: #dc3545;
		text-align: center;
		width: 30%;
		margin: 0 auto;
		border-radius:5px;
		padding: 15px;
		color: white;
	}
	.navigation{
		display: flex;
		justify-content: space-around;
		background-color: #1f2326;
		align-items: center;
	}

	.options{
		display: flex;
	}
	.options ul{
		display: flex;
	}
	.options ul li{
		list-style: none;
	}
	.dashboard{
		margin: 0 20px;
		color: #ccc;
		cursor: default;
		line-height: 53px;
	}
	.options a{
		text-decoration: none;
		margin: 0 20px;
		color: white;
	}
	.logo{
		width: 64px;
		line-height: 64px;
	}
	.titleLogo{
		display: flex;
	}
	.dropdown {
	  float: left;
	  overflow: hidden;
	}

	.dropdown .dropbtn {
	  font-size: 16px;  
	  border: none;
	  outline: none;
	  color: white;
	  padding: 14px 16px;
	  background-color: inherit;
	  font-family: inherit;
	  margin: 0;
	}
	.dropdown:hover .dropbtn {
	  background-color: #2b2f31;
	}

	.dropdown-content {
	  display: none;
	  position: absolute;
	  background-color: white;
	  width: 160px;	
	  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
	}

	.dropdown-content a {
	  float: none;
	  color: black;
	  padding: 12px 16px;
	  margin: 10px;
	  text-decoration: none;
	  display: block;
	  text-align: left;
	}

	.dropdown-content a:hover {
	  background-color: #ddd;
	}

	.dropdown:hover .dropdown-content {
	  display: block;
	}

	.alert-danger{
		background-color: #dc3545;
		text-align: center;
		width: 30%;
		margin: 0 auto;
		border-radius:5px;
		padding: 15px;
		color: white;
	}
	.alert-success{
		background-color: #d1e7dd;
		text-align: center;
		width: 30%;
		margin: 0 auto;
		border-radius:5px;
		padding: 15px;
		color: black;
	}

</style>

</html>