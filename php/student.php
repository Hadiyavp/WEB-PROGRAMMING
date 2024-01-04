<html>
<body bgcolor=" #f7a6ad">
<h2><center><u>NAME OF STUDENTS</u></center></h2>
<?php
$name=["HADIYA","LUMNA","NEHA","LIYANA","HAFNA"];
$t=$name;
echo"Displaying using print_r<br>";
print_r($name);
echo"<br><br>";
echo"sorting using asort()<br>";
asort($name);
print_r($name);
echo"<br><br>";
echo"sorting using arsort()<br>";
arsort($t);
print_r($t);
?>
</body>
</html>
