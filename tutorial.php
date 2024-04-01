<!DOCTYPE html>
<html>
<body>

<h1><?php echo "PHP Tutorial"; ?></h1>

<?php 
    // 1. COMMENT
    // Single-line comment: //, #
    /*
        Multi-line comment
    */

    // 2. VARIABLE
    $x = 1;
    $y = "abc";

    // 3. DATA TYPE
    // String, Integer, Float, Boolean, Array, Object, NULL, Resource
    // View data type 
    var_dump( $x);

    // 4. STRING
    // view length of the string: 
    echo strlen("Hello world!");
    // view counts the number of words
    echo str_word_count("Hello World!");

    // 5. Numbers
    // Integer, Float, Number strings
    $a = 5;
    $b = 5.34;
    $c = "25";
    // NaN
    // Invalid calculation will return a NaN value
    $x = acos(8);
    // Infinity
    //numeric value is infinite 
    $x = 1.9e411;

    // 6.Casting


    // 7. Math 
    echo(pi()); // 3.14
    echo(min(0, 150, 30, 20, -8, -200)); // -200
    echo(max(0, 150, 30, 20, -8, -200)); // 150
    echo(abs(-6.7)); // 6.7
    echo(sqrt(64)); // 8
    echo(round(0.60)); // 1
    echo(round(0.49)); // 0
    echo(rand()); // random number
    echo(rand(10, 100)); //  integer between 10 and 100

    // 8. PHP Constants
    // define(name, value);
    define("GREETING", "Welcome to W3Schools.com!");
    echo GREETING; // Welcome to W3Schools.com!
    // const varName = value;
    const MYCAR = "Volvo";
    echo MYCAR;

    // 9. Operator
    // . : 	$txt1 . $txt2 : Concatenation of $txt1 and $txt2
    // .= : $txt1 .= $txt2 : Appends $txt2 to $txt1

    // 10.If else elseif 

    // 11. Switch case

    // 12. Loops
    // do while
    // for
    // foreach
    // while
    // continue
    // break

    // 13. Funcitons
    
    // 14. Arrays

    // 15.Superglobals

    // 16. Regex
    // preg_match(): Returns 1 if the pattern was found in the string and 0 if not
    // preg_match_all() :Returns the number of times the pattern was found in the string    
    // preg_replace() :Returns a new string where matched patterns have been replaced with another string

?>
</body>
</html>