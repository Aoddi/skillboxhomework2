<pre>
<?php
// Многомерные массивы

// 1. Создайте массив $matrix, состоящих из целых чисел от 1 до 9 в виде матрицы 3х3

$matrix =[
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];
var_dump($matrix);

// 2. Выведите центральный элемент (на строке 2 в столбце 2) из этой матрицы

$justElement = $matrix[1]; // вот тут я немного запутался
$centralElement = $justElement[1]; // а потом как понял
var_dump($centralElement); 



// 3. Выведите последний элемент в первой строке из этой матрицы

$anotherElement = $matrix[0];
$lastElement = $anotherElement[2];
var_dump($lastElement);

// 4. Посчитайте и выведите сумму элементов из этой матрицы, расположенных ниже и левее диагонали 1 5 9

$summaElements = [4+7+8];
var_dump($summaElements);

// 5. Создайте массив, $users описывающий следующих пользователей
// - Никита, 29 лет, плотник
// - Вася, 13 лет, футболист
// - Николай Николаевич, 77 лет, профессиональный игрок в DotA
// Массив должен быть ассоциативным, каждый элемент должен содержать поля: имя, возраст, профессия

$users = [
[
        "NAME" => "Никита",
        "AGE" => "29",
        "JOB" => "плотник"
],
[
        "NAME" => "Вася",
        "AGE" => "13",
        "JOB" => "футболист"
],
[
        "NAME" => "Николай Николаевич",
        "AGE" => "77",
        "JOB" => "профессиональный игрок в Dota"
],
];
var_dump($users);

// 6. Добавьте в массив $users еще одного участника: Виталий, 30 лет, программист

$users = [
    [
            "NAME" => "Никита",
            "AGE" => "29",
            "JOB" => "плотник"
    ],
    [
            "NAME" => "Вася",
            "AGE" => "13",
            "JOB" => "футболист"
    ],
    [
            "NAME" => "Николай Николаевич",
            "AGE" => "77",
            "JOB" => "профессиональный игрок в Dota"
    ],
    [
            "NAME" => "Виталий",
            "AGE" => "30",
            "JOB" => "программист"
    ]
    ];
    var_dump($users);

// 7. Создайте массив, описывающий загадочного пользователя ($mysteriousUser) - с тем же набором полей, что и в массиве $users
// В качестве имени укажите ему имя 3-го пользователя из массива $users
// В качестве возраста, выберите ему возраст первого пользователя из массива $users
// Профессию укажите из 2-го пользователя
// И выведите его на экран с помощью функции var_dump

$mysteriousUser = [
    [
        "NAME" => "Николай Николаевич",
        "AGE" => "29",
        "JOB" => "футболист"
    ]
    ];

var_dump($mysteriousUser);



?>
</pre>