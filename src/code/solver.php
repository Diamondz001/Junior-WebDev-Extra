<?php
class Solver
{
	public function solveTree($lines)
	{
		$l_max = sizeof($lines)-1; //Set the max number of lines in the array.
		$total[$l_max] = $lines[$l_max]; //Makes the last time in the total array the same as the lines array.
		for($i = $l_max; $i >= 0; $i--)
		{
			for($j = 0; $j <= $i; $j++)
			{
				$total[$i][$j] = $lines[$i][$j] + (max($total[$i+1][$j],$total[$i+1][$j+1]));
				//Loops through the array starting at the second last row and adding the value to the larger of the two numbers near it in the line below.
				//Repeats until a single number is found at $total[0][0] giving us the max total path.
			}
		}
		return $total[0][0]; //Returns the max total.
	}
}
