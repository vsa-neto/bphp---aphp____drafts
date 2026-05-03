<?php
declare(strict_types=1);


// class Student {

//     protected int $age;
//     public function setAge(int $age): void 
//     {
//        if($age > 0){
//         $this->age = $age;
//        }
//     }
// }


// $new Student = new Student();

class Person
{
    protected string $name;
    protected string $surname;

    private int $uid;

    public function __construct( string $name, string $surname)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->uid = rand();
    }

        public function getGreeting() : string {
        return "Hello, person $this->name $this->surname";
    }
}

class Student extends Person
{
    public function getGreeting() : string {
        return "Hello, student $this->name $this->surname";
    }
}

class Teacher extends Person
{
    public function getGreeting() : string {
        return "Hello, teacher $this->name $this->surname";
    }
}

// $student = new Student('Ivan', 'Ivanov');
// echo ($student->getGreeting());

$people[] = new Person('Ivan', 'Ivanov');
$people[] = new Student('Petr', 'Petrov');
$people[] = new Teacher('Andrey', 'Andreev');

foreach($people as $person) {
    if($person instanceof Person){
        echo ($person->getGreeting());
        echo PHP_EOL;

    }
}
