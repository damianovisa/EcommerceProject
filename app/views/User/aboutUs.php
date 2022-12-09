<!DOCTYPE html>
<html>
<head>
	<title><?=_("About Us")?></title>
</head>
<body>

<nav class="navigation">

		<div class="titleLogo">
		<h1 class="title1"><a href="/User/home"><?=_("TechW0rld")?></a></h1> <img class="logo" src="../../images/logo.png">
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
					    	<a href="/Cart/index"><?=_("Cart") ?></a>
					    	<a href="/ContactUs/index"><?=_("Contact us") ?></a>
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

    <div class="about-section">
  <h1>About Us Page</h1>
  <p>﷽</p>
  <p>We love Michel Paquette</p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="../images/ya.jpg" alt="Yassine" style="width:100%; aspect-ratio:1.5/1; object-fit:contain;">
      <div class="container">
        <h2>Yassine El Yamani</h2>
        <p class="title">Coder</p>
        <p>My name is actually Yasmine.</p>
        <p>yasselyamani@gmail.com</p>
        <p><a href="https://github.com/YassElya" target="_blank"><button class="button">Contact</button></a></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="../images/dam.jpg" alt="Damiano" style="width:100%; aspect-ratio:1.5/1; object-fit:contain;">
      <div class="container">
        <h2>Damiano Visalli</h2>
        <p class="title">Coder</p>
        <p>Hey there.</p>
        <p>damianovisa@gmail.com</p>
        <p><a href="https://github.com/damianovisa" target="_blank"><button class="button">Contact</button></a></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="../images/am.jpg" alt="Amirreza" style="width:100%; aspect-ratio:1.5/1; object-fit:contain;">
      <div class="container">
        <h2>Amirreza Saeidi</h2>
        <p class="title">Coder</p>
        <p>I hope you enjoy the Site.</p>
        <p>arvin.saeidi@yahoo.com</p>
        <p><a href="https://github.com/AmirrezaSaeidi" target="_blank"><button class="button">Contact</button></a></p>
      </div>
    </div>
  </div>
</div>
<style type="text/css">
@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
    
    .logOutBtn{
        background-color: #b23b3b;
    }
    .title1 a{
        text-decoration: none;
        color: white;
    }
    body{
        font-family: 'Poppins', sans-serif;
        margin: 0;
        padding: 0;
        background-color: gray;
    }
    .title1{
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
    
    h2{
        color: white;
    }
    form{
/*      position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);*/
        width: 90%;
        height: 90%;
        margin: auto;

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

    .row:after{
        content: "";
      display: table;
      clear: both;
      justify-content: center;
    }
    *, *:before, *:after {
    }
    .column {
      float: left;
      width: 30%;
      margin-bottom: 16px;
      padding-left: 45px;
    }

    .card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      margin: 8px;
    }

    .about-section {
      padding: 50px;
      text-align: center;
      background-color: #474e5d;
      color: white;
    }

    .container {
      padding: 0 16px;
    }

    .container::after, .row::after {
      content: "";
      clear: both;
      display: table;
    }

    .title {
      color: rgb(30,30,30);
    }

    .button {
      border: none;
      outline: 0;
      display: inline-block;
      padding: 8px;
      color: white;
      background-color: #000;
      text-align: center;
      cursor: pointer;
      width: 100%;
    }

    .button:hover {
      background-color: #555;
    }

    
    
</style>

</body>

</html>