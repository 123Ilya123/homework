<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h3>   Практическая работа 1 </h3> 

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

<h3>   Практическая работа 2  </h3> 
<h4>Задача 1</h4>
<p>
Создайте переменные $a, $b и присвойте им положительные 
числа. Присвойте частное от деления $a/$b третьей переменной $d. 
Используя условный оператор if, осуществите схему вывода на экран 
значения переменной $d только в том случае, если оно является 
положительным числом. Проверьте работу скрипта, после чего 
измените одно из значений переменных на отрицательное число и 
снова запустите скрипт. 
</p>

<?php
$a=10; $b=2;

$d = $a/$b;
echo  "Ответ: ";
if ($d>0) {
    echo 'значения переменной d= '. $d;
}
?>
<h4>Задача 2</h4>
<p>
Создайте переменные $a, $b и присвойте им положительные 
числа. Присвойте частное от деления $a/$b третьей переменной $d. 
Используя условный оператор if, осуществите схему вывода на экран 
значения переменной $d только в том случае, если оно является 
положительным числом. Если число окажется отрицательным или 
равным нулю, должно выводиться соответствующее предупреждение, а 
не значение переменной. Проверьте работу скрипта, после чего 
измените одно из значений переменных $a или $b на отрицательное 
число и снова запустите скрипт.
</p>
    <?php
    $a=8; $b=-2;  echo  "Ответ: ";

    $d = $a/$b;
    if ($d>0) {
        echo 'значения переменной d= '. $d;}
    if ($d<0 ){
        echo "аяай! число меньше нуля";
    }
    if ($d==0 ){
        echo "аяай! число равно нулю";
    } 
    ?>

<h4>Задача 3</h4>
<p>
Создайте переменные $a, $b и присвойте им положительные 
числа. Присвойте частное от деления $a/$b третьей переменной $d. 
Используя условный оператор if в связке с else if, осуществите схему 
вывода на экран значения переменной $d только в том случае, если оно 
является положительным числом. Если число окажется отрицательным 
или равным нулю, то для каждого случая должно выводиться 
соответствующее предупреждение. Проверьте работу скрипта, после 
чего измените одно из значений переменных $a или $b на 
отрицательное число и запустите скрипт снова. Чтобы проверить 
работу скрипта для нулевого значения, измените значение 
переменной $a на ноль. 
</p>

<?php
    $a=0; $b=3;  echo  "Ответ: ";

    $d = $a/$b;
    if ($d>0) {
        echo 'значения переменной d= '. $d;}
        else if  ($d<0 ){
            echo "аяай! число меньше нуля";
         }
            else if ($d==0 ){
                echo "аяай! число равно нулю";
             }
    ?>

<h4>Задача 4</h4>
<p>
Создайте переменную и присвойте ей массив, состоящий из пяти 
элементов, например, чисел или строк. Создайте еще одну 
переменную, которой присвойте какое-нибудь значение. Теперь 
создайте конструкцию switch, которая будет определять, есть такой 
элемент в массиве или нет и выводить соответствующее сообщение. 
Для упрощения кода используйте операторы case, идущие друг за 
другом и содержащие метки в виде значений элементов массива, но не 
прерывающиеся операторами break. Не забудьте про условие по 
умолчанию, которое будет выводить сообщение, если элемента в 
массиве нет. Протестируйте конструкцию, присваивая второй 
переменной различные значения.
</p>


<?php 

$masiv =array(1,2,3,4,5);
$a=6;    echo 'Ответ: ';
    switch ($a){
        case ($masiv [0]):echo "в массиве есть такой элемент-". $a;
        case ($masiv [1]):echo "в массиве есть такой элемент-". $a;
        case ($masiv [2]):echo "в массиве есть такой элемент-". $a;
        case ($masiv [3]):echo "в массиве есть такой элемент-". $a;
        case ($masiv [4]):echo "в массиве есть такой элемент-". $a;
        default : echo "элемента в  массиве нет";
        break;
    }


?>



<h4>Задача 5</h4>
<p>
Используйте цикл for для вывода на экран целых положительных 
чисел не превышающих 50. Прервите цикл на 10 итерации при помощи 
внутреннего условного оператора if и оператора break.
</p>

<?php 

for($z=1;  $z<=50; $z++){
    echo $z .'<br>';
    if ($z==10){
        break;
    }
}
?>


<h3>   Практическая работа 3  </h3> 
<h3>   Работа с массивами  </h3> 
<h4>Задача 1</h4>
<p>
Создайте массив $arr с элементами 2, 5, 3, 9. Умножьте первый элемент 
массива на второй, а третий элемент на четвертый. Результаты сложите, 
присвойте переменной $result. Выведите на экран значение этой переменной. 
</p>


    <?php 
    $arr =array (2,5,3,9);
    
    echo "<pre>";
    print_r($arr);
    $result= $arr [0]*$arr[1]+$arr[2]*$arr[3];
    echo "Ответ: ";
    echo $result;
    ?>



<h4>Задача 2</h4>
<p>
Заполните массив $arr числами от 1 до 5. Не объявляйте массив, а просто 
заполните его присваиванием $arr[] = новое значение. Для выполнения задачи 
необходимо использовать цикл. 
</p>


    <?php unset ($arr ); // отчистка массива
    $arr []=1;
    $arr []=2;
    $arr []=3;
    $arr []=4;
    $arr []=5;
   // $arr []++;
 
   print_r($arr);
    ?>

