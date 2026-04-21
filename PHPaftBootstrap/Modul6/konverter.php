<?php

    function CtoKelvin($celcius){
        $kelvin = 273.15 + $celcius;
        return $kelvin;
    }

    function CtoFahrenheit($celcius){
        $fahrenheit = 32 + (1.8*$celcius);
        return $fahrenheit;
    }

    echo "<h2> Hasil Konversi Suhu dari Celcius ke Kelvin dan Fahrenheit </h2>";

    $celcius = $_POST['celcius'];
    echo "<table>";
    echo "<tr>";
    echo "<td>Derajat Celsius</td>";
    echo "<td>:</td>";
    echo "<td>$celcius</td>";
    echo "</tr>";
    if (isset($_POST["celcius"])) {
        $hasil = CtoKelvin($_POST["celcius"]);
        echo "<tr>";
        echo "<td>Derajat Kelvin</td>";
        echo "<td>:</td>";
        echo "<td>$hasil</td>";
        echo "</tr>";
    }
    if (isset($_POST["celcius"])) {
        $hasil = CtoFahrenheit($_POST["celcius"]);
        echo "<tr>";
        echo "<td>Derajat Fahrenheit</td>";
        echo "<td>:</td>";
        echo "<td>$hasil</td>";
        echo "</tr>";
    }
    echo "</table>";
?>