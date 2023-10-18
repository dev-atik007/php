<?php

my_name();
sur_name();
print_name('abcd');
print_name('efgh');
print_name('ijk');
my_address();



function my_name()
{
    echo "Atikur Rahman<br>";
}

function sur_name(){
    echo "Atik<br>";
}

function print_name($name)
{
    echo $name . "<br>";
}
//multiple parameter

function my_address(){
    echo "vill - abcd, p.o - Def, P.H - 1234";
}


?>