<?php

/*
 * Data Type'lar PHP'da mavjud bo'lgan ma'lumot turlarini ifodalaydi. PHP'da 8 ta asosiy data type mavjud:
 * string - matn qiymatlar
 * int - butun sonlar
 * float - o'nli sonlar
 * bool - true yoki false qiymatlar
 * array - bir nechta qiymatlar
 * object - ma'lumotlarni obyekt sifatida saqlaydi
 * null - bo'sh o'zgaruvchi
 * resource - tashqi resurslarga havola
 */

# O'zgaruvchilarning type ni bilish uchun var_dump() function orqali aniqlab olamiz.

$hello = "Hello World!";
var_dump($hello);
echo "\n";

$num = 5;
var_dump($num);
echo "\n";

$pi = 3.14;
var_dump($pi);
echo "\n";

$isTrue = true;
var_dump($isTrue);
echo "\n";

$nums = [1, 2, 3, 4, 5, 6, 7, 8, 9];
var_dump($nums);
echo "\n";

$object = new \stdClass();
var_dump($object);
echo "\n";

$null = null;
var_dump($null);
echo "\n";

$resource = fopen("php://memory", "r+");
var_dump($resource);
echo "\n";