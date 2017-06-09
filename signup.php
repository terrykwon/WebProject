<?php

$username = $_POST["username"];
$password = $_POST["password"];
$birthdate = $_POST["birthdate"];
$tel =  $_POST["tel"];

$accountsFile = fopen("accounts.txt", "a+");
fwrite($accountsFile, $username."\n");
fwrite($accountsFile, $password."\n");
fwrite($accountsFile, $birthdate."\n");
fwrite($accountsFile, $tel."\n");
fwrite($accountsFile, "\n");
fclose($accountsFile);

header("Location: index.html");

?>

<html>
<p>
<?php echo $username; ?>
</p>
</html>