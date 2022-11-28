<!DOCTYPE html>

    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<html>
<head>
	<title><?=_("Home")?></title>
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
		<h1 class="title"><?=_("TechW0rld") ?></h1> <img class="logo" src="../../images/logo.png">
		</div>

		<div class="options">
			<ul>
				<li class="dashboard"><?=_("Seller Dashboard") ?></li>
				<li>
					<div class="dropdown">
						    <button class="dropbtn"><?= $_SESSION['username'] ?> 
						      <i class="fa fa-caret-down"></i>
						    </button>
					    <div class="dropdown-content">
					      <a href="/Product/addProduct"><?=_("Add products") ?></a>
					      <a href="logout"><?=_("Log out") ?></a>
					    </div>
					  </div> 
				</li>
			</ul>
		</div>
	</nav>



	<div class="container">
    <div class="row">
        <h1>Your Products</h1>

    </div>
    <div class="row">
        <?php foreach ($data as $item){?>
        <div class="colBox">
            <div class="card" >
                <div>
                    <h4 class="card-title"><?php echo $item->product_name;?></h4>
                    <p class="card-text"><?php echo $item->product_manufacture;?></p>
					<p class="card-text">$<?php echo $item->product_price;?></p>
					<button type="submit" name="delete" class="delete">Delete</button>
                </div>
            </div>
        </div>
        <?php }?>
    </div>
</div>


<style type="text/css">
@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

	.row h1{
		color: black;
	}
	.row{
		display: flex;
		flex-wrap: wrap;
		margin: 0 auto;
		width: 90%;
		justify-content: space-evenly;
	}
	.colBox{
		border-radius: 15px;
		font-size: 22px;
		color: white;
		text-align: center;
		background-color: #332d2d;
		box-shadow: rgba(0, 0, 0, 0.24) 0px 5px 10px;
		padding: 15px;
		margin: 20px 10px;
		width: 300px;	
	}
	.card p{
		color: rgba(190, 190, 190, 1);
	}
	.delete{
		margin: 10px auto;
		border-radius: 5px;
		padding: 10px 15px;
		border: none;
		background-color: #ED4337;
		color: black;
		transition: 0.3s;
	}
	.delete:hover{
		opacity: 0.7;
		transition: 0.3s;
	}


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