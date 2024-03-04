<?php
/**
 * Define MyClass
 */
// class MyClass
// {
//     public $public = 'Public';
//     protected $protected = 'Protected';
//     private $private = 'Private';

//     function printHello()
//     {
//         echo $this->public;
//         echo $this->protected;
//         echo $this->private;
//     }
// }

// $obj = new MyClass();
// echo $obj->public; // Works ---->public
// $obj->printHello(); // Shows Public, Protected and Private
// echo $obj->protected; //Fatal error: Uncaught Error: Cannot access protected property MyClass::$protected
// echo $obj->private; //Fatal error: Uncaught Error: Cannot access private property MyClass::$private
// $obj->printHello()->protected;//Warning: Attempt to read property "protected" on null
// $obj->printHello()->private;//Warning: Attempt to read property "private" on null 
/********************** */
/**
 * Define MyClass2
 */
// class MyClass2 extends MyClass
// {
//     // We can redeclare the (public and protected) properties, but (not private).
//     public $public = 'Public2';
//     protected $protected = 'Protected2';
//     // private $private = 'private2'; //if i write it will work well

//     function printHello()
//     {
//         echo $this->public;
//         echo $this->protected;
//         echo $this->private;//Warning: Undefined property: MyClass2::$private in D:\XAMPP\htdocs\work\phpbasics\Visibility.php on line 40
//     }
// }

// $obj2 = new MyClass2();
// echo $obj2->public; // Works ---->Public2
// echo $obj2->protected; //Fatal error: Uncaught Error: Cannot access protected property MyClass2::$protected
// echo $obj2->private; //Warning: Undefined property: MyClass2::$privat
// $obj2->printHello(); // Shows Public2, Protected2, Undefined
?>
<!-- /**************************** */ -->
<?php

// class MyClass
// {
//     public function __construct() {
//         // initialization code here
//         `echo "hello world"`;
//     }
//     public function MyPublic() { 
//         echo "hello public";
//     }
//     protected function MyProtected() { 
//         echo "hello protected";
//     }
//     private function MyPrivate() { 
//         echo "hello private";
//     }
    // This is public
//     function Foo()
//     {
//         $this->MyPublic();
//         $this->MyProtected();
//         $this->MyPrivate();
//     }
// }

// $myclass = new MyClass;
// $myclass->MyPublic(); // Works
// $myclass->MyProtected(); //Fatal error: Uncaught Error: Call to protected method MyClass::MyProtected() from global scope
// $myclass->MyPrivate(); //Fatal error: Uncaught Error: Call to private method MyClass::MyPrivate() from global scope
// $myclass->Foo(); // Public, Protected and Private work

/***************** */
// class MyClass2 extends MyClass
// {
//     function Foo2()
//     {
//         $this->MyPublic();
//         $this->MyProtected();
//         $this->MyPrivate(); // Fatal Error
//     }
// }
// $myclass2 = new MyClass2;
// $myclass2->MyPublic(); // Works hello public
// $myclass2->Foo2(); // Public and Protected work, not Private hello publichello protected
// Fatal error: Uncaught Error: Call to private method MyClass::MyPrivate() from scope MyClass2
?>
<!-- /**************************** -->
<?php
// class Bar 
// {
//     public function test() {
//         $this->testPrivate();
//         $this->testPublic();
//     }

//     public function testPublic() {
//         echo "Bar::testPublic\n";
//     }
    
//     private function testPrivate() {
//         echo "Bar::testPrivate\n";
//     }
// }
/************* */
// class Foo extends Bar 
// {
//     public function testPublic() {
//         echo "Foo::testPublic\n";
//     }
    
//     private function testPrivate() {
//         echo "Foo::testPrivate\n";
//     }
// }

// $myFoo = new Foo();
// $myFoo->test(); // Bar::testPrivate   // Foo::testPublic

?>
<!-- /************************* */ -->
<?php
// class MyClass
// {
//     public const MY_PUBLIC = 'public';
//     protected const MY_PROTECTED = 'protected';
//     private const MY_PRIVATE = 'private';

//     public function foo()
//     {
//         echo self::MY_PUBLIC;
//         echo self::MY_PROTECTED;
//         echo self::MY_PRIVATE;
//     }
// }
// $myclass = new MyClass();
// echo MyClass::MY_PUBLIC; // Works---->public
// echo MyClass::MY_PROTECTED;//Fatal error: Uncaught Error: Cannot access protected constant MyClass::MY_PROTECTED
// echo MyClass::MY_PRIVATE;//Fatal error: Uncaught Error: Cannot access private constant MyClass::MY_PRIVATE
// echo $myclass->foo(); // Public, Protected and Private work


/**
 * Define MyClass2
 */
// class MyClass2 extends MyClass
// {
//     function foo2()
//     {
//         echo self::MY_PUBLIC;
//         echo self::MY_PROTECTED;
//         echo self::MY_PRIVATE; // Fatal Error
//     }
// }

