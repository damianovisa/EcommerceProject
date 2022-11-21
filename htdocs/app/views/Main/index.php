<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?=_("Home")?></title>
</head>
<body>

	<?php $this->view('/User/index')?>
	<?php header('location:/User/index') ?>
	

</body>
</html>