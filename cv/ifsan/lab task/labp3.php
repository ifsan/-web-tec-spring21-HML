<?php
$length = 7;
$width = 7.5;
if($length==$width) echo "This shape is a square.";
else
{
	 $area = $length * $width;
	 echo"area is: ".$area;
	 $perimeter = 2 * ($length + $width);
	 echo "<br>perimeter is: ".$perimeter;
}
?>
	 