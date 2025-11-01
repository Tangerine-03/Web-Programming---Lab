<?php
echo"Sorting Array<br/>";
echo"==========<br/>";
$stud=array("Harry","Tobi","Simon","KSI","Ethan","Josh","Vik");
echo"Displaying array using print_r():";
print_r($stud);
echo"<br>Array in Ascending Order:<br/>";
asort($stud);
print_r($stud);
echo"<br>Array in Descending Order:<br/>";
arsort($stud);
print_r($stud);
?>
