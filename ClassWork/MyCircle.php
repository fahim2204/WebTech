<!DOCTYPE html>
<html>
    <head>
        <title>My circle</title>
    </head>
    <body>
       <?php
        class MyCircle{
            //propertise 
            private $radius = 10;

            //constructor
            public function __construct($radius){
                $this->radius = $radius;
            }
            //destructor
            public function __destruct(){
                echo "Destructor";
            }

            //methods
            public function getRadius(){
                return $this->radius;
            }
            public function setRadius($radius){
                $this->radius = $radius;
            }
            public function getArea(){
                return $this->radius*$this->radius*pi();
            }
            public function __toString(){
                return "My area is ".$this->getArea();
            }
        }
       ?>
       <?php
            $circle = new MyCircle(10);
            echo "Radius = ".$circle->getRadius();
            echo "<br>";
            echo $circle;
            echo "<br>";
        ?>
    </body>
</html>