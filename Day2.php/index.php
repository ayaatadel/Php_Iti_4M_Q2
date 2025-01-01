<?php

echo "<h1  style='text-align:center;color:blue'> Day 2 Php  </h1>";
/**
 * Array ==> 
 * function ===> built in functions (string , array)
 * function
 * 
 */
//  Array  ==> indexed array  ===> index==> value
/**
 * adding in array  ==> arrayName[index]="value"
 */
// multiDimension array
// Associative array
// $arr=["ayaat","mohammed","feby","masood","rawda","mostafs"];
// echo"************* array before adding ************ <br>";
// var_dump($arr);
// $arr[10]="nourhan";  // add
// echo"<br>*************** over ride ************* <br>";
// var_dump($arr);
// echo "<br>";
// $arr[5]="ahmed"; //  override
// echo"<br>*************** array after adding ************* <br>";
// var_dump($arr);
// echo "<br>";
// $arr[7]="ahmed";   // add this after index[10]  ==> skip index
// echo"<br>*************** array after adding ************* <br>";
// var_dump($arr);
// echo "<br>";

// $arr = ["ayaat", "mohammed", "feby", "masood", "rawda", "mostafa"];
// get size of array ==> sizeof()  , count()

// echo count($arr);
// echo $arr[2];
// for($i=1;$i<sizeof($arr);$i++)
// {
//     echo $arr[$i],"<br>";
// }
// echo "<table border='1'>";
// echo "<thead>";
// echo "<tr>";
// echo "<td>";
// echo "name";
// echo "</td>";
// echo "</tr>";
// echo "</thead>";
// echo "<tbody>";
// for ($i = 1; $i < sizeof($arr); $i++) {
//     echo "<tr>";  // row
//     echo "<td>";   /// table data 
//     echo $arr[$i];   // value of array
//     echo "</td>";
//     echo "</tr>";
// }
// echo "</tbody>";
// echo "</table>";

// add elemnts in array 
/*
 * index  []===> after last index  
 * add from start [====,,,] ==> unshift
 * add from end of array [,,===] ==> push
//  */
// $arr = ["ayaat", "mohammed", "feby", "masood", "rawda", "mostafa"];
// echo "<br>*************** array before adding ************* <br>";
// print_r($arr);
// echo "<br>*************** array after adding ************* <br>";
// array_push($arr, "salma", "shimaa");
// print_r($arr);
// echo "<br>*************** array after adding using unshift ************* <br>";
// array_unshift($arr, "iti");
// print_r($arr);

// echo "<br>*************** array after adding using index ************* <br>";
// $arr[3] = "shimaa"; // override 
// $arr[12] = "test"; // add ==> 
// $arr[10] = "test"; // add ==> 
// print_r($arr);

// for ($i=1; $i <count($arr); $i++) { 
//     # code...
//     echo $arr[$i],"<br>";  // cause error beacuse index of array
// }

// echo "<br>*************** assign array to another after add ************* <br>";
// $newArr=array_values($arr);
// // echo $newArr[2];
// // print_r($newArr);
// for ($i=1; $i <count($newArr); $i++) { 
//     # code...
//     echo $newArr[$i],"<br>";  
// }

// echo "<br>*************** array after remove using index from end of array ************* <br>";

// array_pop($arr);/// remove element from end of array 
// array_pop($arr);/// remove element from end of array 
// array_pop($arr);/// remove element from end of array 
// print_r($arr);
// echo "<br>****** array after remove using index from start of array ******** <br>";

// array_shift($arr);/// remove element from start of array 
// array_shift($arr);/// remove element from start of array 
// array_shift($arr);/// remove element from start of array 
// print_r($arr);
// echo "<br>*************** array after remove using specific index of array ************* <br>";

// unset($arr[2]);// remove 
// unset($arr[3]);// remove 
// print_r($arr);
// echo "<br>*************** assign array to another after remove ************* <br>";
// $newArr=array_values($arr);
// // echo $newArr[2];
// print_r($newArr);


// merge between two arrays

// $arr1 = [1, 2, 3];
// $arr2 = ["ayaat", "omar", "mahmoud", "ibrahiem", "salma"];
// Array ( [0] => 1 [1] => 2 [2] => 3 [3] => ibrahiem [4] => salma )

// $arr3=$arr1+$arr2;
// $arr3=$arr2+$arr1;  // arr2
// $arr3 = array_merge($arr2, $arr1);//["ayaat", "omar", "mahmoud", "ibrahiem", "salma",1,2,3]
// // echo "<br>print array before sort <br>";
// // print_r($arr3);

