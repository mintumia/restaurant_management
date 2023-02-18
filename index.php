<?php
//use mysqli;


//$mysqli = new mysqli("localhost", "user", "", "mintudb");
//
//echo $mysqli->host_info . "\n";
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("127.0.0.1", "root", "", "mintudb", 3306);

//echo $mysqli->host_info . "\n";

$sql = "SELECT mobile FROM `users` where Id = 1";
var_dump( $mysqli->query($sql));


/*$host = `localhost`;
$user = `root`;
$pass = "";
$db = `mintudb`;

$con = mysqli_connect($host,$user,$pass,$db);

if($con){

    echo "Database Connect";
    //$sql = `Insert into users(email,user_name,pass,mobile) VALUES ('test@gmail.com','testUser','123456',12334567);`;
    $sql = `Select * from 'users'`;
    $query = mysqli_query($con,$sql);

}

if($query){

    echo "Data Insert SucessFully";
}*/
//echo "Hello World";


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <title>Home</title>
</head>
<body>
<!--Header design-->
<div>
    <header >

        <nav class="navbar navbar-expand-md navbar-dark bg-dark">

            <a href="#" class="navbar-brand">
                <h4 class="text-light">
                    Logo


                </h4>

            </a>

            <button class="navbar-toggler" type="button" data-bs-target="#mtogle" data>


                <span class="navbar-toggler-icon" ></span>
            </button>

            <ul class="navbar-nav mx-auto "  >

                <li class="nav-item">
                    <a href="#" class="nav-link">Home</a>

                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Pages</a>

                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Blog</a>

                </li>


            </ul>






        </nav>


    </header>

    <main>

        <h2 class="text-success">Hello test</h2>


    </main>




</div>



<script src="./javascripts/bootstrap.bundle.min.js"></script>
</body>
</html>
