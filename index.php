<form  method='post'  >
<label>
    Username
</label>
<input type=text name=username value='' >
</br>
<label>
    Password
</label>
<input type=password value='' name=password>
</br>
<select name='selecttrack'>
    <option value=1>'OS' </option>
    <option value=2>'UI' </option>
</select>
<input type='checkbox' name=gender >Male
<input type=submit  name='sendbtn' value=send>
</form>
<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
// if(isset($_POST))
// {
    
// }
// $x=1
// $x='dfjskdjfkl'
// if(is_integer($x))
foreach $var in $_POST
{
    echo $var;
}
// $x=op--->resource
// function test()
// {echo 'test';}
// print(is_callable(test));
// // settype($x,'int')
// $x='one'
// print_r($_POST['username']);
// $a=@(5/0);
// print('ls -l');
// echo `ls -l`;
// print($a);

// // // print_r($_SERVER);
// // print('aya'!=='Aya');
// // // $a=10;
// // $b=$a;
// // $a=20;
// // function test(&$x)
// // {

// //     print($x);
// //     $x=100;
// // }
// // test($a);
// // print($a);


// print_r($_POST['username']);
// // print(isset($_POST));
// #check value var one of falsy values
// // '',0,FALSE
// print(empty($_POST));
// // #global scope
// // $var_name=0;
// // // unset($var_name);
// // // print($var_name);
// // // const $var2=2;
// // // define('xx','ssd');
// // // $var2+=1;
// // function test($x,$y)
// // {
// //     var_dump($x);
// //     var_dump($y);
// //     // //allow function test accsesss & modifie global var
// //     // // global $var_name;
// //     // static $x=1;
// //     // $x+=1;
// //     // echo $x;
// //     print($x+$y);
// //     // print($abad);
// // }

// // test(1,2);
// // test(1.1,2.2);
// // test('yas.','hossam');
// // print($x);
// // ?>



