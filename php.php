<?php

                  //Birinchi dars

// $ism = "Akbarshox";
// $ism2 = 'Sarvar';
// echo "Hello $ism";
// echo "\n";
// echo 'Hello $ism';
// echo "\n";
// echo strlen($ism);
// echo "\n";
// echo str_word_count("hello world ");
// echo "\n";

// echo strtoupper("Hello World!");
// echo "\n";
// echo strtolower("HELLO");
// echo "\n";
// echo str_replace("a", "o", "Hella");
// echo "\n";
// echo strrev("Ilmira");


// $x = " Hello\nWorld! ";
// echo trim(str_replace("\n","<br>",$x));

               //Ikkinchi dars

// $ism = "Ilmira";
// $familiya = "Abdullayeva";
// $ochistva = "Ildarvna";
// echo $familiya. " " . $ism. " " .$ochistva;
// echo "\n";
// $ism .= $familiya;
// echo $ism;

// echo "\n";
// echo $familiya[0];
// echo "\n";
// echo substr($ochistva,4, 6);
// echo "\n";
// echo substr($ochistva,4);

// echo "\n";

// $dars = "Dars: PHP asoslari";
// echo substr($dars,6,3);

                  //Uchinchi dars

// $int = 5;
// $kasr = 16.5;
// $string_number = "14";

//  // Integer
//  var_dump(is_int($int));// true
//  var_dump(is_int($kasr));// false
//  var_dump(is_int($string_number));//false

//  //Float
// var_dump(is_float($int));
// var_dump(is_float($kasr));
// var_dump(is_float($string_number));

// //Number
// var_dump(is_numeric($int));
// var_dump(is_numeric($kasr));
// var_dump(is_numeric($string_number));

// //string
// var_dump(is_string(34));//False
// //*

// $a = 5; //Integer
// $b = 5.34; //float
// $c = "hello"; //string
// $d = true ; //boolean

// var_dump($a);
// var_dump($b);
// var_dump($c);
// var_dump($d);

// $a = (string) $a;
// $b = (string) $b;
// $c = (string) $c;
// $d = (string) $d;

// //To verify the type of any object in PHP, use the var_dump() function:

// var_dump($a);
// var_dump($b);
// var_dump($c);
// var_dump($d);

// $a = 6; //Integer
// $b = 23.4; //Float

// $a = (bool) $a;
// $b = (int) $b;

// var_dump($a);
// var_dump($b);

// echo pi();
// echo "\n";
// echo min(5,46,2,8,45,-6,-55,12,0);
// echo "\n";
// echo max(5,46,2,8,45,-6,-55,12,0);
// echo "\n";
// echo abs(-6);
// echo "\n";
// echo sqrt(65);
// echo "\n";
// echo round(0.60);
// echo "\n";
// echo round(0.54);
// echo "\n";
// echo rand(1,200);
// echo "\n";
               
              //To'rtinchi dars


             //Beshinchi dars
        
// $yosh = 15;
// if ($yosh >= 18) {
//     echo "siz voyaga yetgansiz!";
// }
// if ($yosh < 18) {
//     echo "Siz voyaga yetmagansiz!";
// }

// $yosh = 19;
// if ($yosh >= 18) {
//     echo "Siz voyaga yetgansiz!";
// }else {
//     echo "Siz voyaga yetgansiz!";
// }           
 
// $ball = 40;
// if ($ball >= 90) {
//     echo "Alo!";
// }
// echo "\n";
// if ($ball >= 70) {
//     echo "Qoniqarli!";
// }
// echo "\n";
// if ($ball >= 50) {
//     echo "Norm!";
// }
// echo "\n";
// if ($ball < 50) {
//     echo "Siz testdan yiqildingiz!";
// }

// $ball = 90;
// if($ball >= 90){
//     echo "A'lo!";
// } elseif($ball >= 70){
//     echo "yaxshi";
// } elseif($ball >= 50){
//     echo "Qoniqarli";
// } else {
//     echo "Imtihondan yiqildingiz!";
// }

// echo "\n";

// $login = "Ilmira";
// $parol = "123456";
// if($login == "Ilmira")

            //    oltinchi dars

// $x = 2671;
// $a = 645;
// $b = 645;
// if($a > $x){
//     echo "$a katta $x dan";
// } else{
//     echo "$x katta $a dan";
// } 
//     echo "\n";

// if( $a > $b) {
//     echo "$a katta $b dan";
// } elseif ( $a == $b) {
//     echo "$a bilan $b teng";
// }
// echo "\n";

// $x = 49;
// $y = 40;
// if ($x == $y){
//     echo "bu sonlar teng";
// } elseif($x > $y){
//     echo "$x katta $y dan";
// } else {
//     echo "$x kichik $y dan";
// }

// echo "\n";

