<?php

//Sample 1
$score1 = array(12,10,4);
$score2 = array(2,20,30);

//Sample 2
// $score1 = array(20, 10, 4);
// $score2 = array(2, 20, 10);

//Sample 3
// $score1 = array(12, 11, 4);
// $score2 = array(2, 20, 31);

echo scoresSpecial($score1, $score2);

//check if array number is multple of 10
function multipleof10($score)
{
	for($i=0;$i<3;$i++)
	{
		$cur_num = $score[$i];
		if($cur_num%10 != 0)
		{
			$score[$i] = 0;
		}
	}
	return $score;  
}

function scoresSpecial($score1, $score2)
{
	//removing/excluding non multiples of 10
	//getting highest value from multiples of 10
	$score1 = max(multipleof10($score1));
	$score2 = max(multipleof10($score2));

	return $score1+$score2;
}
?>