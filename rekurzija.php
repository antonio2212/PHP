<?php

// Rekurzija je kada funckija zove samu sebe
/*
function rekurzija()
{
    rekurzija();
}
rekurzija();
stackoverflow error
*/

// Rekurzija je kada funckija zove samu sebe
// uz uvijet prekida rekurzije

// zadatak zbrojiti prvih 100 brojeva
$suma=0;
for($i=1;$i<=100;$i++){
    $suma+=$i;
}
echo $suma, '<hr />';

//rješenje zadatka s rekurzijom
function zbroj($broj)
{
    if($broj===1){
        return 1;
    }
    return $broj + zbroj($broj-1);
}

echo zbroj(100),'<hr />';

// primjer rekurzije koju nije moguće realizirati s petljama

require_once 'vrstefunkcija.php';

function suma($var,$suma=0)
{
    if(gettype($var)==='integer'){
        return $var;
    }
    $suma=0;
    foreach($var as $e){
        $suma += suma($e,$suma);
    }
    return $suma;
}

$niz = 
[
    'x'=>[
        'y'=>2
    ],
    'z'=>3,
    'k'=>[
        'j'=>[
            'l'=>[
                'sdsd'=>2,
                'hh'=>3
            ]
        ]
    ]
        ];



echo suma($niz),'<hr />';