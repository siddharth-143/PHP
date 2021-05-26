<?php

$num = 121;
$temp=$num;
$revnum = 0;

while ($num != 0)
{
    $rem = $num % 10;
    $revnum = $revnum * 10 + $rem;
    $num = (int)($num / 10); 
}
 
if($revnum==$temp)
{
    echo $temp," is Palindrome number";
}
else
{
    echo $temp." is not Palindrome number";
}

# Output ;
    /* 121 is a palindrome number */

?>