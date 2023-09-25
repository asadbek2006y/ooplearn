<?php 
/* BOOLEANS*/ 

$isComplete = 5.5;

// integers 0 -0 = false 
// floats 0.0 -0.0 = false 
// '' = false 
// [] = false 
// null = false 

if($isComplete)
{
    echo "SUCCESS";
}
else
{
    echo "FAIL";    
}