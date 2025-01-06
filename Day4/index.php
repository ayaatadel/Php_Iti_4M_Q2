<?php

echo "<h1 style='text-align:center'>Day4</h1>";
/**
 * oop princilpes 
 * inheritancs   ==> types of inheritance  (sigle Inheritennce , multiLevel , multible,hierrarchial , hypered inheritance)
 *  polymorohism 
 * polymorphisim ==> overriding  ac, overloading not ac
 *  Encapsulation ==> set , get 
 * Access modifier  ==> public , private , protected
 
 * ================== class variables
 * static 
 * const
 * 
 */

// class Human
// {
//     public $name;
//     public $age;

//     function __construct($name = "userName", $age = "userAge")
//     {
//         $this->name = $name;
//         $this->age = $age;
//     }

//     function printData()
//     {
//         echo  "user Name : ", $this->name, "<br>", "user Age : ", $this->age, "<br>";
//     }
//     function printHello()
//     {
//         echo "<br>Hello from Grand Parent <br>";
//     }
// }


// $h = new Human("omar", 25);
// $h->printData();
// echo "<br>*************************** <br>";


/** polymorphism   ==> overriding , overloading 
 * 
 * overriding  ==>  same function and differ in return
 * overloading   ==>  same function with differ in prototype
 * 
 */

/**   Inheritance  ==>  parent (super Class)==> inherit to (child==> subclass)
 *    ==> key word ==> extends
 */


// class Employee extends Human
// {
//     public $position, $salary;

//     // inherit from parent name , age

//     function __construct($position, $salary, $name,$age)
//     {
//         // parent::__construct($name,$age);
//         $this->name = $name;
//         $this->age = $age;
//         $this->position = $position;
//         $this->salary = $salary;
//     }

//     function printData()
//     {
//         echo  "user Name : ", $this->name, "<br>", "user Age : ", $this->age, "<br>", "Employee Position: ", $this->position, "<br>", "Employee Salary : ", $this->salary;
//     }
//     // function printData()
//     // {
//     //     echo  "user Name : ", $this->name, "<br>", "<br>", "Employee Position: ", $this->position, "<br>", "Employee Salary : ", $this->salary;
//     // }
// }

// $e = new Employee("techLead", 50000, "doha", 28);
// //  print_r($e);
// // $e->printData();

// echo "<br>*************************** <br>";

// class Student extends Human
// {

//     public $grade;
//     public $course;

//     function __construct($name, $grade, $course,$age)
//     {
//         parent::__construct($name,$age);
//         // $this->name=$name;
//         $this->grade = $grade;
//         $this->course = $course;
//     }

//     function printData()
//     {
//         echo  "user Name : ", $this->name, "<br>", "user Age : ", $this->age, "<br>", "Student course: ", $this->course, "<br>", "Student grade : ", $this->grade;
//     }
//     // function printData()
//     // {
//     //     echo  "user Name : ", $this->name, "<br>", "<br>", "Student course: ", $this->course, "<br>", "Student grade : ", $this->grade;
//     // }
// }

// $s = new Student(name: "salma", course: "Version Control", grade: 95,age:23);
// $s->printData();
// // // echo "<br>", $s->age;

// echo "<br>*************************** <br>";

// class EmployeeChild extends Employee{

//     public $relation;
//     public $childName;
//     function __construct($relation,$position,$salary,$name,$childName)
//     {
//         // parent::__construct($position,$salary,$name);
//         $this->name = $name;
//         // $this->age = $age;
//         $this->position = $position;
//         $this->salary = $salary;
//         $this->relation=$relation;
//         $this->childName=$childName;
//     } 

//     function printData()
//     {
//         echo  "Employee chlid   Name : ", $this->name, "<br>", "<br>", "Employee Position: ", $this->position, "<br>", "Employee Salary : ", $this->salary,"<br>","relation Of Child : ",$this->relation,"<br>";
//     }
// }

// $ech=new EmployeeChild(name:"Adel",relation:"parent",position:"mid Juinor",salary:25000,childName:"Ayaat");
// $ech->printData();
// echo "<br>*************************** <br>";
// $ech->printHello();


//----------------------  Access Modifiers

// encapsulation =======> (set ,get)كبسوله
// Access modifiers ==> 
/**
 * public ==> any one can access and inherit
 * private  ==> access on its class , and can't inherit
 * protected ==> access if you inherit it
 */

// class  Animal
// {
//     public $name;
//     private $price;
//     protected $type;
//     protected $count=0;
//     function __construct($name, $price="Animal Price",$type="animal Type")
//     {
//         $this->name = $name;
//         $this->price = $price;
//         $this->type = $type;
//     }
//     function setPrice($price="test")
//     {
//         $this->price = $price;
//     }
//     function getPrice()
//     {
//         return $this->price;
//     }
//     function getType()
//     {
//         return $this->type; 
//     }
//     function printData()
//     {
//         echo "Animal Name : ", $this->name, "<br>", "Animal price : ", $this->price, "<br>","Animal type : ", $this->type;
//     }
// }


// // class Cat extends Animal
// // {
// //     public $age;
// //     function __construct($age, $name,$type,$count)
// //     {
// //         // parent::__construct($name);
// //         $this->name = $name;
// //         $this->age = $age;
// //         $this->type=$type;
// //         $this->count=$count++;
// //     }
// // }
// $a = new Animal("Mammel Animal", 1200,"amninal type");
// // print($a->getType());
// // print($a->getPrice());
// echo "<br>";
// print($a->setPrice(1500));
// print($a->getPrice());
// $c = new Cat(age: 1, name: "meshmesh",type:"mammel");
// $c->setPrice();
// echo ($c->getPrice());
// echo $c->type;



//============================= class variables ==> const , static
// class Count{
//     public static $count=0;
//     const PI=3.14;
//     function __construct()
//     {
//       self::$count++;  
//     }
//     function prinCount()
//     {
//         echo self::$count;


//     }
//     function setArea()
//     {
//        return self::PI*7*7;
//     }
// }

// $ct=new Count();
// $ct2=new Count();
// $ct3=new Count();

// // $ct3->prinCount();
// // echo Count::$count;
// echo "<br>",Count::PI;
// echo "<br>",$ct3->setArea();

 