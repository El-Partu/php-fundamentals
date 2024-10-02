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
    ?>
</body>
</html>