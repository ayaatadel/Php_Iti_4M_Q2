<?php
echo "<h1 style='text-align:center'> Day3 </h1>";
/***
 * function user defined
 * different between ?? , ?
 * variable of variable
 * oop  
 */


// function  ==> built in , userDefined ==> void , return function

//   function name (){}===> prototype
// parameters infunction depend on arrangment of variables
//   define varible , assignment
// $x="5";
// $y=5;

// $x=$y;  // asign value of y in variable x

// $arr;
// function sum()
// {
//     $sum=0;
//     $arr = [25, 30, 35];
//     // foreach ($arr as $key => $value) {
//     //     // echo $key, ": ", $value, "<br>";
//     //     $sum+=$value;
//     // }
//     $sum=array_sum($arr);
//     echo $sum;
// }

// sum();


// palindrom ==> 
// $str="iti";

// $newStr=strrev($str);
// // echo $newStr;
// if($str===$newStr)
// {
//     echo "plaindrom";
// }else{
//     echo "not Plaindrom";
// }

// function isPlaindrom($str)
// {
//     $newStr=strrev($str);
// if($str===$newStr)
// {
//     return "plaindrom";
// }else{
//     return "not Plaindrom";
// }
// }

// $result=isPlaindrom("habibah");
// echo $result;
// echo isPlaindrom("habibah");
// function isPlaindrom($str="test") // default value
// {
//     $newStr=strrev($str);
// if($str===$newStr)
// {
//     return "plaindrom";
// }else{
//     return "not Plaindrom";
// }
// }

// $result=isPlaindrom("habibah");
// echo $result;
// echo isPlaindrom();


// function sum($x=5,$y)
// {

//     echo $x; // 5   
//     echo $y;  // 10  
//     // return $x+$y;
// }

// echo sum($z=10,5);
// function sum($x,$y=10)
// {

//     echo $x; // 10   
//     echo $y;  // 10 
//     // return $x+$y;
// }

// echo sum($z=10);


/// variable of variable

// س=5
// س ص=10
// 5ص=10
// $x="T10";
// $$x=15;
// // $test=10;
// echo $T10;



// ?? ==> or (null saftey)  ?==> ternary operator
// $x=10;
// $y=$x??"ayaat";//===> null saftey
// // var_dump($x??"ayaat");
// echo $y;



// ternary operator

// if(5>3)
// {
//     echo 5;
// }else{
//     echo 3;
// }
// $x=5;
// $y=10;
// /// ternary operator (condition)? true:false
//  echo($x>$y)? "hdf": "no";
// ($x>5)? print("more than 5"): print("less than 5");
// echo (5>3)?5: 3;
// echo (5>3)?5: 3;
// $arr=[1,2,3];
// // (count($arr)>0)?var_dump($arr):"on items";
// $y=print("jdhj");
// print($y);

//===============  oop  ==> object

//two paradigms ==> way for writing code

//== pp ==> procedural paradigm  ==> functions 
// oop ==> object orignted programming paradigm  
//==> class(blue print) ==> standard structure, 
// object ==> instance of class

// // Access modifier ==> public , private , proteted , static
// class Human{
//     //    public $name;
//     //    public $age;
//     //    public $address;
//     public $name,$age,$address;

//     // consructor ==> function withOut return 
//     function __construct()
//     {
//         // this ==>Refers to the current object
//         $this->name="nada";
//         $this->age=26;
//         $this->address="cairo";
//     }
//     function printData()
//     {
//         echo $this->name,
//         $this->age,
//         $this->address;
//     }

// }

// // use class ==> object
// $obj=new Human();
// // $obj->name="ayaat";
// // $obj->age=25;
// // $obj->address="menoufia";
// $obj2=new Human();
// $obj2->name="ayaat";
// $obj2->age=25;
// $obj2->address="menoufia";

// $obj->printData();

// // print_r($obj2);
// echo "<br>";
// // print_r($obj);
// $obj2->printData();



// /////////////////////////
// class Human{
//     //    public $name;
//     //    public $age;
//     //    public $address;
//     public $name,$age,$address,$email;

//     // consructor ==> function withOut return 
//     function __construct($userName="userName",$userAge="userAge",$userAddress="userAddress",$userEmail)
//     {
//         // this ==>Refers to the current object
//         $this->name=$userName;
//         $this->age=$userAge;
//         $this->address=$userAddress;
//         $this->email=$userEmail;
//     }
//     function printData()
//     {
//         echo $this->name,"<br>",
//         $this->age,"<br>",
//         $this->address,"<br>",
//         $this->email;
//     }

// }

// $obj=new Human("feby",22,"sheibin","ayaat@gmail.com");
// $obj2=new Human(userEmail:"nada@gmail.com",userAddress:"address Cairo");
// $obj2->printData();
