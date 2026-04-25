<?php

//Tamari Rhymes 10/03/2025
//Program 8 Quadratic Equation in php

for ($i = 0; $i < 5; $i++) { //for loop to iterate through exactly 5 times

    echo "Welcome to the Quadratic Equation Solver\n";
    
    //request user input and declare data type
    do { //ensures that if user iputs 0 for A, it wont count in the 5 turns
        echo "Please enter your A value, cannot be zero: \n";
        $a_val = (float)readline();
        if ($a_val == 0) {
            echo "A cannot be zero. Please enter another number.\n";
        }
    } 
    while ($a_val == 0);
    //request user input and declare data type
    echo "Please enter your B value: \n";
    $b_val = (float)readline();
    echo "Please enter your C value: \n";
    $c_val = (float)readline();


    //equation/calculate to determine the discriminant value
    $discrim = ($b_val * $b_val) - (4 * $a_val * $c_val);
    echo "discriminant == $discrim\n";

    if ($discrim >= 0) {
        //determine real roots
        $Rroot1 = (-$b_val + sqrt($discrim)) / (2 * $a_val);
        $Rroot2 = (-$b_val - sqrt($discrim)) / (2 * $a_val);
        echo "Real root 1 is: $Rroot1\n";
        echo "Real root 2 is: $Rroot2\n";
    }
    else {
        //determine complex roots
       $realPart = -$b_val / (2 * $a_val);
       $imagpart = sqrt(-$discrim) / (2 * $a_val);
       $Croot1 = $realPart . " + " . $imagpart . "i";
       $Croot2 = $realPart . " - " . $imagpart . "i";
       echo "Complex root 1 is: $Croot1\n";
       echo "Complex root 2 is: $Croot2\n";
    }
    // compare real roots to see if they're the same
    if ($discrim >= 0) {
        if ($Rroot1 == $Rroot2) {
            echo "The roots are the same.\n";
        }
        else {
            echo "The roots are not the same.\n";
        }
    }
}

?>