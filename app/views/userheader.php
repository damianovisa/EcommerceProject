<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<nav class="navigation">

		<div class="titleLogo">
		<h1 class="title"><?=_("TechW0rld") ?></h1> <img class="logo" src="../../images/logo.png">
		</div>

		<div class="options">
			<ul>
				<li><a href='/Seller/index'><?=_("Seller log in")?></a></li>
				

			</ul>
		</div>
	</nav>

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

	.options{
		display: flex;
	}
	.options ul{
		display: flex;
	}
	.options ul li{
		list-style: none;
	}
	.options ul a{
		text-decoration: none;
		margin: 0 20px;
	}
	.options ul a{
		color: white;
	}
	.logo{
		width: 64px;
		line-height: 64px;
	}
	.titleLogo{
		display: flex;
	}
</style>

</body>
</html>