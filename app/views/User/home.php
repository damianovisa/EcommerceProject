<!DOCTYPE html>
<html>
<head>
	<title><?=_("Home")?></title>
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
					    	<a href="/Cart/index"><?=_("Cart") ?></a>
					    	<a href="/Wishlist/index"><?=_("Wishlist") ?></a>
					    	<a href="/ContactUs/index"><?=_("Contact Us") ?></a>
					    	<a href="/User/aboutUs"><?=_("About Us") ?></a>
					    	<a href="/User/UpdateUser"><?=_("Edit Profile") ?></a>
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
    <div class="row">
        <h1><?=_("Products")?></h1>

    </div>
    <div class="row">
        <?php foreach ($data as $item){?>
        <div class="colBox">
            <div class="card" >
                <div>
                    <h4 class="card-title" name="product_name"><?php echo $item->product_name;?></h4>
                    <img class="productImg" src="../images/<?php echo $item->product_image;?>">
                    <p class="card-text" name="product_manufacture">by <?php echo $item->product_manufacture;?></p>
					<p class="card-text" name="product_price">$<?php echo $item->product_price;?></p>
					<a type="submit" name="add" class="addToWishlist" href='/Wishlist/addToWishlist/<?= $item->product_id?>'><?=_("Add to wishlist") ?></a>
					<a type="submit" name="add" class="addToCart" href='/Cart/addToCart/<?= $item->product_id?>'><?=_("Add to cart") ?></a>
					<a type="submit" name="add" class="reviews" href='/Cart/reviews/<?= $item->product_id?>'><?=_("Reviews") ?></a>
                </div>
            </div>
        </div>
        <?php }?>
    </div>
</div>


<style type="text/css">
@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
	
	::-webkit-scrollbar{
		display: none;
	}

	.productImg{
		width: 70%;
		height: 150px;
	}

	.title a{
		color: white;
		text-decoration: none;
	}

	.logOutBtn{
		background-color: #b23b3b;
	}

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
		width: 350px;	
	}
	.card div{
		text-align: center;
	}
	.card p{
		color: rgba(190, 190, 190, 1);
	}
	.addToCart{
		font-size: 15px;
		text-decoration: none;
		margin: 10px auto;
		border-radius: 5px;
		padding: 5px 10px;
		border: none;
		background-color: #5cdb5c;
		color: black;
		transition: 0.3s;
	}
	.addToCart:hover{
		opacity: 0.7;
		transition: 0.3s;
	}
	.addToWishlist{
		font-size: 15px;
		text-decoration: none;
		margin: 10px auto;
		border-radius: 5px;
		padding: 5px 10px;
		border: none;
		background-color: #6888B4;
		color: black;
		transition: 0.3s;
	}
	.addToWishlist:hover{
		opacity: 0.7;
		transition: 0.3s;
	}
	.reviews{
		font-size: 15px;
		text-decoration: none;
		margin: 10px auto;
		border-radius: 5px;
		padding: 5px 10px;
		border: none;
		background-color: #FDCC0D;
		color: black;
		transition: 0.3s;
	}
	.reviews:hover{
		opacity: 0.7;
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

</body>
</html>