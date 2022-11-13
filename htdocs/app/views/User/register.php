<!DOCTYPE html>
<html>
<head>
	<title><?=_("Register")?></title>
</head>
<body>

<?php $this->view('header')?>

	<div class="container">
		<form>
			<h2><?=_("Register")?></h2>
			<input placeholder="Username" type="text" name="username" required>
			<input placeholder="Password" type="password" name="password" required>
			<input placeholder="Confirm password" type="password" name="password_conf" required>
			<a class="login" href="index"><?=_("Have an account?")?></a>
			<input class="register" type="submit" name="action" value="Register">
		</form>
	</div>
</body>

	<style type="text/css">
	@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
	
	body{
		font-family: 'Poppins', sans-serif;
		margin: 0;
		padding: 0;
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


	</style>

</html>