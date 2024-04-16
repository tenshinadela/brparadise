<?php

$num = 5;
$letters = array('A','B','C');
LetterGenerator($letters,$num);

function LetterGenerator($letters, $num)
{
	$functionname1 = "call".$letters[0];
	$functionname2 = "call".$letters[1];
	$functionname3 = "call".$letters[2];
	$functionname1($num);
	echo "<br/>";
	$functionname2($num);
	echo "<br/>";
	$functionname3($num);
}


function callA($num)
{
	$middle = ceil($num/2);
	for($row=0; $row<=$num;$row++)
	{
		for($col=0; $col<=$num; $col++)
		{
			if($row==0 || $row == $middle)
			{
				echo "*&nbsp";
			}
			else if($col == 0 || $col == $num)
			{
				echo "*&nbsp";
			}
			else
			{
				 echo "&nbsp&nbsp&nbsp"; 
			}
		}
		echo "<br/>";
	}
}


function callB($num)
{
	$middle = ceil($num/2);
	for($row=0; $row<=$num;$row++)
	{
		for($col=0; $col<=$num; $col++)
		{
			if($row==0 || $row == $middle || $row==$num)
			{
				echo "*&nbsp";
			}
			else if($col == 1 || $col == $num)
			{
				echo "*&nbsp";
			}
			else
			{
				 echo "&nbsp&nbsp&nbsp"; 
			}
		}
		echo "<br/>";
	}
}

function callC($num)
{
	$middle = ceil($num/2);
	for($row=0; $row<=$num;$row++)
	{
		for($col=0; $col<=$num; $col++)
		{
			if($row==0 || $row==$num)
			{
				echo "*&nbsp";
			}
			else if($col == 0)
			{
				echo "*&nbsp";
			}
			else
			{
				 echo "&nbsp&nbsp&nbsp"; 
			}
		}
		echo "<br/>";
	}
}

function callD($num)
{
	$middle = ceil($num/2);
	for($row=0; $row<=$num;$row++)
	{
		for($col=0; $col<=$num; $col++)
		{
			if($row==0 || $row==$num)
			{
				echo "*&nbsp";
			}
			else if($col == 1 || $col == $num)
			{
				echo "*&nbsp";
			}
			else
			{
				 echo "&nbsp&nbsp&nbsp"; 
			}
		}
		echo "<br/>";
	}
}

function callE($num)
{
	$middle = ceil($num/2);
	for($row=0; $row<=$num;$row++)
	{
		for($col=0; $col<=$num; $col++)
		{
			if($row==0 || $row == $middle || $row==$num)
			{
				echo "*&nbsp";
			}
			else if($col == 0)
			{
				echo "*&nbsp";
			}
			else
			{
				 echo "&nbsp&nbsp&nbsp"; 
			}
		}
		echo "<br/>";
	}
}

function callF($num)
{
	$middle = ceil($num/2);
	for($row=0; $row<=$num;$row++)
	{
		for($col=0; $col<=$num; $col++)
		{
			if($row==0 || $row == $middle)
			{
				echo "*&nbsp";
			}
			else if($col == 0)
			{
				echo "*&nbsp";
			}
			else
			{
				 echo "&nbsp&nbsp&nbsp"; 
			}
		}
		echo "<br/>";
	}
}

function callG($num)
{
	$middle = ceil($num/2);
	for($row=0; $row<=$num;$row++)
	{
		for($col=0; $col<=$num; $col++)
		{
			if($row==0 || $row == $num)
			{
				echo "*&nbsp";
			}
			else if($col == 0)
			{
				echo "*&nbsp";
			}
			else if($col == $num && $row >= $middle)
			{
				echo "*&nbsp";
			}
			else
			{
				 echo "&nbsp&nbsp&nbsp"; 
			}
		}
		echo "<br/>";
	}
}

function callH($num)
{
	$middle = ceil($num/2);
	for($row=0; $row<=$num;$row++)
	{
		for($col=0; $col<=$num; $col++)
		{
			if($row==$middle)
			{
				echo "*&nbsp";
			}
			else if($col == 0 || $col== $num)
			{
				echo "*&nbsp";
			}
			else
			{
				 echo "&nbsp&nbsp&nbsp"; 
			}
		}
		echo "<br/>";
	}
}

function callI($num)
{
	$middle = ceil($num/2);
	for($row=0; $row<=$num;$row++)
	{
		for($col=0; $col<=$num; $col++)
		{
			if($row==0 || $row == $num)
			{
				echo "*&nbsp";
			}
			else if($col == $middle)
			{
				echo "*&nbsp";
			}
			else
			{
				 echo "&nbsp&nbsp&nbsp"; 
			}
		}
		echo "<br/>";
	}
}

