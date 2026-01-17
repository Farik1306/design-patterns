// Context
class TrafficLight {
    private $state;

    function __construct() {
        $this->state = new RedLight($this);
    }

    function setState(State $state) {
        $this->state = $state;
    }

    function change() {
        $this->state->handle();
    }
}

// State interface
interface State {
    function handle();
}

// Concrete states
class RedLight implements State {
    private $trafficLight;

    function __construct(TrafficLight $light) {
        $this->trafficLight = $light;
    }

    function handle() {
        echo "Red Light → ";
        $this->trafficLight->setState(new GreenLight($this->trafficLight));
    }
}

class GreenLight implements State {
    private $trafficLight;

    function __construct(TrafficLight $light) {
        $this->trafficLight = $light;
    }

    function handle() {
        echo "Green Light → ";
        $this->trafficLight->setState(new YellowLight($this->trafficLight));
    }
}

class YellowLight implements State {
    private $trafficLight;

    function __construct(TrafficLight $light) {
        $this->trafficLight = $light;
    }

    function handle() {
        echo "Yellow Light\n";
        $this->trafficLight->setState(new RedLight($this->trafficLight));
    }
}

// Usage
$light = new TrafficLight();
$light->change(); // Red Light → 
$light->change(); // Green Light → 
$light->change(); // Yellow Light