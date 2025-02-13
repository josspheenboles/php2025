<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
$people = ['Islam', 'Ahmed', 'Sayed'];
$foods = ['chicken', 'beef', 'meat'];


array_map(function ($person, $food) {
return "$person likes $food\n";
}, $people, $foods);
// array_walk($person,'functionname')
// function cmp($x,$y)
// {
//     if($x[1]==$y[1])
//         return 0;
//     elseif($x[1]<$y[1])
//         return 1;
//     else
//         return -1;

// }
// $arr=[5,6,2,10];
// $arr2=[10,20];
// var_dump(array_merge($arr,$arr2));
// // var_dump($arr+$arr2);
// echo '</br>';
// var_dump($arr);
// echo '</br>';
// var_dump($arr2);
// array_reverse($arr);
// print_r($arr);
// usort($arr,'cmp');

// $arr=['z'=>'zz','a'=>'aa','x'=>'xx'];
// var_dump($arr);
// echo '</br>';
// asort($arr);
// var_dump($arr);

// $arr=[5,3,1];
// var_dump($arr);
// sort($arr);#return bool
// var_dump($arr);
// $trainees=array(
//     array('aliaa','fci','os'),
//     array('abdo','arts','os'),
//     array('maha','fci','ui'),
// );
// echo "<table>
// <tr>
// <th>name</th>
// <th>faculty</th>
// <th>track</th>
// </tr>
// ";
// foreach ($trainees as $trainee)
// {
//     echo '<tr>';
//     foreach($trainee as $item)
//     {
//         echo "<td>$item</td>";
//     }
    
//     echo '</tr>';
// }
// echo "</table>";
// $arr1=[1,2];
// $arr2=[2,1];

// echo($arr1===$arr2);
// print_r($arr1);
// echo '</br>';
// print_r($arr2);
// echo '</br>';
// print_r($arr1+$arr2);
// $user='ali';
// $age=12;
// $arr=compact('user','age');
// var_dump(compact('user','age'));
// // // $arr=range(1,13,2);
// // $alpa=range('A','z');
// // var_dump($alpa);
// // filesize('trainee.txt');
// // sizeof($f);
// // try 
// // {
// //     $f=fopen('trainee.txt','r');
// // }
// // catch (Exception $e)
// // {
// //     $e->intl_get_error_message();
// // }
// // $cmd='ls -l';
// // echo $cmd;
// $arr=['username'=>'hamdy',
// 'password'=>'123','age'=>23];
// // $arr[7]=4;
// // // echo $arr['username'];
// // var_dump($arr);
// foreach ($arr as $key=>$val)
// {
//     echo $name.'</br>';
// }
// $arr=['hamdy','aliaa','arwa'];
// $arr[0]='dfkdlfk';
// $arr['5']='mai';
// var_dump($arr); 
// foreach ($arr as $name)
// {
//     echo $name.'</br>';
// }
// var_dump($arr);
// print($arr[0]);