// echo "<br>print array  sort <br>"; // asending
// $newArr = sort($arr3);//[1,2,3,"ayaat", "omar", "mahmoud", "ibrahiem", "salma"]
// print_r($arr3);
// print_r($newArr);
// echo "<br>print array after reverse sort <br>";
// $newArr = rsort($arr3);// reverse sort  // desending
// // print_r($newArr);
// print_r($arr3);
// echo "<br>print array after sort <br>";



/** array max  */
// $arr=[100,20,250,600,30,70];
// sort($arr); // [20,30,70,100,250,600]
// $lenght=count($arr);
// echo $arr[$lenght-1];
// echo $arr[0];
// $max=$arr[0];
// for ($i=0; $i <count($arr); $i++) { 
//  if($max<=$arr[$i])
//  {
//     $max=$arr[$i];
//  }
// }
// echo "max :",$max,"<br>";



// multi dimenstion array [[1,2], [3,4]]  ==> more than datatype  ==>array
// 1 2
// 3 4

// $arr = [[1, 2], [3, 4, 5], ["salma", "feby"]];

// // [0][0] [0][1]
// // [1][0]  [1][1]
// print($arr[0][1]);

// for ($i = 0; $i < count($arr); $i++) {
//     // print_r($arr[$i]);  // array [1,2] [3, 4, 5]  ["salma", "feby"]
//     for ($j = 0; $j < count($arr[$i]); $j++) {
//         print($arr[$i][$j]);
//         echo "    ";
//     }
//     echo "<br>************* <br>";
// }


// Associative array ===> array ["key"=>value]
// ["ayaat",24,"nada",26]

// $users=[
//     ["name"=>"ayaat","age"=>24],
//     ["name"=>"salma","age"=>22],
//     ["name"=>"feby","age"=>21]
// ];
// for()
// echo $users[1]["age"];
// for ($i=0; $i < count($users); $i++) { 
//     # code...
//     print_r($users[$i]);
// }

// $x=[1,2,3];

//           // array     index, string  ==> vaklue
// foreach ($x as $key => $value) {
//     # code...
//     // print($key);
//     print($value);
// }

// $x=[[1,2],[9,7]];
// foreach ($x as $key => $value) {
//     # code...
//     // print($key);
//     // print($value);
//     foreach ($value as $Skey => $Svalue) {
//         # code...
//             print($Svalue);
//     }
// }

// $users=[
//     ["id"=>1,"name"=>"ayaat","age"=>24],
//     ["id"=>2,"name"=>"salma","age"=>22],
//     ["id"=>3,"name"=>"feby","age"=>21]
// ];
// // foreach ($users as $key => $value) {
// //     # code...
// //     // print($key);  // 0 ,1 ,2 ==> index
// //     // value ==> array ====> [][]
// //     //name : ayaat
// //     // age : 24
// //     // print_r($value);
// //     foreach($value as $Skey=>$sValue)
// //    {
// //      echo $Skey,":",$sValue ,"<br>";
// //    }

// // }
// echo "<table border='1'>";
// echo "<thead>";
// echo "<tr>";
// echo "<th>";
// echo "id";
// echo "</th>";
// echo "<th>";
// echo "name";
// echo "</th>";
// echo "<th>";
// echo "age";
// echo "</th>";
// echo "</tr>";
// echo "</thead>";
// echo "<tbody>";
// foreach ($users as $key => $value) {
//     # code...
//     echo "<tr>";  // user []
//     foreach ($value as $Keyname => $keyValue) {
//         # code...
//         echo "<td>";
//         echo $keyValue;
//         echo "</td>";

//     }
//     echo "</tr>";
// }
// echo "</tbody>";
// echo "</table>";




/* Function 
* block of code ==> exectute when call 

* function name(){} , ==> call name()
* built in function ==> merge , sort , pop , push
* user defined function   ==> code ==> function
================>
parametarized function
non prametarized function

===>
return value
not return ==>  void
*/

// function sum()
// {
//     // echo 1+2;

//     return 1+2;
// }
// echo sum();

// $result=function ($x,$y){
//   return $x+$y;
// };

// print($result(5,3));



//    
$str="Ayaat Adel 123456895";
echo strlen($str),"<br>";
echo strtoupper($str),"<br>";
echo strtolower($str),"<br>";


// replace string

$newStrin=str_replace("Ayaat Adel","omar",$str);

// echo $newStrin;
// echo $str;

echo strpos(strtoupper($str),"E");










