<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<nav class="navigation">
		<h1 class="title"><?=_("Something to buy") ?></h1>

		<div class="options">
			<ul>
				<li><a href='/Main/index'><?=_("Home")?></a></li>
				<li><a href='/User/index'><?=_("Sign in")?></a></li>
				

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

</style>

</body>
</html>