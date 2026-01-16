//Abstracion
abstract class Vehicle {
    protected $workshop;
    function __construct(Workshop $workshop){
        $this->workshop = $workshop;
    }
    abstract function manufacture();
}
// implement interface
interface Workshop {
    function work();
}
// concrete implementors
class Produce implements Workshop {
    function work() { echo "Produced\n";}
}
class Assemble implements Workshop {
    function work() { echo "Assembled\n";}
}
// concrete abstractions
class Car extends vehicle {
    function manufacture(){
        echo "Bike";
        $this->workshop->work();
    }
}
// Usage 
$car = new Car(new Produce());
$car->manufacture(); // Car Produced

$bike = new Bike( new Assemble());
$bike->manufacture(); // Bike Assembled