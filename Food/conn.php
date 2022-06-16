<?php
$sname= "localhost";

$unmae= "root";

$password = "";

$db_name = "family";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {

    echo " Joining unsuccessful 😔";}


else{
    $name=$_POST["name"];
$addr=$_POST["addr"];
$ph=$_POST["ph"];
$email=$_POST["email"];
$word=$_POST["word"];
$query="INSERT INTO members (name, addr, phno, email, text) VALUES ('$name','$addr','$ph','$email','$word')";
$run=mysqli_query($conn,$query);
if($run){
    echo "\nThanks for Joining";
}

}

?>