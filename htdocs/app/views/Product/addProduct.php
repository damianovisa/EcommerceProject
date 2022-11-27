<!DOCTYPE html>
<html>
<head>
	<title><?=_("Add Product")?></title>
</head>
<body>

<?php
if(isset($_GET['error'])){
?>
<div class="alert alert-danger" role="alert">
	<?=$_GET['error']?>
</div>
<?php
}
?>

<?php
if(isset($_GET['message'])){
?>
<div class="alert alert-success" role="alert">
	<?=$_GET['message']?>
</div>
<?php
}
?>
	
<nav class="navigation">

		<div class="titleLogo">
		<h1 class="title"><?=_("Something to buy") ?></h1> <img class="logo" src="../../images/logo.png">
		</div>

		<div class="options">
			<ul>
				<li class="dashboard"><?=_("Seller add product") ?></li>
				<li>
					<div class="dropdown">
						    <button class="dropbtn"><?= $_SESSION['username'] ?> 
						      <i class="fa fa-caret-down"></i>
						    </button>
					    <div class="dropdown-content">
					      <a href="#"><?=_("Profile") ?></a>
					      <a href="Product/logout"><?=_("Log out") ?></a>
					    </div>
					  </div> 
				</li>
			</ul>
		</div>
	</nav>

<div class="addProductDiv">
			<h1 class="addProduct"><?=_("Add a new product")?></h1>	
			<form action="" method="post">
				<input type="text" name="product_name" placeholder="Product name" required>
				<input type="text" name="product_manufacturer" placeholder="Manufacturer" required>
				<input type="text" name="product_price" placeholder="Price" required>
				<input type="submit" name="action">
			</form>
		</div>

		
<style type="text/css">
@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

	body{
		font-family: 'Poppins', sans-serif;
		margin: 0;
		padding: 0;
		background-color: #ffffff;
	}
	h1{
		color: white;
	}
	.navigation{
		display: flex;
		justify-content: space-around;
		background-color: #1f2326;
		align-items: center;
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
	.addProductDiv{
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%,-50%);
	}
	.addProductDiv h1{
		color: black;
	}
	.addProductDiv input{
		display: flex;
	}
</style>

</body>
</html>