function callJ($num)
{
	$middle = ceil($num/2);
	for($row=0; $row<=$num;$row++)
	{
		for($col=0; $col<=$num; $col++)
		{
			if($row==0)
			{
				echo "*&nbsp";
			}
			else if($col == $middle)
			{
				echo "*&nbsp";
			}
			else if($col < $middle && $row == $num)
			{
				echo "*&nbsp";
			}
			else
			{
				 echo "&nbsp&nbsp&nbsp"; 
			}
		}
		echo "<br/>";
	}
}

function callK($num) 
{
	$middle = ceil($num/2);
	for($row=0; $row<=$num;$row++)
	{
		for($col=0; $col<=$num; $col++)
		{
			if($row==0)
			{
				echo "*&nbsp";
			}
			else if($col == $middle)
			{
				echo "*&nbsp";
			}
			else if($col < $middle && $row == $num)
			{
				echo "*&nbsp";
			}
			else
			{
				 echo "&nbsp&nbsp&nbsp"; 
			}
		}
		echo "<br/>";
	}
}

function callL($num) 
{
	$middle = ceil($num/2);
	for($row=0; $row<=$num;$row++)
	{
		for($col=0; $col<=$num; $col++)
		{
			if($row==$num)
			{
				echo "*&nbsp";
			}
			else if($col == 0)
			{
				echo "*&nbsp";
			}
			else
			{
				 echo "&nbsp&nbsp&nbsp"; 
			}
		}
		echo "<br/>";
	}
}

function callM($num) 
{
	$middle = ceil($num/2);
	for($row=0; $row<=$num;$row++)
	{
		for($col=0; $col<=$num; $col++)
		{
			if($row==0)
			{
				echo "*&nbsp";
			}
			else if($col == 0 || $col == $num)
			{
				echo "*&nbsp";
			}
			else if($col == $middle && $row <= ($num/2))
			{
				echo "*&nbsp";
			}
			else
			{
				 echo "&nbsp&nbsp&nbsp"; 
			}
		}
		echo "<br/>";
	}
}

function callN($num) 
{
	$middle = ceil($num/2);
	for($row=0; $row<=$num;$row++)
	{
		for($col=0; $col<=$num; $col++)
		{
			if($col==0 || $col == $num)
			{
				echo "*&nbsp";
			}
			else if($col == $row)
			{
				echo "*&nbsp";
			}
			else
			{
				 echo "&nbsp&nbsp&nbsp"; 
			}
		}
		echo "<br/>";
	}
}

function callO($num) 
{
	$middle = ceil($num/2);
	for($row=0; $row<=$num;$row++)
	{
		for($col=0; $col<=$num; $col++)
		{
			if($row==0 || $row == $num)
			{
				echo "*&nbsp";
			}
			else if($col == 0 || $col == $num)
			{
				echo "*&nbsp";
			}
			else
			{
				 echo "&nbsp&nbsp&nbsp"; 
			}
		}
		echo "<br/>";
	}
}


function callP($num) 
{
	$middle = ceil($num/2);
	for($row=0; $row<=$num;$row++)
	{
		for($col=0; $col<=$num; $col++)
		{
			if($row==0 || $row == $middle)
			{
				echo "*&nbsp";
			}
			else if($col == 0)
			{
				echo "*&nbsp";
			}
			else if($col == $num && $row <= $middle)
			{
				echo "*&nbsp";
			}
			else
			{
				 echo "&nbsp&nbsp&nbsp"; 
			}
		}
		echo "<br/>";
	}
}

function callQ($num) 
{
	$middle = ceil($num/2);
	for($row=0; $row<=$num;$row++)
	{
		for($col=0; $col<=$num; $col++)
		{
			if($row==0 || $row == $num)
			{
				echo "*&nbsp";
			}
			else if($col == 0 || $col = $num)
			{
				echo "* ";
			}
			else if($row >= $middle && $col == $row)
			{
				echo "* ";
			}
			else
			{
				 echo "&nbsp&nbsp&nbsp"; 
			}
		}
		echo "<br/>";
	}
}

