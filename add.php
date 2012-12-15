<?php
	$con = mysql_connect("localhost","root","root");
if (!$con){
	die('Could not connect: ' . mysql_error());
}
mysql_select_db("jfriedman.lit.lightswitch", $con);

if (!$con){
	die('Could not connect: ' . mysql_error());
}
function rand_string( $length ) {
	$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";

	$size = strlen( $chars );
	for( $i = 0; $i < $length; $i++ ) {
		$str .= $chars[ rand( 0, $size - 1 ) ];
	}

	return $str;
}

for($i = 1; $i < 50; $i++){
	$username = rand_string(5);
	$password = rand_string(6);
	$first_name = rand_string(6);
	$last_name = "bob";
	$email = rand_string(6) . "@". rand_string(3) . ".com";
	$result = mysql_query("INSERT into users (username, password, first_name, last_name, email) values ('$username', '$password', '$first_name', '$last_name', '$email')");
	echo "$result";
	echo "hi";

}

for($i = 1; $i < 50; $i++ ){
	$result = mysql_query("INSERT into users_roles (user_id, role) values ('$i', Pizza maker')");
	$result = mysql_query("INSERT into users_roles  (user_id, role) values ('$i + 1','Garbage man')");
	$result = mysql_query("INSERT into users_roles  (user_id, role) values ('$i + 2','My boss')");
}

?>