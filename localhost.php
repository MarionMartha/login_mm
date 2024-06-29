<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Mar Recipes database";

//Create a connection
$conn = new mysqli($servername,$username,$password,$dbname)
$stmt=$conn->prepare("INSERT INTO customers"(id,email,password)VALUES("?,?,?"));
$STMT->bind_param("ssi",1,"marion@test.com","1234");
$stmt->execute();

