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

//Asociatyvūs masyvai

//Vietoj indeksų yra vadinami 'raktai', kurie gali būti stringai.
$singlePerson = [
    'first_name' => 'Tomas',
    'last_name' => 'Tomukas',
    'phone' => '80000000',
];

dump($singlePerson['firstName']);
dump($singlePerson['lastName']);

foreach ($singlePerson as $person) {
    dump($person);
}

echo '<br>';
echo '<br>';
echo '<br>';

foreach ($singlePerson as $key => $variable) {
    dump($key . ': ' . $variable);
}

//Daugiamatis masyvas.Pirmas lygis indexuotas, antras asociacinis
$persons = [
    [
        'first_name' => 'Tomas',
        'last_name' => 'Tomukas',
        'phone' => '80000000',
    ],

    [
        'first_name' => 'Andrius',
        'last_name' => 'Andriukas',
        'phone' => '80000000',
    ],

    [
        'first_name' => 'Matas',
        'last_name' => 'Matukas',
        'phone' => '80000000',
    ],

    [
        'first_name' => 'Viktorija',
        'last_name' => 'Vika',
        'phone' => '80000000',
    ],
];

$infoBlock = '';

foreach ($persons as $person) {
    $infoBlock .=
        '<div>' .
        $person['first_name'] . ' ' .
        $person['last_name'] . ' ' .
        $person['phone'] .
        '</div>';
}
// echo nl2br($info);

// dump($persons[0]['first_name']);
// dump($persons[0]['last_name']);

// dump($persons[1]['first_name']);
// dump($persons[1]['last_name']);
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <section>
        <?php echo $infoBlock; ?>
    </section>
</body>

</html>