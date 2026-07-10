<?php
    // variables = A reusable container that holds data
    //             string, integer, float, boolean

    //String
    $name="Aman Patil";
    $code="PHP";
    $email="fake123@gmail.com";

    //Integer
    $age=21;
    $user=2;
    $quantity=3;

    //Float
    $gpa=2.5;
    $price=50;
    $tax_rate=5.1;

    //Boolean
    $employed=true;
    $online=false;
    $for_sale=true;

    echo"Hello {$name}<br>";
    echo"I am Coding in {$code}<br>";
    echo"E-mail :{$email}<br>";

    echo"I am {$age} years old<br>";
    echo"There are {$user} users online<br>";
    echo"You would like to buy {$quantity} items<br>";

    echo"Your GPA is {$gpa}<br>";
    echo"your Pizza is \${$price}<br>";
    echo"The sale tax rate is :{$tax_rate}%<br>";

    echo"Online Status of Empolyee :{$employed}<br>";
    echo"Online Status : {$online}<br>";
    echo"For Sale : {$for_sale}<br>";

?>