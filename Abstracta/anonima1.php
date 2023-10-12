<?php

$multiplo5 = function($numero)
{
    if ($numero % 5 == 0){
        echo 'El numeor es multiplo';
    }
    else{
        echo 'El numero no es multiplo';
    }
};

$multiplo5(22);