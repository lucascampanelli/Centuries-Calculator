<?php

    seculoAno(2022);

    function seculoAno($ano){
        $anoCalculo = floor($ano/100);

        if($ano == $anoCalculo * 100){
            echo "O ano {$ano} faz parte do século {$anoCalculo}";
        }
        else{
            $anoCalculo++;
            echo "O ano {$ano} faz parte do século {$anoCalculo}";
        }
    }

?>