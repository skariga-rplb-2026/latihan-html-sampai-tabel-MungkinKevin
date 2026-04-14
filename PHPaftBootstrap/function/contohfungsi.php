<?php
    $angkaAcak = rand(1,9999999);
    echo "Angka Acak :  $angkaAcak <br/>";

    $pi = pi();
    echo "Nilai phi = $pi <br/>";

    $menjadiPositif = abs(-12);
    echo "-12 akan menjadi $menjadiPositif <br/>";

    $pangkat = pow(2,3);
    echo "2 pangkat 3 = $pangkat<br/>";

    $akar = sqrt(49);
    echo "Akar angka 49 : $akar <br/>";

    $decimal = 123.6783;
    echo "Nilai Decimal : $decimal <br/>";

    $pembulatan = floor($decimal);
    echo "Pembulatan nilai decimal ke bulat : $pembulatan <br/>";

    $pembulatannaik = ceil($decimal);
    echo "Pembulatan nilai naik : $pembulatannaik <br/>";

    $pendekatan = round(12.67849,3); #3 itu untuk digit angka dibelakang koma
    echo "Pendekatan nilai : $pendekatan <br/>";

    echo sqrt(pow(2,3) - 4);
?>