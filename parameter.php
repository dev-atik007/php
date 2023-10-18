<?php

my_name();
sur_name();
print_name('abcd');
print_name('efgh');
print_name('ijk');

my_address('Abcd', 'kxjfd', '67575');



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

function my_address($vill, $post, $phone){
    echo "vill - $vill, p.o - $post, P.H - $phone";
}


?>