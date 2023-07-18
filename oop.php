<?php 

 class Dog  {
    public $name;
    private $age;
    protected $color;
    public function __construct($name, $age, $color) {
        $this->name = $name;
        $this->age = $age;
        $this->color = $color;
    }

    protected function bark() {
        print("{ $this->name } is barking. age id { $this->age }");
    }
 }

 // object instantiation
    $dog1 = new Dog("Rex", 3, "brown");
    print($dog1->name); // Rex
    // print($dog1->age); // Fatal error: Uncaught Error: Cannot access private property Dog::$age
    // print($dog1->color); // Fatal error: Uncaught Error: Cannot access protected property Dog::$color
    $dog1->bark();


// object can't access directly class private protected property but can access through public method


?>