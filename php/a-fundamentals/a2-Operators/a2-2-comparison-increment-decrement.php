<?php

/*
 * COMPARISON OPERATORS - Ikki qiymatni taqqoslash uchun ishlatiladi. Natija True yoki False bo'ladi.
 * == (teng) - qiymatlar teng bo'lsa true
 * === (strictly teng) - qiymat va tur teng bo'lsa true
 * != (teng emas) - qiymatlar teng bo'lmasa true
 * !== (strictly teng emas) - qiymat yoki tur teng bo'lmasa true
 * < (kichik) - birinchi qiymat kichik bo'lsa true
 * > (katta) - birinchi qiymat katta bo'lsa true
 * <= (kichik yoki teng) - birinchi qiymat kichik yoki teng bo'lsa true
 * >= (katta yoki teng) - birinchi qiymat katta yoki teng bo'lsa true
 * <=> (spaceship) - taqqoslash operator, -1, 0, 1 qaytaradi
 */

echo "=== COMPARISON OPERATORS ===\n";

// 1. == (teng) va === (strictly teng) farqi
$a = 5;
$b = "5";

var_dump($a == $b);   // bool(true) - qiymatlar teng
var_dump($a === $b);  // bool(false) - turlar boshqacha
echo PHP_EOL;

// 2. != (teng emas) va !== (strictly teng emas)
$x = 10;
$y = "10";

var_dump($x != $y);   // bool(false) - qiymatlar teng
var_dump($x !== $y);  // bool(true) - turlar boshqacha
echo PHP_EOL;

// 3. < va >
$num1 = 15;
$num2 = 20;

var_dump($num1 < $num2);   // bool(true)
var_dump($num1 > $num2);   // bool(false)
echo PHP_EOL;

// 4. <= va >=
$p = 25;
$q = 25;

var_dump($p <= $q);   // bool(true)
var_dump($p >= $q);   // bool(true)
echo PHP_EOL;

// 5. Spaceship (<=>)
echo "Spaceship operator:\n";
var_dump(5 <=> 10);   // int(-1) - 5 < 10
var_dump(10 <=> 10);  // int(0) - 10 == 10
var_dump(15 <=> 10);  // int(1) - 15 > 10
echo PHP_EOL;

/*
 * INCREMENT VA DECREMENT OPERATORS
 * Pre-increment:  ++$x  -> avval qiymat oshiriladi, so'ng yangi qiymat qaytadi
 * Post-increment: $x++ -> avval eski qiymat qaytadi, keyin qiymat oshiriladi
 * Pre-decrement:  --$x  -> avval qiymat kamaytiriladi, so'ng yangi qiymat qaytadi
 * Post-decrement: $x-- -> avval eski qiymat qaytadi, keyin qiymat kamaytiriladi
 */

echo "=== INCREMENT VA DECREMENT OPERATORS ===\n";

// Pre-increment misoli
$num1 = 10;
var_dump($num1);      // int(10)
var_dump(++$num1);    // int(11) - avval oshadi, yangi qiymat qaytadi
echo PHP_EOL;

// Post-increment misoli
$num2 = 20;
var_dump($num2);      // int(20)
var_dump($num2++);    // int(20) - eski qiymat qaytadi, keyin oshadi
var_dump($num2);      // int(21) - endi 21
echo PHP_EOL;

// Pre-decrement misoli
$num3 = 30;
var_dump($num3);      // int(30)
var_dump(--$num3);    // int(29) - avval kamayadi, yangi qiymat qaytadi
echo PHP_EOL;

// Post-decrement misoli
$num4 = 40;
var_dump($num4);      // int(40)
var_dump($num4--);    // int(40) - eski qiymat qaytadi, keyin kamayadi
var_dump($num4);      // int(39) - endi 39
