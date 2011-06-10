<!DOCTYPE html>

<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
	<title>Another Member Page</title>
</head>
<body>
	<?php echo modules::run('login/cp');?>
	<h2><?php echo $first_name; ?>'s Messages</h2>
     <p>This could be where the messaging system gets displayed</p>
</body>
</html>	