<?php
/* Har bir tilda o'zinga xos o'zgaruvchilar va konstantalar mavjud.
O'zgaruvchilar qiymatlarni saqlash uchun ishlatiladi, konstantalar esa o'zgarmas qiymatlarni ifodalaydi.
*/

/*  Variables $ belgisi bilan boshlanishi va keyin o'zgaruvchining nomi yozilishi kerak
    Variables harf yoki pastki chiziq ((Az, 0-9 va _) ) bilan boshlanishi kerak
    Variables nomi raqam bilan boshlanishi mumkin emas
    Variables nomi bo‘sh joy va maxsus belgilar ishlatilmaydi.
*/

$nums = 5;
$_nums = 5;
# Mumkin emas: $5 = 5;
$car = 'Cadillac';  // Eng ko'p ishlatiladigan turi
$_car = 'Cadillac';  // Ko'pinca yordamchi yoki ichki nomlarda ishlatiladi
$CAR = 'Cadillac';   // odatda constant ko'rinishiga o'xshab ketadi,lekin bu baribir oddiy variable


/*  Constants - o'zgarmas qiymatlarni ifodalaydi. Konstantalar bir marta belgilanganidan so'ng,
    ularning qiymati o'zgartirilmaydi. PHP da konstantalarni define() funksiyasi yordamida yaratish mumkin.
*/

$car = 'Volvo';
define('Volvo', $car); // constant = "Volvo"
$car = 'Spark';        // variable = "Spark"
printf($car);          // Spark chiqadi
printf(Volvo);  // Volvo chiqadi

$apple = 'Apple';
define('Banan', $apple);
printf(Banan); // Apple chiqadi

$hi = 'Hello Sobirjon!';
define('HI', $hi);
$hi = 'Hello World!';
printf($hi);
printf(HI);