// $ball = 6;
// if($ball == 5){
//     echo "A'lo!";
// }elseif($ball == 4){
//     echo "Yaxshi!";
// }elseif($ball == 3){
//     echo "Qoniqarli!";
// }elseif($ball == 2){
//     echo "Qoniqarsiz!";
// }else  {
//     echo "Bunday baxo mavjud emas!";
// }
// echo "\n";

// $kun = 7;
// if($kun == 1){
//     echo "Bu kun Dushanba kuni!";
// }elseif($kun == 2){
//    echo "Bu kun Seshanba!";
// }elseif($kun == 3){
//     echo "Bu kun Chorshanba!";
// }elseif($kun == 4){
//     echo "Bu kun Payshanba!";
// }elseif($kun == 5){
//     echo "Bu kun Juma!";
// }elseif($kun == 6){
//     echo "Bu kun Shanba!";
// }elseif($kun == 7){
//     echo "Bu kun Yakshanba!";
// }else{
//     echo "Bunday hafta kuni mavjud emas!";
// }

                //   Yettinchi dars

//  $day = "Juma";
  
//  switch ($day){
//     case "Dushanba":
//         echo "Bugun haftaning birinchi kuni";
//         break;
//     case "Seshanba":
//         echo "Bugun haftaning ikkinchi kuni";
//         break;
//     case "Chorshanba":
//         echo "Bugun haftaning uchinchi kuni";
//         break;
//     case "Payshanba":
//         echo "Bugun haftaning to'rtinchi kuni"; 
//         break;
//     case "Juma":
//         echo "Bugun haftaning beshinchi kuni"; 
//         break;
//     case "Shanba":
//         echo "Bugun haftaning oltinchi kuni";
//         break;
//     case "Yakshanba":
//         echo "Bugun haftaning oxirgi kuni";
//         break;
//     default:
//     echo "Bunday hafta kuni mavjud emas!";

//  } echo "\n";

// switch($day){
//     case "Dushanba":
//     case "Juma":
//         echo "Ish kuni";
//     case "Shanba":
//     case "Yakshanba":
//         echo "Bugun dam olish kuni!";
//         break;
//     default:
//     echo "Bunday hafta kuni mavjud emas!";


// }

// $rang = "green";

// switch($rang){
//     case "red":
//         echo "To'xtang!";
//         break;
//     case "yellow":
//         echo "Diqqat!";
//         break;
//     case "green":
//         echo "Harakat qilishingiz mumkin!";
//         break;
//     default :
//     echo "Bunday rang mavjud emas!";

// }

            // Sakkizinchi dars

// $i = 1;
// while ($i <= 5){
//     echo $i.", ";
//     $i++;
// }
// echo "\n";

// $x = 5;
// while ($x <= 100){
//     echo $x.", ";
//     if($x == 100){
//         break;
//     }
//     $x += 5;
// }
// echo "\n";
// $i = 0;
// while ($i < 10){
//     $i++;
//     if ($i == 3) continue;
//     echo $i.", ";
// }

// echo "\n";
// $i = 1;
// while ($i < 6):
//     echo $i;
//     $i++;
// endwhile;

// echo "\n";

// $i = 1;
// do {
//     echo $i;
//     $i++;
// } while ($i < 6);

// echo "\n";

// $i = 1;
// $summa = 0;
// while ($i <= 10){
//      $summa += $i;
//     $i++;
// }
// echo "Yig'indi: $summa";

// echo "\n";

// for($i =1; $i <= 15; $i++){
//     echo $i.", ";
// }

// echo "\n";
// for($i =1; $i <= 15; $i+=2){
//     echo $i.", ";
// }

                  // To'qqizinchi dars

// $i = 1;
// while($i <= 20){
//     echo $i.", ";
//     $i++;
// }
// echo "\n";
// for($i = 1; $i <= 20; $i++){
//     echo $i.", ";
// }
// echo "\n";
// for($i = 1; $i >= 20; $i++){
//     if($i % 2 == 0){
//         echo $i." ";
//     }
// }

// echo "\n";

// for($i = 20; $i >= 1; $i--){
//     echo $i." ";
// }
// echo "\n";

// $i = 1;
// $summa = 0;
//  while ($i <= 50){
//      $summa += $i;
//      $i++;
//  }
//  echo "Yig'indi: $summa";

// echo "\n";

// $x = 5;
// $k = 1;
// for($a = 1; $a <= $x; $a++){
//     $k *= $a;
// }
// echo $k;

              //   o'ninchi dars

// function Hello(): void {
//     echo "Hello World! \n";
// }


// Hello();
// Hello();
// Hello();
// Hello();

// function Yigindi(): void{
//     $summa = 0;
//     for($i = 1; $i <= 10; $i++){
//         $summa += $i;
//     }
//     echo "Yig'idisi: $summa \n";
// }

// yigindi();
// echo "\n";

// function ikkiSonniqoshish($birinchi_son, $ikkinchi_son): void{
//     echo $birinchi_son + $ikkinchi_son;
// }

