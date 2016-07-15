<?php
include "src/bootstrap.php";

$startTime = microtime(true);

$solver = new Solver();
$reader = new Reader();

$tree = $reader->readTree("src/tree.txt");
$total = $solver->solveTree($tree);

echo sprintf("The max total is %s. ", $total); //Provides the answer.
echo sprintf("This took: %s seconds to complete.", (microtime(true) - $startTime)); //Times the function.