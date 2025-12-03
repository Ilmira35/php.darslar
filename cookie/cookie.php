<?php

setcookie("Ism","Sarvar",time()+ 60);


if(isset($_COOKIE['Ism'])){
    echo "Salom ". $_COOKIE['Ism'];
} else {
    echo "Cookie topilmadi";
}










?>