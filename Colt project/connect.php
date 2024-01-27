<?php 
    if(isset($_POST['submit'])) {
        $name =  $_post['name'];
    $email = $_post['email'];
   $number = $_post['number'];
   $date = $_post['date'];

   $host = "local host:3306";
   $user = 'root';
   $pass = '';
   $dbname = 'contact_db';

   $conn = mysqli_connect($host, $user, $pass,$dbname);

   $sql = "insert into contact_form1(name,email,number,date) values('$name','$email','$number','$date')";
   mysqli_query ($conn, $sql);

    }

?>

