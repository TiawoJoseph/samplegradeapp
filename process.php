<?php


//declaring variables from html names 
$noc= $_POST ['num_course'];
$c1m =$_POST['c1m'];
$c2m =$_POST['c2m'];
$c3m =$_POST['c3m'];
$c4m =$_POST['c4m'];
$c5m =$_POST['c5m'];
$c6m =$_POST['c6m'];
$c7m =$_POST['c7m'];
$c8m =$_POST['c8m'];

//OOP to connect to the database
$mysql = new mysqli('localhost','root', 'Bootstrap-123','tgrades');



if ($mysql->connect_error){

    die('Connection Failed : '.$mysql->connect_error);
}
    else
    {
   $stmt=$mysql->prepare("INSERT INTO studentg (Num_Courses,Course 1,Course 2,Course 3,Course 4,Course 5,Course 6,Course 7,Course 8) VALUES(?,?,?,?,?,?,?,?)");
       $stmt->bind_param("iiiiiiii",$noc,$c1m,$c2m,$c3m,$c4m,$c5m,$c6m,$c7m,$c8m);
       $stmt->execute();
       echo "registration successful!!";
       $stmt->close();
        $mysql->close();
}
?>