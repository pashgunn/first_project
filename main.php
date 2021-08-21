<?php

function printMenu(){
    echo "MENU\n";
    echo "1. +\n";
    echo "2. -\n";
    echo "3. *\n";
    echo "4. /\n";
    echo "5. exit\n";
    echo "Choose operation: ";
}

echo "Write 2 numbers:\n";
echo "a = ";
$a = readline();
echo "b = ";
$b = readline();
do {
    printMenu();
    $menu = readline();
    switch ($menu) {
        case '+':
            echo "a + b = " . ($a + $b)  . "\n\n";
            break;
        case '-':
            echo "a - b = " . ($a - $b)  . "\n\n";
            break;
        case '*':
            echo "a * b = " . ($a * $b)  . "\n\n";
            break;
        case '/':
            echo "a / b = " . ($a / $b)  . "\n\n";
            break;
    }

} while ($menu != 'exit');
