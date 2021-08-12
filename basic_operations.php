<?php
/*
 * Arithmetical Operators
 *   +   -   *   /   %
 */
    echo 1 + 2;
    echo "<br>";
    echo 2 - 2;
    echo "<br>";
    echo 3 * 2;
    echo "<br>";
    echo 4 / 2;
    echo "<br>";
    echo 5 + 2;
    echo "<br>";

/*
 * Assignment Operators
 *   =   +=   -=   *=   /=
 */

    $x = 8;
    $x += 6;
    echo $x;
    echo "<br>";
    $x -= 3;
    echo $x;
    echo "<br>";
    $x *= 2;
    echo $x;
    echo "<br>";

/*
 * Comparison Operators
 *   ==   ===   !=   >   <
 */

    $var1 = 10;
    $var2 = 5;

    var_dump($var1 == $var2);
    echo "<br>";
    var_dump($var1 === $var2);
    echo "<br>";
    var_dump($var1 != $var2);
    echo "<br>";
    var_dump($var1 > $var2);
    echo "<br>";
    var_dump($var1 < $var2);
    echo "<br>";

/*
 * Increment and Decrement Operatos
 *   ++$x   $x++   --$x   $x--
 */

    $num = 10;
    echo ++$num;
    echo "<br>";
    echo $num++;
    echo "<br>";
    echo --$num;
    echo "<br>";
    echo $num--;
    echo "<br>";