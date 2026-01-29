<?php
$host = "localhost";
 $username = "root";
 $password = "";

 $dbname = "l5dc110";

 $connection = mysqli_connect($host,$username,$password,$dbname);

 $sql = "create table if not exists user (id int auto_increment primary key, username varchar(255), email varchar(30), password varchar(30), phone varchar(20))";

 if(mysqli_query($connection,$sql))
 	echo "User Table is created!<br>";
 else echo "Table Creation Failed!<br>";



?>