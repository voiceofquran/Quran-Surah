QuranSurah
========


Quran Surah(Chapters) List in a php as PHP array with Arabic Latin and English قران الکریم سورة

بسم الله الرحمن الرحیم
In the name of Allah the compassionate the merciful
We The follwoing files:
1-quran_surah.sql which you can directly import into the database
2-quran_surah.sql.txt which you can copy and paste into phpMyadmin or other query executing screen

QuranSurah.php is a file that contains array list of chapters of the Holy Quran. It prints the Surah (chapter) in Arabic, Latin and Egnlish. It also has number of Ayah (verse) and the location of Sajda in a surah.

 84=>array('id'=>'84',
           'arabic'=>'سورة الانشقاق',
           'latin'=>'Al-Inshiqaq',
           'english'=>'The Sundering, Splitting Open',
           'location'=>'1',
           'sajda'=>'21',
           'aya'=>'25')

Simple usage.
Downlaod QurahSurah.php and it prints all surah list with all of the above details.

<?php

include ("QurahSurah.php");
// to print just any surah's name in arabic
echo $surah[112]['arabic'];// prints سورة الإخلاص

?>
