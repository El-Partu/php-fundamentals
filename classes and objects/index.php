<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>classes and objects</title>
</head>
<body>
    <?php 
        class Car{
        public $model;
        public $name;
        public function  __construct($model, $name){
                $this->model = $model;
                $this-> name = $name;
            }

            public function message(){
                return "My car is a ".$this->name." ".$this->model."!";
            }
    }

    $myCar = new Car("Black", "Benz");
//counting number of words in a string
    echo str_word_count($myCar->message());
    echo "<br/>";

    //construct it helps to initialize classes
    class Animal{
        public $name;
        public $color;

        function __construct($name){
            $this->name = $name;
        }

        function callMyName(){
            echo "My name is $this->name";
        }
    }

    // $Dog = new Animal("Bull Dog");

    // $Dog->callMyName();

    // Inheritance

    class Dog extends Animal{
        public $speak;

        function __construct($speak){
            $this->speak = $speak;
        }

        function speakYourLang(){
            echo "$this->speak!!!";
        }
    }
    $GermanSheperd = new Dog("barks");

    $GermanSheperd->speakYourLang();
    ?>

</body>
</html>