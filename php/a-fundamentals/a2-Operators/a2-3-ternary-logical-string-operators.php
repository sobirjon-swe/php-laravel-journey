<?php

echo "=== TERNARY OPERATORS ===\n";

$a = 5;
$b = "5";

echo $a === $b ? $a*2 . "\n" : $a-$b . "\n";  // $a === $b false, shuning uchun $a-$b ni hisoblaydi va natija 0 bo'ladi

$num1 = 75;
$num2 = 5;
echo $num1 % $num2 == 0 ? $num1+25 . "\n" : $num2*10 . "\n";

$nullVar = null;
echo $nullVar ?? $num1 * 10 . "\n";    // $nullVar null bo'lgani uchun $num1*10 = 750 chiqadi

// Xulosa: ?? faqat null ni tekshiradi, null bo'lsa zaxira qiymat qaytaradi — bu dizayn qoidasi.


echo "=== LOGICAL OPERATORS ===\n";

$a = 25;
$b = "15";
echo $a == $b || ($a+5)%2==0 ? "Bu Logic Operator. Sababi ||(Yoki) qatnashdi. \n" : $a-$b . "\n";

$num1 = 40;
$num2 = 20;
echo $num1/$num2==2 && ($num1+$num2)/6==10 ? "Bu Logic Operator. Sababi &&(Va) qatnashdi. \n" : $num1+$num2 . "\n";

$num1 = 50;
$num2 = 25;
echo !($num1/$num2==15) ? "Bu Logic Operator. Sababi !(Emas) qatnashdi. \n" : $num1/$num2 . "\n";


echo "=== STRING OPERATORS ===\n";

$word1 = "Hello";
$word2 = "Sobirjon";
echo $word1 . " " . $word2 . "\n";  // String concatenation operator (.) yordamida matnlarni birlashtiramiz

$word1 = "Salom ";
$word1 .= "Sobirjon";
echo $word1 . "\n"; // String concatenation assignment operator (.=) yordamida $word1 ga "Sobirjon" matnini qo'shamiz va natijani $word1 ga tayinlaymiz, natija "Salom Sobirjon" bo'ladi