// $myclass2 = new MyClass2;
// echo MyClass2::MY_PUBLIC; // Works
// $myclass2->foo2(); // Public and Protected work, not Private
?>
<!--/********This violates the principle of encapsulation**************** */ -->
<?php
// class Test
// {
//     private $name;
//     public function __construct($username)
//     {
//         $this->name = $username;
//     }
//     private function private_bar()
//     {
//         echo 'Accessed the private method(private_bar).';
//     }
//     public function baz(Test $other)
//     {
//         // We can change the private property:
//         $other->name = 'hello';
//         echo $other->name ."<br>";
//         // We can also call the private method:
//         $other->private_bar();
//     }
// }
// $test = new Test('test');
// echo $test->name;//Fatal error: Uncaught Error: Cannot access private property Test::$name from global scope
// $test->private_bar();//fatal error: Uncaught Error: Call to private method Test::private_bar() from global scope
// $test->baz(new Test('other'));

?>

<!-- /************** */ -->
<?php
// class a
// {
//     protected $a, $b;

//     public $c, $d;

//     private $e, $f;
// }
?>
<!-- /************** */ -->
<!-- Beware: Visibility works on a per-class-base and does not prevent instances of the same class accessing each others properties! -->

<?php
// class Foo
// {
//     private $name;

//     public function debugname(Foo $object)
//     {
//         // this does NOT violate visibility although $bar is private
//         echo $object->name, "\n";
//     }

//     public function setname($value)
//     {
//         // Neccessary method, for $name is invisible outside the class
//         $this->name = $value;
//     }
    
//     public function setForeignname(Foo $object, $value)
//     {
//         // this does NOT violate visibility!
//         $object->name = $value;
//     }
// }

// $a = new Foo();//obj1
// $b = new Foo();//obj2
// $a->setname("mohamed");
// $b->setname("elsayed");
// $b->debugname($a);//mohamed
// $a->debugname($b); //elsayed

// $a->setForeignname($b, "ahmed");
// $b->setForeignname($a, "ali");
// $a->debugname($b);//ahmed
// $b->debugname($a);//ali
?>
<!-- /************************* */ -->
<?php 
// if not overwritten, self::$foo in a subclass actually refers to parent's self::$foo 
// class one
// {
//     protected static $Name = "Mohamed";
//     public function change_Name($value)
//     {
//         self::$Name = $value;
//     }
// }

// class two extends one
// {
//     public function tell_me()
//     {
//         echo self::$Name;
//     }
// }
// $first = new one;
// $second = new two;

// $second->tell_me(); // mohamed
// $first->change_Name("Ali");
// $second->tell_me(); // Ali
// $second->change_Name("Ahmed");
// $second->tell_me(); // Ahmed
?>
<!-- /************************* */ -->
<?php 
// class A
// {
//     protected $prot;
//     private $priv;
    
//     public function __construct($a, $b)
//     {
//         $this->prot = $a;
//         $this->priv = $b;
//     }
    
//     public function print_other(A $other)
//     {
//         echo $other->prot;
//         echo $other->priv;
//     }
// }

// class B extends A
// {
// }

// $a = new A("a_protected", "a_private");
// $other_a = new A("other_a_protected", "other_a_private");

// $b = new B("b_protected", "ba_private");

// $other_a->print_other($a); // a_protected and a_private
// $other_a->print_other($b); // b_protected and ba_private

// $b->print_other($a); // a_protected and a_private
?>
<!-- /************************* */ -->
<?php 
// Members declared protected can be accessed only within 
// > the class itself and by inherited classes. Members declared 
// > as private may only be accessed by the class that defines 
// > the member.

// This is not strictly true. Code outside the object can get and set private and protected members:
// You should probably not rely on this ability for production quality code, but having this ability for debugging and testing is handy.

class Sealed { 
    private $value = 'foo'; 
    private $name = 'mohamed';
}

$sealed = new Sealed;
// var_dump($sealed);//object(Sealed)#1 (2) { ["value":"Sealed":private]=> string(3) "foo" ["name":"Sealed":private]=> string(7) "mohamed" }

call_user_func(\Closure::bind(
    function () use ($sealed) { 
        $sealed->value = 'BAZ';
        $sealed->name = 'elsayed'; 
    },
    null,
    $sealed
));
var_dump($sealed); //object(Sealed)#1 (2) { ["value":"Sealed":private]=> string(3) "BAZ" ["name":"Sealed":private]=> string(7) "elsayed" }
?>
<!-- The magic lay in \Closure::bind, which allows an anonymous function to bind to a particular class scope. The documentation on \Closure::bind says:

> If an object is given, the type of the object will be used
> instead. This determines the visibility of protected and
> private methods of the bound object.

So, effectively, we're adding a run-time setter to $sealed, then calling that setter. This can be elaborated to generic functions that can force set and force get object members: -->
<!-- /************************* */ -->
<?php 
?>
<!-- /************************* */ -->
<?php 
?>
<!-- /************************* */ -->
<?php 
?>
<!-- /************************* */ -->
<?php 
?>
<!-- /************************* */ -->
<?php 
?>
<!-- /************************* */ -->
<?php 
?>