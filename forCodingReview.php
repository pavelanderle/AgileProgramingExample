<?php
    $a = [15,24,47,-1,2,-45,25];
    echo $a[0];
    echo $a[1];
    echo $a[2];
    echo $a[3];
    echo $a[4];
    echo $a[5];
    echo $a[6];

    foreach ($a as $value) {
        if ($value>0) {
            $aPlus[]=$value;
        }
    }

    function rectangle($a,$b){
        $area = $a*$b;
        $perimeter = 2*($a+$b);
        return [$area,$perimeter];
    }

    $myRect=rectangle($aPlus[0],$aPlus[1]);

    foreach ($a as $value) {
        if ($value>0) {
            $aPlus[]=$value;
        }
    }

?>