<h4>Задача 3</h4>
<p>
Пусть теперь в переменной $lang хранится язык (она принимает одно из 
значений или 'ru', или 'en' - либо то, либо то), а в переменной $day - номер дня. 
Выведите словом день недели, соответствующий переменным $lang и $day. То 
есть: если, к примеру, $lang = 'ru' и $day = 3 - то выведем 'среда'. 
</p>


    <?php  
       echo "Ответ: ";
       $lang =ru;
     $day = 5;
    if ($lang ==ru) {
   
    switch ($day ){
        case (1): echo "пн" ;break;
        case (2): echo "вт";break;
        case (3): echo "ср";break;
        case (4): echo "чт";break;
        case (5): echo "пт";break;
        case (6): echo "сб";break;
        case (7): echo "вс";break;
    }
}

    ?>

<h4>Задача 4</h4>
<p>
$ceu = array("Италия" => "Рим", "Люксембург" => "Люксембург", "Бельгия" 
=> "Брюссель", "Дания" => "Копенгаген", "Финляндия" => "Хельсинки", 
"Франция "=>"Париж", "Словакия"=>"Братислава", "Словения"=>"Любляна", 
"Германия"=>"Берлин", "Греция"=>"Афины", "Ирландия" => "Дублин", 
"Нидерланды" => "Амстердам", "Португалия" => "Лиссабон", "Испания" => 
"Мадрид", "Швеция" => "Стокгольм", "Великобритания" => "Лондон", 
"Кипр"=>"Никосия", "Литва"=>"Вильнюс", "Чехия"=>"Прага", 
"Эстония"=>"Таллин"," Польша "=>"Варшава"); 
Создайте сценарий PHP, который отображает столицу и название страны из 
указанного выше массива $ceu. Отсортируйте список по названиям столиц. 
Пример вывода: 
Страна Нидерланды - столица Амстердам 
Страна Греция - столица Афины 
Страна Германии - столица Берлин 
</p>



    <?php
    $ceu = array("Италия" => "Рим", "Люксембург" => "Люксембург", "Бельгия" 
    => "Брюссель", "Дания" => "Копенгаген", "Финляндия" => "Хельсинки", 
    "Франция "=>"Париж", "Словакия"=>"Братислава", "Словения"=>"Любляна", 
    "Германия"=>"Берлин", "Греция"=>"Афины", "Ирландия" => "Дублин", 
    "Нидерланды" => "Амстердам", "Португалия" => "Лиссабон", "Испания" => 
    "Мадрид", "Швеция" => "Стокгольм", "Великобритания" => "Лондон", 
    "Кипр"=>"Никосия", "Литва"=>"Вильнюс", "Чехия"=>"Прага", 
    "Эстония"=>"Таллин"," Польша "=>"Варшава"); 

    print_r ($ceu);

    foreach ($ceu as $a =>$b ){
        echo $a . '-столица '.$b . '<br>';
    }
    ?>

<h4>Задача 5</h4>
<p>
$color = array(4 => 'белый', 6 => 'зеленый', 11 => 'красный'); 
Напишите сценарий PHP, чтобы получить первый элемент указанного выше 
массива. Представим, что ключ вам заранее не известен. 
</p>

    <?php 
    $color = array(4 => 'белый', 6 => 'зеленый', 11 => 'красный'); 
    echo reset ($color);
    ?>

<h4>Задача 6</h4>
<p>
Напишите сценарий PHP для сортировки следующего ассоциативного 
массива: 
array ("Sophia" => "31", "Jacob" => "41", "William" => "39", "Ramesh" => "40") 
а) сортировка по возрастанию по значению 
б) по возрастанию сортировка по ключу 
в) сортировка по убыванию по значению 
г) сортировка по убыванию по ключу 
Для выполнения задачи ознакомьтесь с функциями asort, ksort, arsort, krsort
</p>

    <?php 
    $a= array ("Sophia" => "31", "Jacob" => "41", "William" => "39", "Ramesh" => "40") ;


    asort ($a);         //asort  -  сортировка по возрастанию по значению
    print_r ($a);   


    ksort ($a);         //  ksort             по возрастанию сортировка по ключу
    print_r ($a);

    arsort ($a);         //    arsort     сортировка по убыванию по значению 
    print_r ($a);


    krsort ($a);             //  krsort        сортировка по убыванию по ключу
    print_r ($a);


    foreach ($a as  $bb =>$bn) 
        echo $bb .' возраст-'. $bn ."<br>";
    
    ?>

<h4>Задача 7</h4>
<p>
Напишите сценарий PHP, который отображает все числа от 200 до 250, 
делящиеся на 4. 
Примечание. Не используйте управляющие операторы PHP. 
Ожидаемый результат: 
200,204,208,212,216,220,224,228,232,236,240,244,248
</p>

    <?php 
    echo "Ответ: ";
    for ($a =200 ; $a <=250; $a++){
        if ($a%4==0 ) { echo $a."<br>" ;
        }
    }




    echo implode(",",range(200,250,4))."\n"
  
    ?>

</body>
</html>