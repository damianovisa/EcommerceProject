<!DOCTYPE html>
<html>
<head>
	<title><?=_("Add Product")?></title>
</head>
<body>

<nav class="navigation">

		<div class="titleLogo">
		<h1 class="title"><a href="/Seller/home"><?=_("TechW0rld") ?></a></h1> <img class="logo" src="../../images/logo.png">
		</div>

		<div class="options">
			<ul>
				<li class="dashboard"><?=_("Add product") ?></li>
				<li>
					<div class="dropdown">
						    <button class="dropbtn"><?= $_SESSION['username']?> 
						      <i class="fa fa-caret-down"></i>
						    </button>
					    <div class="dropdown-content">
					      <a href="/Seller/home"><?=_("View your products") ?></a>
					      <a href="/ContactUs/viewMessages"><?=_("View messages") ?></a>
					      <a class="logOutBtn" href="logout"><?=_("Log out") ?></a>
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

<?php
if(isset($_GET['message'])){
?>
<div class="alert alert-success" role="alert">
	<?=$_GET['message']?>
</div>
<?php
}
?>
	


<div class="addProductDiv">
			
			<form action="" method="post">
				<h2 class="addProduct"><?=_("Add a new product")?></h2>	
				<input type="text" name="product_name" placeholder="Product name" required>
				<input type="text" name="product_manufacture" placeholder="Manufacturer" required>
				<input type="text" name="product_price" placeholder="Price" required>
				<!-- <input type="file" name="product_image" required> -->
				<input type="submit" name="action" class="add" value="Add">
			</form>
</div>



		
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
	.title a{
		text-decoration: none;
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
	.addProductDiv{
		display: flex;
		padding: 5px;
		margin: 25px auto;
/*		position: absolute;*/
		/*top: 50%;
		left: 50%;*/
		height: 550px;
		width: 80%;
/*		transform: translate(-50%,-50%);*/
		background-color:#332d2d;
		text-align: center;
		border-radius: 10px;
	}
	h2{
		color: white;
	}
	form{
/*		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%,-50%);*/
		width: 90%;
		height: 90%;
		margin: auto;

	}
	form input{ 
		display: flex;
		margin: 25px auto;
		width: 100%;
		height: 35px;
		border-radius: 5px;
		outline: none;
		border:white solid 2px;
		padding: 5px 10px;
		background-color: transparent;
		color: white;
		font-size: 16px;
		transition: 0.3s;
	}
	.add{
		margin: 10px auto;
		border-radius: 5px;
		padding: 10px 15px;
		border: none;
		background-color: #5cdb5c;
		color: white;
		transition: 0.3s;
		width: 20%;
	
	}
	::placeholder{
		color: white;
	}
	.add:hover{
		opacity: 0.7;
		transition: 0.3s;
	}
	form input:focus{
		transition: 0.3s;
		border: solid 2px black;
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
	  z-index: 2;
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
	
</style>

</body>
</html>