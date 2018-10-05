<?php
    $a = 5;
    $b = '05';
    var_dump($a == $b); // Значение переменной $b будет преобразовано в число, начальный ноль игнорируется, 5 = 5, что является правдой (true).
    var_dump((int)'012345'); // Строка преобразуется в число, а начальные нули отсекаются.
    var_dump((float)123.0 === (int)123.0); // "===" - Сравнение по значению и типу. Тип float не равен типу integer, хотя значения равны.
    var_dump((int)0 === (int)'hello, world'); //  При преобразовании строки в число, значение определяется по начальной части строки. Если строка начинается с верного числового значения, будет использовано это значение. Иначе значением будет 0 (ноль). Верное числовое значение - это одна или более цифр (могущих содержать десятичную точку), по желанию предваренных знаком, с последующим необязательным показателем степени. Показатель степени - это 'e' или 'E' с последующими одной или более цифрами. В итоге, оба значения равны 0 = 0 + одинаковые типы данных, следовательно 'true'.
?>


$title = 'Home Work 1';
$currentYear = date('Y');
?>

<head>
    <title><?= $title ?></title>
</head>
<body>
<h1><?= $currentYear ?></h1>
</body>