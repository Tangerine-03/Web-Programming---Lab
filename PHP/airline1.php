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
$dbname="empdb";
$tbname="emp";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
    die("Connection Failed".mysqli_connect_error());
}
else
{
    echo"<br><h2 align=center>Connected...</h2><br/>";
}
$fro=$_POST['eid'];
$airl=$_POST['ename'];
$dd=$_POST['dept'];
$ad=$_POST['sal'];
$to=$_POST['sal'];
$fno=$_POST['sal'];
$ter=$_POST['sal'];
$query="INSERT INTO emp(eid,ename,dept,sal)
VALUES('".$id."','".$name."','".$dep."','".$salary."')";
$res=mysqli_query($conn,$query);
if($res)
{
    echo"SUBMITTED SUCCESSFULLY!!";
}
else
{
    echo"ERROR";
}
mysqli_close($conn);
?>