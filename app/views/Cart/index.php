<!DOCTYPE html>
<html>
<head>
	<title><?=_("Home")?></title>
</head>
<body>

<?php 
$product = new \app\models\Product();
$total = 0;
?>

<nav class="navigation">

		<div class="titleLogo">
		<h1 class="title"><a href="/User/home"><?=_("TechW0rld") ?></a></h1> <img class="logo" src="../../images/logo.png">
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
                         	<a href="/User/aboutUs"><?=_("About Us") ?></a>
                         	<a href="/Wishlist/index"><?=_("Wishlist") ?></a>
                         	<a href="/User/UpdateUser"><?=_("Edit Profile") ?></a>
					      <a class="logOutBtn" href="logout"><?=_("Log out") ?></a>
					    </div>
					  </div> 
					</div>
				</li>
			</ul>
		</div>
	</nav>


<?php
if(isset($_GET['message'])){
?>
<div class="alert alert-success" role="alert">
    <?=$_GET['message']?>
</div>
<?php
}
?>


<div class="container">
    <div class="row1">
    	<center>
        	<h1>Cart</h1>
		</center>
    </div>
    <div class="row">
        <?php foreach ($data as $item){?>
        <div class="colBox">
            <div class="card" >
                <div>
                	<hr>
	                <h4 class="card-title"><?php echo $item->product_name;?></h4>
	                <img class="productImg" src="../images/<?php echo $item->product_image;?>">
	                <p class="card-text">by <?php echo $item->product_manufacture;?></p>
					<p style="color: white;" class="card-text" class="price">$<?php echo $item->product_price;?></p>
					<a type="submit" class="remove" href='/Cart/delete/<?= $item->cart_id?>'>Remove</a>
                </div>
            </div>
        </div>

        <?php }?>

    </div>
</div>


<style type="text/css">
@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

	.productImg{
		width: 200px;
		height: 150px;
	}

	::-webkit-scrollbar{
		display: none;
	}
	.price{
		color: white;
		float: right;
	}

	.title a{
		color: white;
		text-decoration: none;
	}

	.logOutBtn{
		background-color: #b23b3b;
	}
	.row1 h1{
		color: black;
		font-size: 35px;
	}
	.row{
		display: block;
		margin: 0 auto;
		width: 100%;
	}
	.colBox{
		border-radius: 5px;
		font-size: 22px;
		padding: 15px;
		margin: 20px auto;
		width: 90%;	
	}
	.productImg{
		width: 300px;
	}
	hr{
		border-color: black;
		margin: 0;
	}

	.remove{
		font-size: 15px;
		text-decoration: none;
		margin: 10px auto;
		border-radius: 5px;
		border: none;
		color: black;
		transition: 0.3s;
		float: right;
	}
	.remove:hover{
		text-decoration: underline;
		transition: 0.3s;
	}
	body{
		font-family: 'Poppins', sans-serif;
		margin: 0;
		padding: 0;
		background-color: gray;
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

</body>
</html>