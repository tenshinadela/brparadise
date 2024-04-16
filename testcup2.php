<?php

//Sample
echo noTeenSum(1, 2, 3)."<br/>";
echo noTeenSum(2, 13, 1)."<br/>";
echo noTeenSum(2, 1, 14)."<br/>";

//check if valid teen age
function fixTeen($no)
{
	//15,16 exempted from teen age
	if($no==15 || $no==16)
		return 1;
	//less then teen age
	else if($no<13)
		return 1;
	//13..19 are teen age
	else if($no>=13 AND $no <=19)
		return -1;
	else
		return 1;
}


//value of num
function noTeenSum($num1, $num2, $num3)
{
	//check if num1, num2, num3 are no teens
	$num1 = (fixTeen($num1)==-1) ? 0 : $num1;
	$num2 = (fixTeen($num2)==-1) ? 0 : $num2;
	$num3 = (fixTeen($num3)==-1) ? 0 : $num3;

	//return val
	return $num1+$num2+$num3;
}
?>

