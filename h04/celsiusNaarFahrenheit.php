<?php

function celsiusNaarFahrenheit($celsius){
    $fahrenheit = $celsius *1.8+32;
    echo $celsius." graden Celsius = ".$fahrenheit." graden Fahrenheit";
}
celsiusNaarFahrenheit( 30);