function callR($num) 
{
	$middle = ceil($num/2);
	for($row=0; $row<=$num;$row++)
	{
		for($col=0; $col<=$num; $col++)
		{
			if($row==0 || $row == $middle)
			{
				echo "*&nbsp";
			}
			else if($col == 0)
			{
				echo "*&nbsp";
			}
			else if($col == $num && $row <= $middle)
			{
				echo "*&nbsp";
			}
			else
			{
				 echo "&nbsp&nbsp&nbsp"; 
			}
		}
		echo "<br/>";
	}
}

function callS($num) 
{
	$middle = ceil($num/2);
	for($row=0; $row<=$num;$row++)
	{
		for($col=0; $col<=$num; $col++)
		{
			if($row==0 || $row == $middle || $row == $num)
			{
				echo "*&nbsp";
			}
			else if($col == 0 || $row < $middle)
			{
				echo "*&nbsp";
			}
			else if($col == $num && $row > $middle)
			{
				echo "*&nbsp";
			}
			else
			{
				 echo "&nbsp&nbsp&nbsp"; 
			}
		}
		echo "<br/>";
	}
}

function callT($num) 
{
	$middle = ceil($num/2);
	for($row=0; $row<=$num;$row++)
	{
		for($col=0; $col<=$num; $col++)
		{
			if($row==0)
			{
				echo "*&nbsp";
			}
			else if($col == $middle)
			{
				echo "*&nbsp";
			}
			else
			{
				 echo "&nbsp&nbsp&nbsp"; 
			}
		}
		echo "<br/>";
	}
}

function callU($num) 
{
	$middle = ceil($num/2);
	for($row=0; $row<=$num;$row++)
	{
		for($col=0; $col<=$num; $col++)
		{
			if($row==$num)
			{
				echo "*&nbsp";
			}
			else if($col == 0 || $col == $num)
			{
				echo "*&nbsp";
			}
			else
			{
				 echo "&nbsp&nbsp&nbsp"; 
			}
		}
		echo "<br/>";
	}
}

function callV($num) 
{
	$middle = ceil($num/2);
	for($row=0; $row<=$num;$row++)
	{
		for($col=0; $col<=$num; $col++)
		{
			if($row==$num)
			{
				echo "*&nbsp";
			}
			else if($col == 0 || $col == $num)
			{
				echo "*&nbsp";
			}
			else
			{
				 echo "&nbsp&nbsp&nbsp"; 
			}
		}
		echo "<br/>";
	}
}

function callW($num) 
{
	$middle = ceil($num/2);
	for($row=0; $row<=$num;$row++)
	{
		for($col=0; $col<=$num; $col++)
		{
			if($row==$num)
			{
				echo "*&nbsp";
			}
			else if($col == 0 || $col == $num)
			{
				echo "*&nbsp";
			}
			else if($col == $middle || $row >= $middle && $row >= ($num/2))
			{
				echo "*&nbsp";
			}
			else
			{
				 echo "&nbsp&nbsp&nbsp"; 
			}
		}
		echo "<br/>";
	}
}

function callX($num) 
{
	$middle = ceil($num/2);
	for($row=0; $row<=$num;$row++)
	{
		for($col=0; $col<=$num; $col++)
		{
			if($row==$num)
			{
				echo "*&nbsp";
			}
			else if($col == 0 || $col == $num)
			{
				echo "*&nbsp";
			}
			else if($col == $middle || $row >= $middle && $row >= ($num/2))
			{
				echo "*&nbsp";
			}
			else
			{
				 echo "&nbsp&nbsp&nbsp"; 
			}
		}
		echo "<br/>";
	}
}

function callY($num) 
{
	$middle = ceil($num/2);
	for($row=0; $row<=$num;$row++)
	{
		for($col=0; $col<=$num; $col++)
		{
			if($row==$num)
			{
				echo "*&nbsp";
			}
			else if($col == 0 || $col == $num)
			{
				echo "*&nbsp";
			}
			else if($col == $middle || $row >= $middle && $row >= ($num/2))
			{
				echo "*&nbsp";
			}
			else
			{
				 echo "&nbsp&nbsp&nbsp"; 
			}
		}
		echo "<br/>";
	}
}

function callZ($num) 
{
	$middle = ceil($num/2);
	for($row=0; $row<=$num;$row++)
	{
		for($col=0; $col<=$num; $col++)
		{
			if($row==$num)
			{
				echo "*&nbsp";
			}
			else if($col == 0 || $col == $num)
			{
				echo "*&nbsp";
			}
			else if($col == $middle || $row >= $middle && $row >= ($num/2))
			{
				echo "*&nbsp";
			}
			else
			{
				 echo "&nbsp&nbsp&nbsp"; 
			}
		}
		echo "<br/>";
	}
}
?>
