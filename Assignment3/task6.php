<?php
include 'menu.inc';
//////////////////////////////Task 6(a) //////////////////////////
echo "<br >//////////////////////////////Task 6(a) //////////////////////////</br>";
function studentResults(int $m) {
    if ($m >= 75)
        echo "Distinction";
    else if ($m >= 50 && $m < 75)
        echo "Pass";
    else if ($m >= 40 && $m <= 49)
        echo "Supplementary";
    else
        echo "Fail";
}
echo studentResults(25);
echo "<br>";
echo studentResults(40);
echo "<br>";
echo studentResults(45);
echo "<br>";
echo studentResults(50);
echo "<br>";
echo studentResults(74);
echo "<br>";
echo studentResults(95);
echo "<br>";
//////////////////////////////Task 6(b) //////////////////////////
echo "<br >//////////////////////////////Task 6(b) //////////////////////////</br>";
for ($x = 1; $x <= 10; $x++) {
	$y = rand(1, 100);
    if ($y % 2 == 0) {
    	echo "The number {$y} is even <br>";
    } else {
    	echo "The number {$y} is odd <br>";
    }
}
//////////////////////////////Task 6(c) //////////////////////////
echo "<br >//////////////////////////////Task 6(c) //////////////////////////</br>";
$x = 1;
while ($x <= 10) {
	$y = rand(1, 100);
    if ($y % 2 == 0) {
    	echo "The number {$y} is even <br>";
    } else {
    	echo "The number {$y} is odd <br>";
    }
    $x++;
}
//////////////////////////////Task 6(d) //////////////////////////
echo "<br >//////////////////////////////Task 6(d) //////////////////////////</br>";
$x = 1;
while ($x <= 10) {
	$y = rand(1, 4);
    switch($y) {
        case 1:
            echo "North <br>";
            break;
        case 2:
            echo "South <br>";
            break;
        case 3:
            echo "East <br>";
            break;
        default:
            echo "West <br>";
        }
    $x++;
}

?>
<iframe src="task6.txt" height="400" width="1200">
    Your browser does not support iframes.
</iframe>
