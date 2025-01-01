<?php  

echo "<h2 style='text-align:center'>Hello From Day1 in php </h2>";

// comment , # ==> single line
/**
 * multi line comment
 */

 /*
  *print()
  * echo ()
  * var_dump
  * printr()
  */

//   print("hello");
//   echo "hello","ayaat";
//   echo("hello");


/* php ==> loosely typed language
 * variables
 * int , float , array , object , string , boolean 
 */

 $x=5;
 $var="ayaat";
 $bool=True;
 $y=5.5;
 // get datatye
//  gettype($x); // get data type of variable
 echo gettype($x),"<br>"; // integer
 echo gettype($var),"<br>";
 echo gettype($bool),"<br>";
 echo gettype($y),"<br>";


 // convert from datatype to datatype ==> parsing
 //===> setType

echo "********************* <br>";
// settype($x,"string");
// echo gettype($x),"<br>";
// $x=(string)$x;
// echo gettype($x),"<br>";

// var_dump(settype($var,"integer"));
// echo gettype($var)," ",$var,"<br>";

// array
$arr=["ayaat",5.5,true,["nada",24]];
// echo $arr;
// print($arr)
// 
// var_dump($arr,"<br>");

echo "********************* <br>";
//  print_r($arr);
//  echo date('H:i , jS F Y');


// echo "<h2>Opertators </h2>";
// echo "<h4>Arithamtic Opertators </h4>";
//  $num1=4;
//  $num2=30;
//  $sum=$num1+$num2;
//  $mul=$num1*$num2;
//  $mod=$num2%$num1;
//  $div=$num2/$num1;
//  $power=$num2**$num1;
//  echo "$sum,<br>,";
//  echo "$mul,<br>,";
//  echo "$mod,<br>,";
//  echo "$power,<br>,";
//  echo "$div,<br>,";

//  echo "$ <br>******************<br>  num1:$num1 <br> num2:$num2 <br>";
//  echo " <br>******************<br>";
//  echo $num1+$num2,"<br>";
//  echo "$num1+$num2 <br>";
//  echo "sum :", $num1+$num2, "<br>";



/** function  */

//
// $x=15;
// $x="test";
// // is_int
// is_string
// is_array()
// is_float()
// is_double()
// is_object()
// isset
// empty
// var_dump(is_string($x));


// Opreators
// = > assignment ==> x=5
// == > comparison ==> value
// ===> comparison ==> value , datatype
// $x=5;
// $y='5';
// var_dump($x===$y);


$x=10;
// echo $x++,"<br>"; //10   ==> 11
// echo ++$x,"<br>"; //12  ==> 12
// echo $x--,"<br>"; // 10  == > 9
// echo --$x,"<br>"; // 8   => 8

// $x+=1;// $x=$x+1  //11
// echo $x ,"<br>";
// $x-=1; // $x=$x-1  ==>10
// echo $x ,"<br>";

// $x ==> $x++
// $x=$x+1
// $x+=1
// $x=$x+1;   //==> $x++  , ++$x , $x+=1, $x+=2
//$x*=2
//$x/=3


// logical operator

// & || !

// &==  true & true ==> true 
// &==  false & true ==> false 
// &==  false & false ==> false 
// &==  true & false ==> false 
//========================
// || ==  true ||  true ==> true 
// || ==  false ||  true ==> true
// || ==  false ||  false ==> false 
// || ==  true ||  false ==> true
//========================
// ! ==  !  true ==> false 
// ! ==   !  false ==> true


//=================

// $x=10;
// $y=15;
        // true     
// var_dump(($x<$y)&($x=$y));   //0
// echo "<br>";
// var_dump(($x>$y)&($x=$y));   // 0
// echo "<br>";
// var_dump(($x>$y)&&($y=$x) );   //== false
// echo "<br>";

// var_dump($x=$y);

// $var1="ayaat";
// $var2="adel";

// concatination ==> .
// echo "$var1  $var2";
// echo $var1.' '.$var2;



// $a=15;
// $b=&$a;   // refrence operator
// $b=7;
// echo $a,"<br>";  //15
// echo $b,"<br>";   //7
// $z=10;
// $x=$z;
// $x=13;
// echo $x,"<br>";  //13
// echo $z,"<br>";   //10

// $x= @(25 / 0);
// var_dump($x); 



// $x=5;

// if control

// if($x<5)
//     echo "grater <br>";
//     echo "less";
// $x=15;   //  x->(5)
// if($x<5)
// {
//  echo "less <br>";
// }else if($x==5)
// {
//     echo "equal <br>";
// }else{
//     echo "greater <br>";
// }
// echo $x;  //15


// switchh 

$x=90;
// 90 ==> Grade A
// 80 ==> Grade B
// 70 ==> Grade c
// 60 ==> Grade D

// switch ($x) {
//     case 90:
//          echo "Grade A <br>";
//         break;
//     case 80:
//          echo "Grade B <br>";
//         break;
    
//     case ($x<80 && $x>=70):
//          echo "Grade C<br>";
//         break;
//     case 60:
//          echo "Grade D<br>";
//         break;
    
//     default:
//     echo "Sorrrrrrrrrrrrry  you fail !!!<br>";
//         break;
// }


// $arr=["ayaat",24,"nada",26,"mohammed",21,true,2.2];
// array  ==> index ==> value ==> $arrName[index]
// echo $arr[4];
// length of array ==> sizeof

// for($i=0;$i<sizeof($arr);$i++)
// {
//     echo $arr[$i],"<br>";
// }
// echo "<br>************************** <br>";

// while(true)
// {$i=0;
//     if($i<sizeof($arr))
//     {

//         echo $arr[$i],"<br>";  
//         $i++;
//     }
// }
echo "<br>************************** <br>";
//  $i=0;
// while($i<sizeof($arr))
// {
 
//         echo $arr[$i],"<br>";  
//         $i++;

// }
//  $i=0;
// do{
   
  
//     echo $arr[$i],"<br>"; 
//     $i++; 
// }while($i<sizeof($arr));


// for(;;);// infinite ;loop

// $arr=["ayaat",24,"nada",26,"mohammed",21,true,2.2];
// for($i=0;$i<sizeof($arr);$i++)
// {
//     if($arr[$i]=="test")
//     {
//         continue;
//     }
//     echo $arr[$i],"<br>";
// }
// echo "after loop <br>";
// exit;
// echo "hello <br>";

// $arr=[25,30,70,10];
// $max=$arr[0];

// for($i=0;$i<sizeof($arr);$i++)
// {
// if($max<=$arr[$i])
// {
//     $max=$arr[$i];
// }
// }
// echo $max;


?>