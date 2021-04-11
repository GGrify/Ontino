<?php
$a = 5;
$b = '10';
//Приведение типов и сравнение
if($a > $b){
    echo '5 - \'10\' = ' . $a - $b . '<br>';
} else{
    echo '5 + \'10\' = ' . $a + $b . '<br>';
}
echo '=============<br>';

$sentence = 'Да будет каждое слово отдельно';
$words = explode(' ', $sentence);
foreach ($words as $word){
    echo $word . '<br>';
}
$sentence2 = implode(' ', $words);
echo $sentence . '<br>';
echo '=============<br>';

//Хэш массив
function getHashArray(){
    return array(
        'One' => 1,
        'Two' => 2,
        'Three' => 3
    );
}
//Разыменование
echo getHashArray()['One'] . ' + ' . getHashArray()['Two'] . ' = ' . getHashArray()['Three'];
echo '<br>=============<br>';

//OOP
class Parents{
    function __construct(){
        echo 'У ребенка есть родитель<br>';
    }
}
class Children extends Parents {
    public $name;
    public $age;
    function __construct($name, $age){
        parent::__construct();
        $this->name = $name;
        $this->age = $age;

    }
}
$kid = new Children('Jack', 15);
echo 'Как зовут ребенка и сколько ему лет?<br>' . $kid->name . ' ' . $kid->age . 'y.o.<br>';


//Singleton
class Singleton{

    private static $instance;

    protected function __construct() { }

    protected function __clone() { }

    public static function getInstance(): Singleton{
        if (!isset(self::$instance))
            self::$instance = new static();

        return self::$instance;
    }
}

    $s1 = Singleton::getInstance();
    $s2 = Singleton::getInstance();
    if ($s1 === $s2) {
        echo "Singleton работает.";
    } else {
        echo "Singleton не работает.";
    }
