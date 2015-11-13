<!DOCTYPE html>
<html>
<head>
	  <meta charset="UTF-8">
	  <title>inValide</title>
	<link rel="stylesheet" type="text/css" href="css/Two Column (Liquid).css">
	<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />
 
<script src="js/jquery-1.11.0.min.js"></script>
	<script src="js/lightbox.min.js"></script>
  <script src="js/jquery-1.9.1.min.js"></script>
<link href="css/lightbox.css" rel="stylesheet" />
<script>
    $(document).ready(function() {
        $( '.dropdown' ).hover(
            function(){
                $(this).children('.sub-menu').slideDown(200);
            },
            function(){
                $(this).children('.sub-menu').slideUp(200);
            }
        );
    });
</script>

</head>
<body>
	<div id="container">
		<div id="header">
			<img src="logo.jpg" position="absolute" float="left">
		
		</div>
		<div id="navigation">
			<ul>
			   <li><a href="index.php">Domů</a></li>
				<li><a href="onas.php">O nás</a></li>
				<li class="dropdown">
        <a href="#">Členové týmu</a>
        <ul class="sub-menu">
        <li><a href="#">ME</a></li>
        </ul>
        </li>
				<li><a href="screen.php">Screenshoty</a></li>
				<li><a href="videa.php">Videa</a></li>
				<li><a href="stream.php">Stream</a></li>
				<li><a href="http://www.dotabuff.com/teams/1763201" target="_blank">Dotabuff</a></li>
				
			</ul>
		</div>
		<div id="content-container">
			<div id="content">