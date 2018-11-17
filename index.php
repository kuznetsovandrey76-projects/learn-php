<?php
if(isset($_POST["done"])) {
	if($_POST["firstname"] === "") {
		echo "Введите имя. <a href='/'>Исправить</a>"; 
	} else {
		header("Location:index.php");
	}
} 
// php - personal home page 
// echo PHP_VERSION; 
echo print_r($_POST);	

$url=parse_url(getenv("CLEARDB_DATABASE_URL"));

    $server = $url["host"];
    $username = $url["user"];
    $password = $url["pass"];
    $db = substr($url["path"],1);

    mysqli_connect($server, $username, $password);
    mysqli_select_db($db);


?>
	

<body>
	
<form name="data" action="index.php" method="POST">
	<input type="text" name="firstname" placeholder="First name">
	<input type="text" name="lastname" placeholder="Last name">
	<input type="submit" name="done" value="Send">	
</form>

</body>
