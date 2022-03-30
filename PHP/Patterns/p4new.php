<?php 
$key = $count = $count_temp = 0;
$rows = 5; // add your number of row
 
for($index = 1; $index <= $rows; $index++)
{
for($space=1; $space <= $rows - $index; ++$space)
{
echo ("&nbsp;&nbsp;&nbsp;"); //add space
++$count;
}
 
while($key != 2 * $index-1)
{
if ($count <= $rows-1)
{
echo ($index + $key."&nbsp;"); //add space in numbers
++$count;
}
else
{
++$count_temp;
echo ($index + $key-2 * $count_temp."&nbsp;"); //add space in numbers
}
++$key;
}
$count_temp = $count = $key = 0;
echo ("<br>"); // brake line
}
?>