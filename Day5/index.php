<?php
echo "<h1 style='text-align:center; color:blue'>Day5 </h1>";

/**
 *how to prevent class to inherit proprity from another class ==>final
 * how how to prevent class to be inherit
 * how to prevent to take object from inherit   ==> abstract
 * how to handle errors ==> setproerty ,getproperty , private
 *==> __set(),__get(),__call()

 */


// static variable ,  static

//   class Human{
//     static $count=0;
//     protected $name;
//     public $age;
//     function __construct($count,$name,$age)
//     {
//         self::$count=$count++;
//         $this->name=$name;
//         $this->age=$age;
//     }
//     // function static==> deal with properities static  (static , const)

//     static function getCount()
//     {
//         return self::$count;
//     }
//    final function getName()
//     {
//         return $this->name;
//     }
//      function printData()
//     {
//         echo $this->name,$this->age,self::$count;
//     }
//  }

//  final class Animal{
//     public $type;
//     function __construct($type)
//     {
//         $this->type =$type;
//     } 
//    function getType()
//    {
//     return $this->type;
//    }
//  }

/** polymorphism ==> oveeriding==> accepted , overloading */

/** final (on method)==>allow you to inherit method but prevent to override method 
 * final on class ==> prevent to inherit class
 * 
 */

//  class User extends Human{
//     public $email;
//     function __construct($name,$age,$email)
//     {
//         $this->name=$name;
//         $this->age=$age;
//         $this->email=$email;
//     }
//     function printData()
//     {
//         echo $this->name,$this->age,$this->email;
//     }
//  }
//  $u=new user("ayaat",25,"ayaat@gmail.com");
//  echo $u->getName();

/**
 * Abstraction ==> hidden implementation of code 
 * make user that extend class to write implementation of code ==> methods abstract method
 * to method abstract ==> class should be abstract class
 * 
 * ==> abstract class ==> contain abstract method
 * 
 * ==> abstract class ==> can't take object from it
 * ==> you can inherit abstract class
 * 
 */

// abstract class Human
// {
//     protected $name;
//     public $age;
//     function __construct( $name, $age)
//     {

//         $this->name = $name;
//         $this->age = $age;
//     }
//     abstract function printData():void;
//     abstract function test():string;
//     abstract function getAge();
//     function getName()
//     {
//         return $this->name;
//     }
//     function printHumanData()
//     {
//         echo $this->name,$this->age;
//     }

// }

// class Employee extends Human{
//     public $position;
//     function __construct($name,$age,$position)
//     {
//         parent::__construct($name,$age);
//         $this->position=$position;
//     }
//     function printData():void
//     {
//         echo $this->name, $this->age,$this->position;
//     }
//     function test():string{
//       return "Hello from employee";
//     }
//     function getAge(){
//         return $this->age;
//     }


// }
// class Student extends Human{
//     public $grade;
//     function __construct($name,$age,$grade)
//     {
//         parent::__construct($name,$age);
//         $this->grade=$grade;
//     }
//     function printData():void
//     {
//         echo $this->name, $this->age,$this->grade;
//     }
//     function test():string{
//         return "Hello from Student";
//       }
//       function getAge(){
//         return $this->age;
//     }
// }

// class Teacher extends Human{
//     public $course;

//     function __construct($name,$age,$course)
//     {

//             parent::__construct($name,$age);
//             $this->course=$course;


//     }

//     function printData():void
//     {
//         echo $this->course;

//     }
//     function test():string{
//         return "Hello from Teacher";
//       }
//       function getAge(){
//         return $this->age;
//     }

// }


// $h=new Human("ayaat",25);
// $h->getName();  ====================> error you can't take object from abstract class


// interface ==> all methods ==> abstract methods  ==> implements 

/// multible inheritance (class extend more than one class) ===> implmenet more than interface

// interface Human
// {
//     function getName(): string;
//     function setSalary($bouns): void;
// }
// interface User{
//  function getData();
// }
// interface test extends Human,User{

// }
// class Employee implements Human,User
// {
//     public $salary;
//     public $name;
//     function __construct($salary, $name)
//     {
//         $this->name = $name;
//         $this->salary = $salary;
//     }
//     function getName(): string
//     {
//         return $this->name;
//     }
//     function setSalary($bouns): void
//     {
//         echo $this->salary += $bouns;
//     }
//     function getData()
//     {
//        echo "Emloyee Name : ", $this->name,"<br>" , "Emloyee Salary :", $this->salary,"<br>" ;

//     }
// }
// $e=new Employee(2500,"ayaat");
// $e->setSalary(1000);
// $e->getData();
// interface Student extends Human{
//     function printHello();

// }
// class UnderGrade implements Student
// {
    
//     function printHello(){
//         echo "Hello From UnderGrade";
//     }
//     public $salary;
//     public $name;
//     function __construct($salary, $name)
//     {
//         $this->name = $name;
//         $this->salary = $salary;
//     }
//     function getName(): string
//     {
//         return $this->name;
//     }
//     function setSalary($bouns): void
//     {
//         echo $this->salary += $bouns;
//     }
// }
// class student2 extends Employee implements Student,human{
//     function printHello(){
//         echo "print hello from student 2";
//     }
// }

/**
 * interface can extend another interface
 * class can implemnt more than one interface
 * 
 * ===> interface ==> extend another interface ==> (class implement interface)==>
 * implemnt all methods inherit and implemnt
 */
/**
 * class extend one class and implement more than one interface
 */

// trait Animal {
//     public $name;
//     function __construct($name)
//     {
//         $this->name=$name;
//     }
//     function printHello()
//     {
//         echo " <br>hello from animal <br>" ;
//     }
//     function printName()
//     {
//         echo $this->name ,"<br>";
//     }
// }
// trait Mammel{
//     public $salary;
//     public $name;
//     function __construct($salary,$name)
//     {
//         $this->salary=$salary;
//         $this->name=$name;
//     }
//     function getSalary()
//     {
//         echo $this->salary;
//     }
//     function printName()
//     {
//         echo $this->name,"<br>";
//     }

//     function printHello()
//     {
//         // override
//         echo "hello from Mammel <br>";
//     }

// }
// class Sound{
//     function printHello()
//     {
//         echo "hello from Sound <br>";
//     }
// }
// class Cat extends Sound{
//     Use Animal,Mammel{
//         Animal::printHello insteadOf Mammel;
//         Mammel::printName insteadOf Animal;
//     }
//     function __construct($name,$salary)
//     {
//         $this->name=$name;
//         $this->salary=$salary;
//     }
// }
// /**  periority ==> trait periority upper than class
//  * class ==> extend another class ==> use trait 
//  * class , trait ==> has same method ==> execute method in trait
//  */

// $c=new Cat("meshmesh",1500);
// $c->printHello();
// $c->getSalary();
// $c->printName();



/*
 * multible inhertiance ==> class ==> not accepted
 * traites ==> multible in heritance ==> class ==> same methods ==> use class:: method insteadod classTwo ; 
 */

/**
 * abstract ==> methods abstract , methods==> prvent take object ==> can be extended
 * interface ==> all methods abstract ==> class ==> implementation all methods
 * interface can extend more than interface 
 * calss can implement more than interface
 * traits==> class ==> can use more than one trait 
 * in traits ==> prorerities ==> override
 * methods ==> confilct ==> solution ==> use ==> instead of
 */


//  namespace myUser;
//  class User{

//  }

//  namespace secondUser;
//  class User{

//  }