<?php

/*
QuranSurah is php array which has list of all Surah, para, parah, juz (chapterss) of Holy Quran
with 
--- Arabic name
--- Latin name
--- English name
--- Ayah number
--- Location (macchi/madani)
--- Sajda location
provided by VoiceOfQuran.com. Please do not remove these comments
please do not forget us in your Dua (prayers) as I am in desprate need of your prayers
May Allah (SWT) guide us to the right path.
Sep 01, 2013, Ajax, ON, Canada by ABS voiceofQuran@gmail.com
*/
$surah=array(
			1=>array('id'=>'1','arabic'=>'سورة الفاتحة','latin'=>'Al-Fatiha','english'=>'The Opening','location'=>'1','sajda'=>'0','aya'=>'7'),
			2=>array('id'=>'2','arabic'=>'سورة البقرة','latin'=>'Al-Baqara','english'=>'The Cow','location'=>'2','sajda'=>'0','aya'=>'286'),
			3=>array('id'=>'3','arabic'=>'سورة آل عمران','latin'=>'Aal-e-Imran','english'=>'The family of Imran','location'=>'2','sajda'=>'0','aya'=>'200'),
			4=>array('id'=>'4','arabic'=>'سورة النساء','latin'=>'An-Nisa','english'=>'The Women','location'=>'2','sajda'=>'0','aya'=>'176'),
			5=>array('id'=>'5','arabic'=>'سورة المائدة','latin'=>'Al-Maeda','english'=>'The Table Spread','location'=>'2','sajda'=>'0','aya'=>'120'),
			6=>array('id'=>'6','arabic'=>'سورة الأنعام','latin'=>'Al-Anaam','english'=>'The cattle','location'=>'1','sajda'=>'0','aya'=>'165'),
			7=>array('id'=>'7','arabic'=>'سورة الأعراف','latin'=>'Al-Araf','english'=>'The heights','location'=>'1','sajda'=>'206','aya'=>'206'),
			8=>array('id'=>'8','arabic'=>'سورة الأنفال','latin'=>'Al-Anfal','english'=>'Spoils of war, booty','location'=>'2','sajda'=>'0','aya'=>'75'),
			9=>array('id'=>'9','arabic'=>'سورة التوبة','latin'=>'At-Taubah','english'=>'Repentance','location'=>'2','sajda'=>'0','aya'=>'129'),
			10=>array('id'=>'10','arabic'=>'سورة يونس','latin'=>'Yunus','english'=>'Jonah','location'=>'1','sajda'=>'0','aya'=>'109'),
			11=>array('id'=>'11','arabic'=>'سورة هود','latin'=>'Hud','english'=>'Hud','location'=>'1','sajda'=>'0','aya'=>'123'),
			12=>array('id'=>'12','arabic'=>'سورة يوسف','latin'=>'Yusuf','english'=>'Joseph','location'=>'1','sajda'=>'0','aya'=>'111'),
			13=>array('id'=>'13','arabic'=>'سورة الرعد','latin'=>'Ar-Rad','english'=>'The Thunder','location'=>'1','sajda'=>'15','aya'=>'43'),
			14=>array('id'=>'14','arabic'=>'سورة إبراهيم','latin'=>'Ibrahim','english'=>'Abraham','location'=>'1','sajda'=>'0','aya'=>'52'),
			15=>array('id'=>'15','arabic'=>'سورة الحجر','latin'=>'Al-Hijr','english'=>'Stoneland, Rock city, Al-Hijr valley','location'=>'1','sajda'=>'0','aya'=>'99'),
			16=>array('id'=>'16','arabic'=>'سورة النحل','latin'=>'An-Nahl','english'=>'The Bee','location'=>'1','sajda'=>'50','aya'=>'128'),
			17=>array('id'=>'17','arabic'=>'سورة الإسراء','latin'=>'Al-Isra','english'=>'The night journey','location'=>'1','sajda'=>'100','aya'=>'111'),
			18=>array('id'=>'18','arabic'=>'سورة الكهف','latin'=>'Al-Kahf','english'=>'The cave','location'=>'1','sajda'=>'0','aya'=>'110'),
			19=>array('id'=>'19','arabic'=>'سورة مريم','latin'=>'Maryam','english'=>'Mary','location'=>'1','sajda'=>'58','aya'=>'98'),
			20=>array('id'=>'20','arabic'=>'سورة طه','latin'=>'Taha','english'=>'Taha','location'=>'1','sajda'=>'0','aya'=>'135'),
			21=>array('id'=>'21','arabic'=>'سورة الأنبياء','latin'=>'Al-Anbiya','english'=>'The Prophets','location'=>'1','sajda'=>'0','aya'=>'112'),
			22=>array('id'=>'22','arabic'=>'سورة الحج','latin'=>'Al-Hajj','english'=>'The Pilgrimage','location'=>'1','sajda'=>'18','aya'=>'78'),
			23=>array('id'=>'23','arabic'=>'سورة المؤمنون','latin'=>'Al-Mumenoon','english'=>'The Believers','location'=>'1','sajda'=>'0','aya'=>'118'),
			24=>array('id'=>'24','arabic'=>'سورة النور','latin'=>'An-Noor','english'=>'The Light','location'=>'1','sajda'=>'0','aya'=>'64'),
			25=>array('id'=>'25','arabic'=>'سورة الفرقان','latin'=>'Al-Furqan','english'=>'The Standard','location'=>'1','sajda'=>'60','aya'=>'77'),
			26=>array('id'=>'26','arabic'=>'سورة الشعراء','latin'=>'Ash-Shuara','english'=>'The Poets','location'=>'1','sajda'=>'0','aya'=>'227'),
			27=>array('id'=>'27','arabic'=>'سورة النمل','latin'=>'An-Naml','english'=>'THE ANT','location'=>'1','sajda'=>'26','aya'=>'93'),
			28=>array('id'=>'28','arabic'=>'سورة القصص','latin'=>'Al-Qasas','english'=>'The Story','location'=>'1','sajda'=>'0','aya'=>'88'),
			29=>array('id'=>'29','arabic'=>'سورة العنكبوت','latin'=>'Al-Ankaboot','english'=>'The Spider','location'=>'1','sajda'=>'0','aya'=>'69'),
			30=>array('id'=>'30','arabic'=>'سورة الروم','latin'=>'Ar-Room','english'=>'The Romans','location'=>'1','sajda'=>'0','aya'=>'60'),
			31=>array('id'=>'31','arabic'=>'سورة لقمان','latin'=>'Luqman','english'=>'Luqman','location'=>'1','sajda'=>'0','aya'=>'34'),
			32=>array('id'=>'32','arabic'=>'سورة السجدة','latin'=>'As-Sajda','english'=>'The Prostration','location'=>'1','sajda'=>'15','aya'=>'30'),
			33=>array('id'=>'33','arabic'=>'سورة الأحزاب','latin'=>'Al-Ahzab','english'=>'The Coalition','location'=>'1','sajda'=>'0','aya'=>'73'),
			34=>array('id'=>'34','arabic'=>'سورة سبأ','latin'=>'Saba','english'=>'Saba','location'=>'1','sajda'=>'0','aya'=>'54'),
			35=>array('id'=>'35','arabic'=>'سورة فاطر','latin'=>'Fatir','english'=>'Originator','location'=>'1','sajda'=>'0','aya'=>'45'),
			36=>array('id'=>'36','arabic'=>'سورة يس','latin'=>'Ya Seen','english'=>'Ya Seen','location'=>'1','sajda'=>'0','aya'=>'83'),
			37=>array('id'=>'37','arabic'=>'سورة الصافات','latin'=>'As-Saaffat','english'=>'Those who set the ranks','location'=>'1','sajda'=>'0','aya'=>'182'),
			38=>array('id'=>'38','arabic'=>'سورة ص','latin'=>'Sad','english'=>'Sad','location'=>'1','sajda'=>'24','aya'=>'88'),
			39=>array('id'=>'39','arabic'=>'سورة الزمر','latin'=>'Az-Zumar','english'=>'The Troops','location'=>'1','sajda'=>'0','aya'=>'75'),
			40=>array('id'=>'40','arabic'=>'سورة غافر','latin'=>'Ghafir','english'=>'The Forgiver','location'=>'1','sajda'=>'0','aya'=>'85'),
			41=>array('id'=>'41','arabic'=>'سورة فصلت','latin'=>'Fussilat','english'=>'Explained in detail','location'=>'1','sajda'=>'38','aya'=>'54'),
			42=>array('id'=>'42','arabic'=>'سورة الشورى','latin'=>'Ash-Shura','english'=>'Council, Consultation','location'=>'1','sajda'=>'0','aya'=>'53'),
			43=>array('id'=>'43','arabic'=>'سورة الزخرف','latin'=>'Az-Zukhruf','english'=>'Ornaments of Gold','location'=>'1','sajda'=>'0','aya'=>'89'),
			44=>array('id'=>'44','arabic'=>'سورة الدخان','latin'=>'Ad-Dukhan','english'=>'The Smoke','location'=>'1','sajda'=>'0','aya'=>'59'),
			45=>array('id'=>'45','arabic'=>'سورة الجاثية','latin'=>'Al-Jathiya','english'=>'Crouching','location'=>'1','sajda'=>'0','aya'=>'37'),
			46=>array('id'=>'46','arabic'=>'سورة الأحقاف','latin'=>'Al-Ahqaf','english'=>'The wind-curved sandhills','location'=>'1','sajda'=>'0','aya'=>'35'),
			47=>array('id'=>'47','arabic'=>'سورة محمد','latin'=>'Muhammad','english'=>'Muhammad','location'=>'2','sajda'=>'0','aya'=>'38'),
			48=>array('id'=>'48','arabic'=>'سورة الفتح','latin'=>'Al-Fath','english'=>'The victory','location'=>'2','sajda'=>'0','aya'=>'29'),
			49=>array('id'=>'49','arabic'=>'سورة الحجرات','latin'=>'Al-Hujraat','english'=>'The private apartments','location'=>'2','sajda'=>'0','aya'=>'18'),
			50=>array('id'=>'50','arabic'=>'سورة ق','latin'=>'Qaf','english'=>'Qaf','location'=>'1','sajda'=>'0','aya'=>'45'),
			51=>array('id'=>'51','arabic'=>'سورة الذاريات','latin'=>'Adh-Dhariyat','english'=>'The winnowing winds','location'=>'1','sajda'=>'0','aya'=>'60'),
			52=>array('id'=>'52','arabic'=>'سورة الطور','latin'=>'At-tur','english'=>'Mount Sinai','location'=>'1','sajda'=>'0','aya'=>'49'),
			53=>array('id'=>'53','arabic'=>'سورة النجم','latin'=>'An-Najm','english'=>'The Star','location'=>'1','sajda'=>'62','aya'=>'62'),
			54=>array('id'=>'54','arabic'=>'سورة القمر','latin'=>'Al-Qamar','english'=>'The moon','location'=>'1','sajda'=>'0','aya'=>'55'),
			55=>array('id'=>'55','arabic'=>'سورة الرحمن','latin'=>'Al-Rahman','english'=>'The Beneficient','location'=>'1','sajda'=>'0','aya'=>'78'),
			56=>array('id'=>'56','arabic'=>'سورة الواقعة','latin'=>'Al-Waqia','english'=>'The Event, The Inevitable','location'=>'1','sajda'=>'0','aya'=>'96'),
			57=>array('id'=>'57','arabic'=>'سورة الحديد','latin'=>'Al-Hadid','english'=>'The Iron','location'=>'2','sajda'=>'0','aya'=>'29'),
			58=>array('id'=>'58','arabic'=>'سورة المجادلة','latin'=>'Al-Mujadila','english'=>'She that disputes','location'=>'2','sajda'=>'0','aya'=>'22'),
			59=>array('id'=>'59','arabic'=>'سورة الحشر','latin'=>'Al-Hashr','english'=>'Exile','location'=>'2','sajda'=>'0','aya'=>'24'),
			60=>array('id'=>'60','arabic'=>'سورة الممتحنة','latin'=>'Al-Mumtahina','english'=>'She that is to be examined','location'=>'2','sajda'=>'0','aya'=>'13'),
			61=>array('id'=>'61','arabic'=>'سورة الصف','latin'=>'As-Saff','english'=>'The Ranks','location'=>'2','sajda'=>'0','aya'=>'14'),
			62=>array('id'=>'62','arabic'=>'سورة الجمعة','latin'=>'Al-Jumua','english'=>'The congregation, Friday','location'=>'2','sajda'=>'0','aya'=>'11'),
			63=>array('id'=>'63','arabic'=>'سورة المنافقون','latin'=>'Al-Munafiqoon','english'=>'The Hypocrites','location'=>'2','sajda'=>'0','aya'=>'11'),
			64=>array('id'=>'64','arabic'=>'سورة التغابن','latin'=>'At-Taghabun','english'=>'Mutual Disillusion','location'=>'2','sajda'=>'0','aya'=>'18'),
			65=>array('id'=>'65','arabic'=>'سورة الطلاق','latin'=>'At-Talaq','english'=>'Divorce','location'=>'2','sajda'=>'0','aya'=>'12'),
			66=>array('id'=>'66','arabic'=>'سورة التحريم','latin'=>'At-Tahrim','english'=>'Banning','location'=>'2','sajda'=>'0','aya'=>'12'),
			67=>array('id'=>'67','arabic'=>'سورة الملك','latin'=>'Al-Mulk','english'=>'The Sovereignty','location'=>'1','sajda'=>'0','aya'=>'30'),
			68=>array('id'=>'68','arabic'=>'سورة القلم','latin'=>'Al-Qalam','english'=>'The Pen','location'=>'1','sajda'=>'0','aya'=>'52'),
			69=>array('id'=>'69','arabic'=>'سورة الحاقة','latin'=>'Al-Haaqqa','english'=>'The reality','location'=>'1','sajda'=>'0','aya'=>'52'),
			70=>array('id'=>'70','arabic'=>'سورة المعارج','latin'=>'Al-Maarij','english'=>'The Ascending stairways','location'=>'1','sajda'=>'0','aya'=>'44'),
			71=>array('id'=>'71','arabic'=>'سورة نوح','latin'=>'Nooh','english'=>'Nooh','location'=>'1','sajda'=>'0','aya'=>'28'),
			72=>array('id'=>'72','arabic'=>'سورة الجن','latin'=>'Al-Jinn','english'=>'The Jinn','location'=>'1','sajda'=>'0','aya'=>'28'),
			73=>array('id'=>'73','arabic'=>'سورة المزمل','latin'=>'Al-Muzzammil','english'=>'The enshrouded one','location'=>'1','sajda'=>'0','aya'=>'20'),
			74=>array('id'=>'74','arabic'=>'سورة المدثر','latin'=>'Al-Muddathir','english'=>'The cloaked one','location'=>'1','sajda'=>'0','aya'=>'56'),
			75=>array('id'=>'75','arabic'=>'سورة القيامة','latin'=>'Al-Qiyama','english'=>'The rising of the dead','location'=>'1','sajda'=>'0','aya'=>'40'),
			76=>array('id'=>'76','arabic'=>'سورة الإنسان','latin'=>'Al-Insan','english'=>'The man','location'=>'2','sajda'=>'0','aya'=>'31'),
			77=>array('id'=>'77','arabic'=>'سورة المرسلات','latin'=>'Al-Mursalat','english'=>'The emissaries','location'=>'1','sajda'=>'0','aya'=>'50'),
			78=>array('id'=>'78','arabic'=>'سورة النبأ','latin'=>'An-Naba','english'=>'The tidings','location'=>'1','sajda'=>'0','aya'=>'40'),
			79=>array('id'=>'79','arabic'=>'سورة النازعات','latin'=>'An-Naziat','english'=>'Those who drag forth','location'=>'1','sajda'=>'0','aya'=>'46'),
			80=>array('id'=>'80','arabic'=>'سورة عبس','latin'=>'Abasa','english'=>'He Frowned','location'=>'1','sajda'=>'0','aya'=>'42'),
			81=>array('id'=>'81','arabic'=>'سورة التكوير','latin'=>'At-Takwir','english'=>'The Overthrowing','location'=>'1','sajda'=>'0','aya'=>'29'),
			82=>array('id'=>'82','arabic'=>'سورة الإنفطار','latin'=>'AL-Infitar','english'=>'The Cleaving','location'=>'1','sajda'=>'0','aya'=>'19'),
			83=>array('id'=>'83','arabic'=>'سورة المطففين','latin'=>'Al-Mutaffifin','english'=>'Defrauding','location'=>'1','sajda'=>'0','aya'=>'36'),
			84=>array('id'=>'84','arabic'=>'سورة الانشقاق','latin'=>'Al-Inshiqaq','english'=>'The Sundering, Splitting Open','location'=>'1','sajda'=>'21','aya'=>'25'),
			85=>array('id'=>'85','arabic'=>'سورة البروج','latin'=>'Al-Burooj','english'=>'The Mansions of the stars','location'=>'1','sajda'=>'0','aya'=>'22'),
			86=>array('id'=>'86','arabic'=>'سورة الطارق','latin'=>'At-Tariq','english'=>'The morning star','location'=>'1','sajda'=>'0','aya'=>'17'),
			87=>array('id'=>'87','arabic'=>'سورة الأعلى','latin'=>'Al-Ala','english'=>'The Most High','location'=>'1','sajda'=>'0','aya'=>'19'),
			88=>array('id'=>'88','arabic'=>'سورة الغاشية','latin'=>'Al-Ghashiya','english'=>'The Overwhelming','location'=>'1','sajda'=>'0','aya'=>'26'),
			89=>array('id'=>'89','arabic'=>'سورة الفجر','latin'=>'Al-Fajr','english'=>'The Dawn','location'=>'1','sajda'=>'0','aya'=>'30'),
			90=>array('id'=>'90','arabic'=>'سورة البلد','latin'=>'Al-Balad','english'=>'The City','location'=>'1','sajda'=>'0','aya'=>'20'),
			91=>array('id'=>'91','arabic'=>'سورة الشمس','latin'=>'Ash-Shams','english'=>'The Sun','location'=>'1','sajda'=>'0','aya'=>'15'),
			92=>array('id'=>'92','arabic'=>'سورة الليل','latin'=>'Al-Lail','english'=>'The night','location'=>'1','sajda'=>'0','aya'=>'21'),
			93=>array('id'=>'93','arabic'=>'سورة الضحى','latin'=>'Ad-Dhuha','english'=>'The morning hours','location'=>'1','sajda'=>'0','aya'=>'11'),
			94=>array('id'=>'94','arabic'=>'سورة الشرح','latin'=>'Al-Inshirah','english'=>'Solace','location'=>'1','sajda'=>'0','aya'=>'8'),
			95=>array('id'=>'95','arabic'=>'سورة التين','latin'=>'At-Tin','english'=>'The Fig','location'=>'1','sajda'=>'0','aya'=>'8'),
			96=>array('id'=>'96','arabic'=>'سورة العلق','latin'=>'Al-Alaq','english'=>'The Clot','location'=>'1','sajda'=>'19','aya'=>'19'),
			97=>array('id'=>'97','arabic'=>'سورة القدر','latin'=>'Al-Qadr','english'=>'The Power','location'=>'1','sajda'=>'0','aya'=>'5'),
			98=>array('id'=>'98','arabic'=>'سورة البينة','latin'=>'Al-Bayyina','english'=>'The Clear proof','location'=>'2','sajda'=>'0','aya'=>'8'),
			99=>array('id'=>'99','arabic'=>'سورة الزلزلة','latin'=>'Al-Zalzala','english'=>'The earthquake','location'=>'2','sajda'=>'0','aya'=>'8'),
			100=>array('id'=>'100','arabic'=>'سورة العاديات','latin'=>'Al-Adiyat','english'=>'The Chargers','location'=>'1','sajda'=>'0','aya'=>'11'),
			101=>array('id'=>'101','arabic'=>'سورة القارعة','latin'=>'Al-Qaria','english'=>'The Calamity','location'=>'1','sajda'=>'0','aya'=>'11'),
			102=>array('id'=>'102','arabic'=>'سورة التكاثر','latin'=>'At-Takathur','english'=>'Competition','location'=>'1','sajda'=>'0','aya'=>'8'),
			103=>array('id'=>'103','arabic'=>'سورة العصر','latin'=>'Al-Asr','english'=>'The declining day','location'=>'1','sajda'=>'0','aya'=>'3'),
			104=>array('id'=>'104','arabic'=>'سورة الهمزة','latin'=>'Al-Humaza','english'=>'The Traducer','location'=>'1','sajda'=>'0','aya'=>'9'),
			105=>array('id'=>'105','arabic'=>'سورة الفيل','latin'=>'Al-fil','english'=>'The Elephant','location'=>'1','sajda'=>'0','aya'=>'5'),
			106=>array('id'=>'106','arabic'=>'سورة قريش','latin'=>'Quraish','english'=>'Quraish','location'=>'1','sajda'=>'0','aya'=>'4'),
			107=>array('id'=>'107','arabic'=>'سورة الماعون','latin'=>'Al-Maun','english'=>'Alms Giving','location'=>'1','sajda'=>'0','aya'=>'7'),
			108=>array('id'=>'108','arabic'=>'سورة الكوثر','latin'=>'Al-Kauther','english'=>'Abundance','location'=>'1','sajda'=>'0','aya'=>'3'),
			109=>array('id'=>'109','arabic'=>'سورة الكافرون','latin'=>'Al-Kafiroon','english'=>'The Disbelievers','location'=>'1','sajda'=>'0','aya'=>'6'),
			110=>array('id'=>'110','arabic'=>'سورة النصر','latin'=>'An-Nasr','english'=>'The Succour','location'=>'2','sajda'=>'0','aya'=>'3'),
			111=>array('id'=>'111','arabic'=>'سورة المسد','latin'=>'Al-Masadd','english'=>'The Flame','location'=>'1','sajda'=>'0','aya'=>'5'),
			112=>array('id'=>'112','arabic'=>'سورة الإخلاص','latin'=>'Al-Ikhlas','english'=>'Absoluteness','location'=>'1','sajda'=>'0','aya'=>'4'),
			113=>array('id'=>'113','arabic'=>'سورة الفلق','latin'=>'Al-Falaq','english'=>'The day break','location'=>'1','sajda'=>'0','aya'=>'5'),
			114=>array('id'=>'114','arabic'=>'سورة الناس','latin'=>'An-Nas','english'=>'The mankind','location'=>'1','sajda'=>'0','aya'=>'6')
);
$location[1]="Macci";
$location[2]="Madani";
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Quran Surah</title>
<!-- provided by voiceofquran.com -->
<!-- provided by VoiceOfQuran.com. Please do not remove these comments -->
<!-- please do not forget us in your Dua (prayers) as I am in desprate need of your prayers -->
<!-- May Allah (SWT) guide us to the right path. -->
<!-- Sep 01, 2013, Ajax, ON, Canada by ABS voiceofQuran@gmail.com -->

</head>

<body>
<table border="1" width="100%" bordercolor="#999999">
	<tr>
    	<th>#</th>
    	<th>Arabic</th>
    	<th>Latin</th>
    	<th>English</th>
    	<th># of Ayah</th>        
    	<th>Macki/Madani</th>  
  	    <th>Sajda</th>                                                      
    </tr>
<?php
foreach($surah as $k=>$v){
	//print_r($v);
?>
	<tr>
    	<td><?php echo $v['id']?></td>
    	<td><?php echo $v['arabic']?></td>
    	<td><?php echo $v['latin']?></td>
    	<td><?php echo $v['english']?></td>
    	<td><?php echo $v['aya']?></td>
    	<td><?php echo $location[$v['location']]?></td>
    	<td><?php if($v['sajda']){echo $v['sajda'];}else{echo "&nbsp;";}?></td>        
                                                
    </tr>
<?php
	
}

?>
</table>
</body>
</html>
