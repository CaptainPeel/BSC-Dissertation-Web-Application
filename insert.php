<?php
if(isset($_POST['submit'])){
    
}
$username = $_POST['username'];
$email = $_POST['email'];
$companyname = $_POST['companyname'];
$toslink = $_POST['toslink'];
$toscustomdata = $_POST['toscustomdata'];


$dbconnect=mysqli_connect('localhost','root','','tosdb');



$sql =mysqli_query($dbconnect, "insert into table_tos(username,email,companyname,toslink,toscustomdata) values('$username','$email','$companyname','$toslink','$toscustomdata')");




 if($sql){
     echo "Your data has successfully sent to the database";
     
 }
 else{
 echo "Error: Your data has not been sent to the database please contact support";}
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