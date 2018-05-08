<?php
header("Content-Type: text/html; charset=utf-8");



//1. Вывести таблицу умножения чисел до 10
for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <= 10; $j++){
        echo " $i * $j =".$i*$j;
    }
    echo "<br>";
}
echo "<br><br>";

//2 Нарисуйте треугольник (или ромб) из символов *



for ($i = 0; $i <= 15; $i++)
    {
        for($j=0; $j <= $i; $j++){
        $str= "*";
        echo $str;
    }
echo $str."<br>";
}

//3 Создать массив из дней недели.

$day = date ("w");
$days = array(
            '01' => 'Понедельник',
            '02' => 'Вторник',
            '03' => 'Среда',
            '04' => 'Четверг',
            '05' => 'Пятница',
            '06' => 'Суббота',
            '07' => 'Воскресенье'
);

foreach ($days as $key => $value){
    if ($key == $day) {
        echo "<b>".$value."</b><br>";
    }
            else {
                echo $value."<br>";
            }
    }


//4 Отсортировать массив по 'price'

$arr = [
'1'=> [
'price' => 10,
'count' => 2
],
'2'=> [
'price' => 5,
'count' => 5
],
'3'=> [
'price' => 8,
'count' => 5
],
'4'=> [
'price' => 12,
'count' => 4
],
'5'=> [
'price' => 8,
'count' => 4
],
];


function invenDescSort($item1,$item2)
{
    if ($item1['price'] == $item2['price']) return 0;
    return ($item1['price'] < $item2['price']) ? 1 : -1;
}
usort($arr,'invenDescSort');
print_r($arr);


//6.  В городе N проезд в трамвае осуществляется по бумажным отрывным 

$ElderScrolls = 0;
   for ($i=1; $i < 999; $i++){
       for ($j=1; $j <999; $j++){
           $rahat = ($i % 10) + (($i - $i % 10) % 100 / 10) + (($i - $i % 100) / 100);
           $lukum = ($j % 10) + (($j - $j % 10) % 100 / 10) + (($j - $j % 100) / 100);
           if ($rahat == $lukum) {
               $ElderScrolls ++;
           }
       }
   }

echo "Супер-билетов: " . $ElderScrolls . "<br>";

echo "<br>";


//7.Создайте массив, заполненный буквами от 'a' до 'j'. 

$a = range ("a", "j");
$comma_separated = implode(",", $a);
$comma_separated = strtoupper($comma_separated);
$a = explode(",", $comma_separated);
print_r($a);


//8 Создать массив, заполненный цифрами от '1' до '10'. 


$a = range (1,10);
$sum_a = array_sum($a);
$product_a = array_product($a);
echo $sum_a . "<br>" . $product_a . "<br>";

//9. Создайте массив ['a'=>1, 'b'=2... 'j'=>10] из предыдущих массивов.


$new_array = array_combine($range_arr, $a);
print_r($new_array);
echo "<br>";

//10. Создайте массив вида [[1, 2, 3], [4, 5, 6], [7, 8, 9]] (цикл не использовать). 


$newar = array_chunk(range(1,9), 3);
print_r($newar);
echo "<br>";





