<?php

$servername = "localhost";

$username = "id15888786_infolabzuser";

$password = "Infolabz@1234";

$dbname = "id15888786_infolabz";

$conn = new mysqli($servername, $username, $password, $dbname);

if (!$conn){

	die("Connection Failed: ". mysqli_connect_error());

} ?>

