<!-- Paminus Murungi CIT-223-032/2018
purity nyakundi -CIT-227-028/2018
Alois Mutharimi - CIT-227-001/2018
Collins Kipkorir - CIT-227-006/2018
Tom Ngunyi King'ori - CIT-227-029/2018
Brian Nyagwansa Nyagwansa - CIT-227-032/2018
BruceFelix Macharia CIT-223-015/2018 -->




<?php
//create db connection
$user = 'room5';
$host = 'localhost';
$password = 'room5';
$database = 'ecycle';

if($connection = mysqli_connect($host,$user,$password,$database)){
    // echo "<h3 style='color:green'>Connected successfully</h3>";
}
else{
    echo"<h3 style='color:red'>Could not connect successfully</h3>" .mysqli_error($connection);
}



$dbCreator = 'CREATE DATABASE ecycle'; 
//sql statement
// if(mysqli_query($connection,$dbCreator)){
//     echo "<h3 style='color:green'>DB created successfully</h3>";

// }
// else{
//     echo "<h3 style='color:red'>DB not created</h3>".mysqli_error($connection);

// }

// //creating table
$tableCreator = "CREATE TABLE userdetails (id int auto_increment, username varchar(30), password varchar(253), primary key(id), email varchar(50) , dob DATE, code varchar(50))";
// if(mysqli_query($connection,$tableCreator)){
//     echo "<h3 style='color:green'>Table created successfully</h3>";
// }
// else{
//     echo "<h3 style='color:red'>table not created</h3>".mysqli_error($connection);
// }

// $tableCreator = "CREATE TABLE bikedetails (id int auto_increment, prodname varchar(30), biketype varchar(50), primary key(id), price int, bikecondition varchar(40), picture varchar(50))";
// if(mysqli_query($connection,$tableCreator)){
//     echo "<h3 style='color:green'>Table created successfully</h3>";
// }
// else{
//     echo "<h3 style='color:red'>table not created</h3>" .mysqli_error($connection);
// }

?>