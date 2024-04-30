<?php
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$servername='localhost';
$username='root';
$password='';
$dbname='school';
$conn=new mysqli("localhost","root","","school");
if ($conn->connect_error){
    die('connection failed :' .$conn->connect_error);

}
else{
    $sql=("INSERT INTO students(firstname,lastname,email,phone)
    VALUES('$firstname', '$lastname','$email', '$phone')");
}
    $sql =mysqli_query($conn, $sql);
    if($sql== true){
        echo "Records saved";

    }else{
        echo"Records not saved ";
    }
?>