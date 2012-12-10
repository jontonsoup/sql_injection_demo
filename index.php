<?php
$con = mysql_connect("localhost","root","root");
if (!$con){
	die('Could not connect: ' . mysql_error());
}
mysql_select_db("jfriedman.lit.lightswitch", $con);

if (!$con){
	die('Could not connect: ' . mysql_error());
}
?>
  <html>
  <head>
  	<title>Insert a user into my old jobs database</title>
  	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.1.1/css/bootstrap-combined.min.css" rel="stylesheet">
  </head>
  <body>
  	<div class='container'>
	  	<div class="hero-unit">
	  	<? if ($_POST["form"] == "form"): ?>
	  	<h2>Users:</h2>
	  	<?
	  		$name = $_POST['name'];

	  		$query = "SELECT id, username, password, first_name, last_name, email FROM users where username ='$name'";

	  		echo "<h3>$query</h3><br>";
	  		$result = mysql_query($query);
	  		if (!$result) {
	    		die('Invalid query: ' . mysql_error());
			}
	  		echo "<table class=\"table table-striped\"";
			while($row = mysql_fetch_array($result))
			{
			echo "<tr>";
			  	foreach($row as $key => $value){
			  		if(!is_numeric($key)){
						echo "<td>$value</td>";
					}
				}
			echo "</tr>";
			}
			echo "</table>"
			  ?>

	  	<? else: ?>
	  	<h2>Search for a user:</h2>
	  		<form action="" method="post">
	  			<input type="text" name="name" placeholder = "Find user">
	  			<input type="hidden" name="form" value="form">
	  			<br>
	  			<input type="submit" class="btn">
	  		</form>
	  	<? endif;?>
	  </div>
  </div>
  </body>
  </html>
