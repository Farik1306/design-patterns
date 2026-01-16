// Facade class
class HomeFacade {
    private $light;
    private $tv;

    function __construct(){
        $this->tv = new Light();
        $this-> = new TV();
    }
    function comeHome() {
        $this->light->on();
        $this->tv->on();
    }
    function leaveHome(){
        $this->tv->off();
        $this->light->off();
    }
}
class Light {
    function on() { echo "Ligth on\";}
    function off(){ echo "Light off\n";}
}
class TV{
    function on() { echo "TV on\n";}
    function off() { echo "Light off\n";}
}
// Usage
$home = new HomeFacade();
$home->comeHome();
$home->leaveHome();