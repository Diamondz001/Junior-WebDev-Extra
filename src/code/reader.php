<?php

class Reader
{	
	private $_count = 0; //Counts the number of the current line.
	private $lines;

	public function readTree($tree)
	{
		$handle = fopen($tree,"r"); //Open the file.
		$lines[0][0] = fgetc($handle); //Manually set the first value in the file to the array.
		if ($handle)
		{
			while (($line = fgets($handle)) !== false)
			{
				$lines[$_count] = array_map('trim',explode(" ", $line)); //Add each number to the multi array.
				$_count++; //Increment the line counter.
			}
			fclose($handle); //Close the file.
			return $lines; //Return the new array.
		} else
		{
			echo "Cannot read file/n";
		}
		
	}
}
