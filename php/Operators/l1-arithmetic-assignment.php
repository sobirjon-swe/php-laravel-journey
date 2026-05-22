<?php

/*
 * Arithmetic operators odatda 6ta bo'ladi. Bular:
 * 1. Addition (+) - ikki sonni qo'shish uchun ishlatiladi.
 * 2. Subtraction (-) - bir sonni ikkinchisidan ayirish uchun ishlatiladi.
 * 3. Multiplication (*) - ikki sonni ko'paytirish uchun ishlatiladi.
 * 4. Division (/) - bir sonni ikkinchisiga bo'lish uchun ishlatiladi.
 * 5. Modulus (%) - bir sonni ikkinchisiga bo'lganda qoldiqni hisoblash uchun ishlatiladi.
 * 6. Exponentiation (**) - bir sonni ikkinchisiga darajaga ko'tarish uchun ishlatiladi.
 */

$num1 = 100;
$num2 = 50;
$num3 = 20;
$num4 = 2;
$sum = $num1 + $num2 + $num3 + $num4;
$sub = $num1 - $num2 - $num3 - $num4;
$mul = $num1 * $num2 * $num3;
$div = $num1 / $num2;
$mod = $num1 % $num2;
$exp = $num3 ** $num4;

printf("%u + %u + %u + %u = %u\n", $num1, $num2, $num3, $num4, $sum );
printf("%u - %u - %u - %u = %u\n", $num1, $num2, $num3, $num4, $sub );
printf("%u * %u * %u = %u\n", $num1, $num2, $num4, $mul);
printf("%u / %u = %u\n", $num1, $num2, $div);
printf("%u %% %u = %u\n", $num1, $num2, $mod );
printf("%u ** %u = %u\n", $num3, $num4, $exp );


/*
 * Assignment operators odatda 7ta bo'ladi. Bular:
 * 1. Assignment (=) - o'zgaruvchiga qiymat tayinlash uchun ishlatiladi.
 * 2. Addition assignment (+=) - o'zgaruvchiga qiymat qo'shish va natijani o'zgaruvchiga tayinlash uchun ishlatiladi.
 * 3. Subtraction assignment (-=) - o'zgaruvchidan qiymat ayirish va natijani o'zgaruvchiga tayinlash uchun ishlatiladi.
 * 4. Multiplication assignment (*=) - o'zgaruvchini qiymat bilan ko'paytirish va natijani o'zgaruvchiga tayinlash uchun ishlatiladi.
 * 5. Division assignment (/=) - o'zgaruvchini qiymatga bo'lish va natijani o'zgaruvchiga tayinlash uchun ishlatiladi.
 * 6. Modulus assignment (%=) - o'zgaruvchini qiymatga bo'lish va natijani o'zgaruvchiga tayinlash uchun ishlatiladi.
 * 7. Exponentiation assignment (**=) - o'zgaruvchini qiymatga darajaga ko'tarish va natijani o'zgaruvchiga tayinlash uchun ishlatiladi.
 */

$sum = 200; # $sum ning qiymati 172 edi, endi 200 ga teng
$sum += 50; # $sum ning qiymati 250 ga teng
$sum -= 100; # $sum ning qiymati 150 ga teng
$sum *= 2; # $sum ning qiymati 300 ga teng
$sum /= 3; # $sum ning qiymati 100 ga teng
$sum %= 7; # $sum ning qiymati 2 ga teng
$sum **= 3; # $sum ning qiymati 8 ga teng

