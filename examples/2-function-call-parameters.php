<?php

// $howMany is passed to howManyBeersDoILove, and it's stored WITHIN the function as a variable
// It is ONLY stored WITHIN the function
function howManyBeersDoILove(int $howMany): int {
    return $howMany * 2;
}


// If you try to use it here, it will NOT work, because this is OUTSIDE the function
//echo $howMany;




// Echo the response of howMany... with a PARAMETER of 5
echo howManyBeersDoILove(5);
