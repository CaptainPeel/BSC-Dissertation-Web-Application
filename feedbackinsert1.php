<?php
if(isset($_POST['submit'])){
    
}
$username = $_POST['username'];
$email = $_POST['email'];
$inputtedtext = $_POST['inputtedtext'];



$dbconnect=mysqli_connect('localhost','root','','tosdb');



$sql =mysqli_query($dbconnect, "insert into userfeedback(username, email, inputtedtext) values('$username','$email','$inputtedtext')");




 if($sql){
     echo "Your data has successfully sent to the database";
     
 }
 else{
 echo "Error: You data has not been sent to the database please contact support";}
?>