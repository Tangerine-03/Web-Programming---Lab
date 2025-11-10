<html>
    <head></head>
    <title></title>
    <body>
    <form method="POST" action="">
        From<input type="text" name="fro"><br>
        Airline<input type="text" name="airl"><br>
        Departure Date<input type="date" name="dd"><br>
        Arrival Date<input type="date" name="ad"><br><br>
        To<input type="text" name="to"><br><br>
        Flight Number<input type="number" name="fno"><br><br>
        Terminal<input type="text" name="ter"><br><br>
        <input type="submit" name="submit">
    </form>
    </body>
</html>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="airdb";
$tbname="air";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
    die("Connection Failed".mysqli_connect_error());
}
else
{
    echo"<br><h2 align=center>Connected...</h2><br/>";
}
$fro=$_POST['fro'];
$airl=$_POST['airl'];
$dd=$_POST['dd'];
$ad=$_POST['ad'];
$to=$_POST['to'];
$fno=$_POST['fno'];
$ter=$_POST['ter'];
$query="INSERT INTO air VALUES('$fro','$airl','$dd','$ad','$to','$fno','$ter')";
$res=mysqli_query($conn,$query); 
if($res)
{
    echo"SUBMITTED SUCCESSFULLY!!";
}
else
{
    echo"ERROR";
}
include('airline.php');

?>