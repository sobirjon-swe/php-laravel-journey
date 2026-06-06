<?php

echo ceil(5.9) . "\n";    // ceil() funksiyasi sonni yuqoriga qarab yaxlitlaydi, ya'ni 5 ni chaqirsak natija 5 bo'ladi, 5.1 ni chaqirsak natija 6 bo'ladi, 5.9 ni chaqirsak ham natija 6 bo'ladi.
echo floor(5.9) . "\n";   // floor() funksiyasi sonni pastga qarab yaxlitlaydi, ya'ni 5 ni chaqirsak natija 5 bo'ladi, 5.1 ni chaqirsak natija 5 bo'ladi, 5.9 ni chaqirsak ham natija 5 bo'ladi.
echo round(5.9) . "\n";   // round() funksiyasi sonni eng yaqin butun songa yaxlitlaydi, ya'ni 5 ni chaqirsak natija 5 bo'ladi, 5.1 ni chaqirsak natija 5 bo'ladi, 5.9 ni chaqirsak ham natija 6 bo'ladi
echo max(5, 10, 15, 12, 3, 9) . "\n";   // max() funksiyasi sonlar orasidan eng kattasini qaytaradi, ya'ni 5, 10, 15, 12, 3, 9 sonlari orasidan eng kattasi 15 bo'ladi, shuning uchun natija 15 bo'ladi.
echo min(5, 10, 15, 12, 3, 9) . "\n";   // min() funksiyasi sonlar orasidan eng kichigini qaytaradi, ya'ni 5, 10, 15, 12, 3, 9 sonlari orasidan eng kichigi 3 bo'ladi, shuning uchun natija 3 bo'ladi.
echo rand(10, 20) . "\n";       // rand() funskiyasi berilgan oraliqdagi tasodifiy sonni qaytaradi, ya'ni 10 va 20 orasida tasodifiy sonni qaytaradi, har safar chaqirilganda natija o'zgaradi. rand(10, 20) ni chaqirsak har safar 10 va 20 orasida tasodifiy sonni qaytaradi, masalan 12, 15, 19, 10, 20 kabi sonlar qaytarilishi mumkin.
