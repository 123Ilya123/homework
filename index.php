<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class 'zzZ'>

<h4>1 задание</h4>
<p> Создайте переменные $a=17 и $b=10. Отнимите от $a переменную $b и 
результат присвойте переменной $c. Затем создайте переменную $d, 
присвойте ей значение 7. Сложите переменные $c и $d, а результат запишите 
в переменную $result. Выведите на экран значение переменной $result.  </p>
    <?php
    $a=17;
    $b=10;
        $c=$a-$b;
        echo $c ;
    $d=7;
        $result= $c+$d;
    ?>

    <h5>    <?  echo $result  ?>      </h5> 
</div>

<div class 'zgdZ'>
<h4>2 задание</h4>
<P>
Создайте переменные $c=15 и $d=2. Просуммируйте их, а результат 
присвойте переменной $result. Выведите на экран значение 
переменной $result.
</P>

    <?
    $C=15; $D=2;
    $result=$C+$D;
        echo "результат " .$result;
    ?>

</div>

<div>
    <h4> Задача 3 </h4>

<p>
Создайте переменные $text1='Привет, ' и $text2='Мир!'. С помощью этих 
переменных и операции сложения строк выведите на экран фразу 'Привет, 
Мир! 
</p>

    <? 
    $text1='Привет, ' ;
    $text2='Мир!';
    echo $text1 .$text2;
    ?>
</div>

<!------------>
<div>
    <h4> Задача 4 </h4>
    <p>
    Создайте переменную $name и присвойте ей ваше имя. Выведите на 
экран фразу 'Привет, %Имя%!'. Вместо %Имя% должно стоять ваше имя 
    </p>

    <?
    $name="Ilya";
    echo "Привет," .$name;
    ?>
</div>

<!------------>
<div>   
    <h4> Задача 5 </h4>
    <p> 
    Создайте переменную $age и присвойте ей ваш возраст. Выведите на 
экран 'Мне %Возраст% лет!'.
    </p>

    <? 
     $age=18;
    ?>
 <h6>   мне<? echo $age; ?> лет! </h6>
</div>

<!------------>
<div>   
    <h4> Задача 6 </h4>
    <p> 
    Если переменная $a равна 10, то выведите 'Верно', иначе выведите 
'Неверно'.
    </p>

        <? 
        $a=10;
        if($a == 10){
            echo "Верно";
        } else { echo "Неверно";
                }
        
        ?>
</div>
<!------------>

<div>   
    <h4> Задача 7 </h4>
    <p> 
    В переменной $min лежит число от 0 до 59. Определите в 
какую четверть часа попадает это число (в первую, вторую, третью или 
четвертую). 
    </p>

        <? 
       $min=(rand(0,59) );
                echo 'Ответ: ';
       if ($min>=0 and $min<=14 ) {echo "v pervoy";}
       if ($min>=15 and $min<=29 ) {echo "vo vtoryu";}
       if ($min>=30 and $min<=44 ) {echo "в третью";}
       if ($min>=45 and $min<=59 ) {echo "в четвертую";}
        ?>
</div>
<!------------>

<div>   
    <h4> Задача 8 </h4>
    <p> 
    Переменная $num может принимать одно из значений: 1, 2, 3 или 4. 
Если она имеет значение '1', то в переменную $result запишем 'зима', если 
имеет значение '2' – 'лето' и так далее. Решите задачу через switch-case. 
    </p>

        <?php
        $num =4; 
        echo "Ответ: ";
         switch ($num ) {
             case (1): $result= 'зима';
                 echo $result;
             break;

             case (2): $result='лето';
              echo $result;
             break;

             case (3): $result='осень';
                echo $result;
                
            case (4):  $result='весна';  
                    echo $result;
            break;
         default:  echo '5 время года';
         break;}
      
        ?>
</div>
<!------------>


<div>   
    <h4> Задача 9 </h4>
    <p> 
    Дана строка с цифрами, например, '12345'. Проверьте, что первым 
символом этой строки является цифра 1, 2 или 3. Если это так - выведите 'да', 
в противном случае выведите 'нет'.
    </p>

        <?php
       $str ="18845";
       if ($str [0]=="1" or $str [0]=='2' || $str [0]=="3" ) {
       echo 'yes'; 
    } else { 
           echo'no';   // Zzz
       }  
      
        ?>
</div>
<!------------>


<div>   
    <h4> Задача 10 </h4>
    <p> 
    В переменной $year хранится год. Определите, является ли 
он високосным (в таком году есть 29 февраля). Год будет високосным в двух 
случаях: либо он делится на 4, но при этом не делится на 100, либо делится 
на 400. Так, годы 1700, 1800 и 1900 не являются високосными, так как они 
делятся на 100 и не делятся на 400. Годы 1600 и 2000 - високосные, так как они 
делятся на 400.
    </p>

        <?php
       $year=2000; echo "Ответ: ";
       if ($year%4==0 and $year%100!=0 or $year%400==0) { 
           echo "Высокосный";
        }else { 
            echo "НЕ высокосный";
        }
      
        ?>
</div>


<div>   
    <h4> Задача 11 </h4>
    <p> 
    В переменной $month лежит какое-то число из интервала от 1 до 12. 
Определите в какую пору года попадает этот месяц (зима, лето, весна, осень). 
    </p>

        <?php
        $month =(rand(1,12)); 
        echo "Ответ: ";
            if ($month == 1 or $month ==2 or $month == 12){
                    echo "Зима так как сейчас " .$month ." месяц";
                } else
                if ($month == 3 or $month ==4 or $month == 5){
                    echo "Весна так как сейчас " .$month ." месяц";
                } else
                    if ($month == 6 or $month ==7 or $month == 8){
                        echo "Лето так как сейчас " .$month ." месяц";
                    }else
                        if ($month == 9 or $month ==10 or $month == 11){
                            echo "Осень так как сейчас " .$month ." месяц";
                        }
                
        ?>
</div>
<!------------>

<div>   
    <h4> Задача 12 </h4>
    <p> 
    Выведите столбец чисел от 1 до 100. 
    </p>

        <?php
       echo "Ответ:" .'<br>';
       for ($a =1; $a <=100; $a ++ ) {
      //  echo $a .'<br>';
       }
      
        ?>
</div>



<div>   
    <h4> Задача 13 </h4>
    <p> 
    Выведите столбец чисел от 11 до 33.
    </p>

        <?php
         echo "Ответ:" .'<br>';
         for ($a =11; $a <=33; $a ++ ) {
     //    echo $a .'<br>';
         }
       
      
        ?>
</div>


<div>   
    <h4> Задача 14 </h4>
    <p> 
    Выведите столбец четных чисел в промежутке от 0 до 100.
    </p>

        <?php
          echo "Ответ:" .'<br>';
          $w = 0;
          while ( $w <=100){ 
              $w++;
          //    if ( $w%2==0){
          //        echo $w .'<br>';
           //   }
          }

 
       
      
        ?>
</div>

<div>   
    <h4> Задача 15 </h4>
    <p> 
    С помощью цикла найдите сумму чисел от 1 до 100.
    </p>

        <?php 
         $a=1; $sum=0;
         while ($a<=100){ $sum=$sum+$a;
          //   echo $a . '<br>';
             $a++;
           //  echo $sum . '<br>'; 
         }  echo  "Ответ: ссума чисел от 1 до 100= ".$sum ;
       
      
        ?>
</div>
</body>
</html>