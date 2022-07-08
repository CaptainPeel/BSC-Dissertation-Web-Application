<?php
if(isset($_POST['submit'])){
    
}
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$confpassword = $_POST['confpassword'];


$dbconnect=mysqli_connect('localhost','root','','tosdb');



$sql =mysqli_query($dbconnect, "insert into tablesignup_tos(firstname,lastname,email,password,confpassword) values('$firstname','$lastname','$email','$password','$confpassword')");




 if($sql){
     echo "Your account has successfully been created";
     
 }
 else{
 echo "Error: You data has not been sent to the database please contact support";}
 
?>
<html>
    <head>
        <title>Read Your Reviews!</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
    </head>
    <body>
          
        <br>
        <br>
        <br>
                 <a href=http://localhost/welcome.php onclick="basicPopup3(this.href);return false">Return back to the welcome page</a>
    <script>
    // JavaScript popup window function
    function basicPopup3(url) {
        popupWindow = window.open(url, 'popUpWindow', 'height=420,width=470,left=50,top=50,resizable=yes,scrollbars=yes,\n\
toolbar=yes,menubar=no,location=no,directories=no, status=yes')
    }

</script>
    

    </body>
</html>