// ikkiSonniqoshish( 52,  13);

        //    O'n birinchi dars

// function yoshniAniqlash($b_year, $year = 2024): void {
//     echo "Siz ".$year - $b_year."yoshdasiz! \n";
// }
// yoshniAniqlash(2011);
// yoshniAniqlash(2011,  2025);
// echo "\n";

// function yoshniAniqlash1($b_year, $year = 2024): float|int {
//        return $year - $b_year;
// }
//  $yosh = yoshniAniqlash1(2011,  2025);
// if ($yosh < 18){
//     echo "Siz voyaga yetmagansiz!";
// } else {
//     echo "Siz voyaga yetgansiz!";
// }
// echo "\n";

// function son($n): int {
//    $summa = 0;
//    for($i = 1; $i <= $n; $i++){
//        $summa += $i;
//    }
//    return $summa;
// }
//  echo son(15);

        //  O'n ikkinchi dars

// // birinchi usul
// $sonlar = array(5,12,34,65,42,1,"Test");
// // ikkinchi usul
// $sonlar1 = [8,45,63,72,53,5,4,3,2,1,"Test"];
// $cars = array("Volvo", "BMW", "Tayota");
// // var_dump($cars);
// print_r($cars);
// print_r($sonlar);
// echo $sonlar[2];
// echo "\n";
// echo $sonlar[4];
// $sonlar [4] = 45;
// echo "\n";
// echo $sonlar[4];
// echo "\n";
// foreach($sonlar as $item) {
//         echo $item." ";
// }
// // massivga yangi qiymat qo'shish

// $cars = array("Volvo", "BMW", "Tayota");
// array_push($cars,"Chevrollet");
// echo "\n";
// print_r($cars);
// $cars[] = "BYD";
// print_r($cars);

// $son = [4,8,"test"];
// echo $son[2];
// echo "\n";
// $user = ["Ism" => "Ilmira", "Familiya" => "Abdullayeva","T_yili" => 2011];
// echo $user["Ism"];
// echo "\n";
// $user["Familiya"] = "Sultonova";
// echo $user["Familiya"];

                  //     o'n uchinchi dars

// $user = [
//         "Ism" => "Ali",
//         "Familiya" => "Ozodov",
//         "T_yili" => 1996
// ];
// print_r($user);
// $user['Familiya'] = "Komilov";
// echo $user['Familiya'];
// echo "\n";
// foreach($user as $key => $item ){
//         echo $key." ".$item.", ";
// }
// $son = [];
// $son[0] = 12;
// $son[1] = 19;
// $son['ism'] = "test"; 
// print_r($son);
// $sonlar = [4,5,64,56,56,5,6,4,3,2,12];
// array_splice($sonlar,2,2);
// print_r($sonlar);

           
                // o'n to'rtinchi dars

// Multidimensional Arrays

// $users = [ 
//         ["Ism" => "Ali", "Familiya" => "Ozodov", "T_yili" => 1995],
//         ["Ism" => "Bekzod", "Familiya" => "Masharipov", "T_yili" => 1996],
//         ["Ism" => "Odilbek", "Familiya" => "Karimov", "T_yili" => 1997],
// ];
// $son = [[3,5,6,[2,8,45]], 6,4,8];
// print_r($users);
// echo $users[1]['Ism'];
// echo "\n";
// foreach ($users as $item){
//         echo $item['Ism'].", ";
// } 

             // O'n beshinchi dars


date_default_timezone_set("Asia/Tashkent");
echo "Xozirgi sana:". date("Y-m-d")."<br>";
echo "Xozirgi sana:". date("Y m d")."<br>";
echo "Xozirgi sana:". date("Y.m.d")."<br>";
echo "Xozirgi sana:". date("d.m.Y")."<br>";
echo "Xozirgi sana:". date("d.m.y")."<br>";
echo "Xozirgi sana:". date("D.m.Y")."<br>";
echo "Xozirgi sana:". date("D.M.Y")."<br>";
echo "Xozirgi vaqt:". date("H:i:s")."<br>";
echo "Xozirgi vaqt:". date("h:i:sa")."<br>";
echo "Xozirgi vaqt:". date("l")."<br>";
echo "Xozirgi sana va vaqt:". date("H:i d.m.Y")."<br>";
echo "Xozirgi sana va vaqt:". date("d.m.Y H:i")."<br>";
echo "Xozirgi sana:". date("d F Y")."<br>";
// Unix time
echo "Unix time: ".time()."<br>";
echo "Unix time: ".strtotime("2025-11-14")."<br>";
echo "Unix time: ".date("d.m.Y",strtotime("2025-11-14"))."<br>";
echo "Unix time: ".date("d.m.Y", strtotime("+7 month"))."<br>";
echo "Unix time: ".date("d.m.Y",time())."<br>";
          


?>