<?php
/// ++++++++ Klassen ++++++++
class Person
{
    // Member
    // Sichtbarkeiten:
    //  * public: von überall zugreifbar
    //  * protected: nur von erbenden Klassen und der eigenen Klasse zugreifbar
    //  * private: nur von der eigenen Klasse zugreifbar
    protected string $name;

    // static: Variable ist an die Klasse gebunden und nicht an die Instanz
    public static int $initializerCounter = 0;

    public function __construct(string $name)
    {
        $this->name = $name;

        self::$initializerCounter++;
    }

    function __destruct()
    {
        echo "Person '" . $this->name . "' wird gelöscht<br>";
    }

    // Best-Practice: Datentypen mit angeben
    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }
}

class Customer extends Person
{
    private string $email;

    function __construct(string $name, string $email)
    {
        parent::__construct($name);

        $this->email = $email;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }
}

/// ++++++++ Abstrakte Klassen ++++++++
// können nicht instanziiert werden
abstract class Animal
{
    protected int $age;

    public function __construct(int $age)
    {
        $this->age = $age;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    // muss in einer erbenden Klasse implementiert werden
    abstract public function makeNoise(): void;
}

class Dog extends Animal
{
    public function makeNoise(): void
    {
        echo "Wuff<br>";
    }
}

class Cat extends Animal
{
    public function makeNoise(): void
    {
        echo "Miau<br>";
    }
}

$aPerson = new Person("Luggas");
$aCustomer = new Customer("Daniel", "werde-reich@borisenko.com");

// Veränderung der Werte über die Setter
$aCustomer->setEmail("werde-superreich@luggas.com");
$aCustomer->setName("Jonas");

// Erhalten der Werte über die Getter
echo $aPerson->getName() . "<br>";
// Ausgabe: 2 -> weil eine Person und ein Customer instanziiert wurden
echo Person::$initializerCounter . "<br>";

// Würde einen Fehler geben: keine Instanz von Animal möglich, da abstrakt
// $aAnimal = new Animal(10);

// erbende Klassen können instanziiert werden
$aDog = new Dog(10);
$aCat = new Cat(20);

echo $aDog->getAge() . "<br>";
echo $aCat->getAge() . "<br>";

// Ausgabe: Wuff
$aDog->makeNoise();
// Ausgabe: Miau
$aCat->makeNoise();
?>