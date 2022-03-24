<?php

function dd($value)
{
    dump($value);
    exit();
}

function dump($value)
{
    // var_dump($indexedArray);
    // print_r() displays information about a variable in a way that's readable by humans.

    // The <pre> tag defines preformatted text.
    // Text in a <pre> element is displayed in a fixed-width font, and the text preserves both spaces and line breaks. The text will be displayed exactly as written in the HTML source code.

    echo ("<pre>" . print_r($value, true) . "</pre>");
}


echo '<h4>Indeksuotas masyvas</h4>';
echo '<hr>';
//Indeksuoti masyvai
$indexedArray = [
    'Audi',
    'Mercedes',
    'Opel',
];

//Indeksuoto masyvo atidarymas
dump($indexedArray[0]);
dump($indexedArray[1]);

//Pridėti vertę prie masyvo
$indexedArray[500] = 'newValue';
// $max = max(array_keys($list));

dump($indexedArray);

//Atsatyti indexus nuo 0  
$indexedArray = array_values($indexedArray);


for ($i = 0; $i < count($indexedArray); $i++) {
    //patikrinti ar raktas egzistuoja
    if (array_key_exists($i, $indexedArray)) {
        dump($indexedArray[$i]);
    }
}

//Daugiamatis indeksuotas masyvas
echo '<h4>Daugiamatis indeksuotas masyvas</h4>';
echo '<hr>';

$multiArray = [
    'Audi',
    'Mercedes',
    'Opel',
    [
        'obuoliai',
        'kriaušės',
        [
            'asdasd',
        ]
    ],
];

//Daugiamačio masyvo atidarymas/naršymas su indeksais
dump($multiArray[3]);
dump($multiArray[3][2]);
dump($multiArray[3][2][0]);

//Daugiamačio masyvo atidarymas/naršymas su 2 ciklais
for ($i = 0; $i < count($multiArray); $i++) {

    if (is_array($multiArray[$i])) {

        for ($s = 0; $s < count($multiArray[$i]); $s++) {

            if (is_array($multiArray[$i][$s])) {
                dump($multiArray[$i][$s][0]);
            }
        }
    } else {
        // dump($multiArray[$i]);
    }
}



//pridėti vertę, indeksas automatinis, eina po paskutinio
$multiArray[] = 'newValue1';
//pridėti vertę, nurodomas specifinis indeksas, prideda arba perrašo vertę
$multiArray[1] = 'newValue2';

//pridėti masyvą kaip reikšmę, kuriame bus vertė string. Automatiniai indeksai
$multiArray[][] = 'newValue5';

$multiArray[6][] = 'newValue6';


$multiArray[] = ['newValue7'];
$multiArray[12] = ['newValue12'];

dump($multiArray);
