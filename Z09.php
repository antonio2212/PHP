<?php

// Ispišite tablicu 3 x 3 na način
// da u ćelijama kuteva stavite znak X

// DZ: Napraviti da radi za bilo koja dva unesena broja
//     Putem GET metode

echo '<table border="1">';
for($i=0;$i<3;$i++){
    echo '<tr>';
    for($j=0;$j<3;$j++){
        echo '<td>';
        if(
            ($i===0 && $j===0)
            ||
            ($i===0 && $j===2)
            ||
            ($i===2 && $j===0)
            ||
            ($i===2 && $j===2)
        ){
            echo 'X';
        }else{
            echo '&nbsp;';
        }
        echo '</td>';
    }
    echo '</tr>';
}
echo '</table>';