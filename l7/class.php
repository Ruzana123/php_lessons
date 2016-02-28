<?php
class Dog{
	public $name='Bobic'; //спочатку пишуться свойства, потім методи
	function bark(){
		echo 'Gaf gaf';
	}
}
$b=new Dog();
echo gettype($b).' ';
echo $b->name.' ';//доступ до свойства об'єкта ->
echo $b->name='Max'.' ';
$b->bark();//функція внутрі класа називається метод, а перемінна - свойство
echo "<br>";

/*
class Person{
	public $name='Ruzana'; //спочатку пишуться свойства, потім методи
	public $surname='Zubrytska';//public-модифікатор доступу-публічне,private-приватнe
	private $k_number='323424';
	public function greeting(){
		echo 'Hello';
	}
	public function say_name(){
		echo 'My name is '.$this->name;//$this-писати обізатільно, воно в самому php
	}
	public function cart_number(){
		echo 'Cart is '.$this->k_number;
	}
}
$Ruzana=new Person();
echo $Ruzana->name.' ';
echo $Ruzana->surname.' ';
//echo $Ruzana->k_number.' '; - тут буде ошибка
$Ruzana->greeting();
echo "<br>";
$Ruzana->say_name();
echo "<br>";
$Ruzana->cart_number();
*/
class Person{
	public $name=''; //спочатку пишуться свойства, потім методи
	public $surname='';//public-модифікатор доступу-публічне,private-приватнe
	private $k_number='323424';
	public function greeting(){
		echo 'Hello';
	}
	public function __construct($name,$surname){
		$this->name=$name;
		$this->surname=$surname;
		//echo "CONSTRUCTOR!"."<br>";
	}
	public function say_name(){
		echo 'My name is '.$this->name;//$this-писати обізатільно, воно в самому php
	}
	public function cart_number(){
		echo 'Cart is '.$this->k_number;
	}
}
$Ruzana=new Person('Ruzana','Zubrytska'); //виклик конструктора при створ нового обєкта
echo $Ruzana->name.' ';
echo $Ruzana->surname.' ';
//echo $Ruzana->k_number.' '; - тут буде ошибка
$Ruzana->greeting();
echo "<br>";
$Ruzana->say_name();
echo "<br>";
$Ruzana->cart_number();
echo "<br>";

$piter=new Person('Piter','Parker');
$piter->say_name();
echo "<br>";


/*Наслідування:
class B extends A {
  function B(параметры_для_A, другие_параметры) { 
    $this->A(параметры_для_A);
    // инициализируем другие поля B
  }

  function TestB() { ... }
  function Test() { ... }
}
*/

/* Поліморфізм
class Base {
 function funct() {
 echo "<h2>Функция базового класса</h2>";
 }
 function base_funct() {
 $this->funct();
 }
}

class Derivative extends Base {
 function funct() {
 echo "<h3>Функция производного класса</h3>";
 }
}

$b = new Base();
$d = new Derivative();

$b->base_funct();
$d->funct();
$d->base_funct();
// Скрипт выводит:

// Функция базового класса
// Функция производного класса
// Функция производного класса
*/



/*Копіювання об'єктів
class A {
// Создаем новый метод:
 function Test() {
 echo "<h1>Hello!</h1>";
 }
}
// Создаем объект класса A:
$a=new A();
// Копируем объект $a:
$b=$a;
// Теперь работаем с новым объектом $b
$b->Test(); // Выводит 'Hello!'
*/


/*Порівняння об'єктів
В PHP 4 объекты сравниваются очень просто: по именам. 
Два объекта равны, если они имеют те же самые свойства и значения, 
а также являются экземплярами одного и того же класса.
 Сравнение двух объектов осуществляют, используя оператор эквивалентности (===). 
class A {
// Создаем новый метод:
 function Test() {
 echo "<h1>Hello!</h1>";
 }
}

// Создаем объект класса A:
$a=new A();
// Создаем объект класса A:
$b=new A();
// Выводит 'Объекты равны':
if ($a===$b) echo "<h3>Объекты равны</h2>";
*/


/*Ссилки на об'єкт
class A {
// Создаем новый метод:
 function Test() {
 echo "<h1>Hello!</h1>";
 }
}

// Создаем объект класса A:
$a=new A();
// Ссылка на объект класса A:
$b=& new A();
$b->Test();
*/

/* Модифікатори доступу
public/private/protected - модификаторы доступа для методов и свойств

Модификатор public позволяет обращаться к свойствам и методам отовсюду. 
Модификатор private позволяет обращаться к свойствам и методам только внутри текущего класса. 
Модификатор protected позволяет обращаться к свойствам и методам только текущего класса и класса, 
который наследует свойства и методы текущего класса.

/**
  * Define MyClass

class MyClass
{
     public $public = 'Public';
     protected $protected = 'Protected';
     private $private = 'Private';

     function printHello()
     {
         echo $this->public;
         echo $this->protected;
         echo $this->private;
     }
}

$obj = new MyClass();
echo $obj->public; // Works
echo $obj->protected; // Fatal Error
echo $obj->private; // Fatal Error
$obj->printHello(); // Shows Public, Protected and Private


/**
  * Define MyClass2

class MyClass2 extends MyClass
{
     // We can redeclare the public and protected method, but not private
     protected $protected = 'Protected2';

     function printHello()
     {
         echo $this->public;
         echo $this->protected;
         echo $this->private;
     }
}

$obj2 = new MyClass2();
echo $obj->public; // Works
echo $obj2->private; // Undefined
echo $obj2->protected; // Fatal Error
$obj2->printHello(); // Shows Public, Protected2, not Private
*/





/*Приклади конструктора та деструктора
class BaseClass {
     function __construct() {
         print "Конструктор класса BaseClass\n";
     }
}

class SubClass extends BaseClass {
     function __construct() {
         parent::__construct();
         print "Конструктор класса SubClass\n";
     }
}

$obj = new BaseClass();
$obj = new SubClass();



class MyDestructableClass {
     function __construct() {
         print "Конструктор\n";
         $this->name = "MyDestructableClass";
     }

     function __destruct() {
         print "Уничтожается " . $this->name . "\n";
     }
}

$obj = new MyDestructableClass();



/*Статичні методи 
Статические методы не определяются через переменную $this, 
поскольку они не должны быть ограничены определенным объектом.
class MyClass { 
     static function helloWorld() { 
         print "Hello, world"; 
     } 
} 
MyClass::helloWorld(); 



Абстрактні методи
abstract class MyBaseClass { 
     abstract function display(); 
} 
*/

?>