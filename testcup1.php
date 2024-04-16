<?php

//Sample
echo count8(8)."<br/>";
echo count8(818)."<br/>";
echo count8(8818)."<br/>";

//function
function count8($num)
{
	//count occurence
	$count = 0;
	//length of number
	$stringlength = strlen($num);

	for($i=0;$i<$stringlength;$i++)
	{
		$cur_number = substr($num,$i,1);
		if($cur_number == 8)  $count = $count+1;
	}
	return $count;
}
?>
