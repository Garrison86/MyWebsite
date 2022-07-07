<?php
include 'Header.php';
echo '<div class="content">';
echo '<br><h3>Objects</h3>';


// Iterface for Employee Types =================
interface Employees{
public function displayEmployeeInfo();
}


// Managment Class =============================
class Managment implements Employees{
    
    // Properties
    protected $sin;
    protected $age;
    protected $salary;

    // constructors will always start with two underscores __construct
    function __construct($sin, $age, $salary){
    $this->sin=$sin;
    $this->age=$age; 
    $this->salary=$salary;
    }
    //  Getters and Setters
    function set_sin($sin) {
      $this->sin = $sin;
    }
    function get_sin() {
      return $this->sin;
    }
    function set_age($age) {
      $this->age = $age;
    }
    function get_age() {
      return $this->age;
    }
    function set_salary($salary) {
      $this->salary = $salary;
    }
    function get_salary() {
      return $this->salary;
    }
    public function displayEmployeeInfo(){
        echo "SIN: {$this->sin} Age: {$this->age} Salary: {$this->salary} <br>";
    }
  }


  // Manager Class ===============================
    class Manager extends Managment{
    // Properties
    private $adminLevel;
    protected $color;

    function __construct($sin, $age, $salary, $adminLevel){
        $this->sin = $sin;
        $this->age = $age;
        $this->salary = $salary;
        $this->adminLevel=$adminLevel;
    }

    // Methods
    function set_admin($adminLevel) {
      $this->adminLevel = $adminLevel;
    }
    function get_admin() {
      return $this->adminLevel;
    }

    public function displayEmployeeInfo(){
    echo "SIN: {$this->sin} Age: {$this->age} Salary: {$this->salary}, Admin Level: {$this->adminLevel} <br>";
    }
  }



// Development Class ===============================
class Development implements Employees{

        // Properties
        protected $sin;
        protected $age;
        protected $salary;

    function __construct($sin, $age, $salary){
        $this->sin=$sin;
        $this->age=$age; 
        $this->salary=$salary;
        }
    
        //  Getters and Setters
    function set_sin($sin) {
        $this->sin = $sin;
      }
      function get_sin() {
        return $this->sin;
      }
      function set_age($age) {
        $this->age = $age;
      }
      function get_age() {
        return $this->age;
      }
      function set_salary($salary) {
        $this->salary = $salary;
      }
      function get_salary() {
        return $this->salary;
      }

    public function displayEmployeeInfo(){
        echo "SIN: {$this->sin} Age: {$this->age} Salary: {$this->salary}, Admin Level: MG-{$this->admin} <br>";
    }
}

// ITSpecialist Class ===============================
class ITSpecialist extends Development{

    private $projectsAssigned;
    
    function __construct($sin, $age, $salary, $projectAssigned){
        $this->sin=$sin;
        $this->age=$age; 
        $this->salary=$salary;
        $this->projectsAssigned = $projectAssigned;
        }

    function set_projectsAssigned($projectsAssigned) {
        $this->projectsAssigned = $projectsAssigned;
      }
      function get_projectsAssigned() {
        return $this->projectsAssigned;
      }

    function displayEmployeeInfo(){
        echo "SIN: {$this->sin} Age: {$this->age} Salary: {$this->salary}, Assingment Project: {$this->projectsAssigned}<br>";
    }
}   

$worker1 = new Manager(123456789, 45, 110000, 06);
$worker2 = new Manager(987654321, 55, 120000, 07);
$ItSpec1 = new ITSpecialist(5435353456, 35, 100000, 44);
$ItSpec2 = new ITSpecialist(2333534534, 30, 90000, 23);

$worker1->displayEmployeeInfo();
$worker2->displayEmployeeInfo();
$ItSpec1->displayEmployeeInfo();
$ItSpec2->displayEmployeeInfo();

echo '</div>';
include 'Footer.php';
?>