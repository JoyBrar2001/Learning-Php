<?php
    $name = "Bro";
    $food = "pizza";
    $email = "fake@gmail.com";

    $age = 21;
    $users = 2;
    $quantity = 4;

    $gpa = 2.5;
    $price = 4.99;

    $employed = true;
    $online = false;
    $for_sale = true;

    echo "Hello {$name}<br/>";
    echo "You like {$food}<br/>";
    echo "Your email is {$email}<br/>";

    echo "You are {$age} years old<br/>";
    echo "There are {$users} online<br/>";
    echo "You would like to buy<br/>";

    echo "Your gpa is: {$gpa}<br/>";
    echo "Your pizza is: \${$price}<br/>";

    echo "You are {$employed}<br/>";
    echo "Online status : {$online}<br/>";

    $total = null;

    echo "You have ordered {$quantity} x {$food}s<br/>";
    $total = $quantity * $price;
    echo "Your total is: {$total}<br/>";
?>