<?php

/*
 * echo - PHP'da matn yoki o'zgaruvchilarni ekranga chiqarish uchun ishlatiladi. echo bir nechta argumentlarni qabul
 * qilishi mumkin va ular orasida vergul bilan ajratilgan bo'lishi kerak. echo tezkor va samarali usul hisoblanadi.
 */

/*
 * print - PHP'da matn yoki o'zgaruvchilarni ekranga chiqarish uchun ishlatiladi. print faqat bitta argument qabul
 * qiladi va u ham matn yoki o'zgaruvchi bo'lishi mumkin. print echo ga nisbatan biroz sekinroq ishlaydi, chunki u
 * qiymat qaytaradi (1) va bu qiymatni tekshirish mumkin.
 */

/*
 * printf - PHP'da matn yoki o'zgaruvchilarni formatlash va ekranga chiqarish uchun ishlatiladi. printf format string va
 * keyin formatlanadigan argumentlarni qabul qiladi. Format string ichida format specifier'lar (masalan, %s, %d, %f)
 * ishlatiladi, bu specifier'lar argumentlarning turini va formatini belgilaydi. printf formatlash imkoniyatlari bilan
 * birga, matnni aniq va tartibli chiqarish uchun qulay vositadir.
 */

$hello = "Hello World!" . "\n";
$hi = "Hello Sobirjon!" . "\n";
$nice = "How are you?" . "\n";

echo $hello, $hi, $nice;
# print $hello, $hi, $nice;  Bunday chiqarib xato beradi, print faqat bitta argument qabul qiladi
printf("1-text: %s 2-text: %s 3-text: %s", $hello, $hi, $nice);