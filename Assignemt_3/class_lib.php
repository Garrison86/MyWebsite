<?php


  // $_SESSION["empName"] = $_POST["empNameTextBox"];
  // $_SESSION["empId"] = $_POST["IDTextBox"];
  // $_SESSION["empTel"] = $_POST["TeleTextBox"];
  // $_SESSION["empEmail"] = $_POST["EmailTextBox"];
  // $_SESSION["newPos"] = $_POST["position"];


class EventItem {
 
// Properties
  private $eventname;
  private $eventDate;
  private $eventTime;
  private $eventDesc;
  private $eventPrice;
  

  function __construct($eventname, $eventDate, $eventTime, $eventDesc, $eventPrice) {
    $this->eventname = $eventname;
    $this->eventDate = $eventDate;
    $this->eventTime = $eventTime;
    $this->eventDesc = $eventDesc;
    $this->eventPrice = $eventPrice;
  }


  // Methods for getting and setting
  function set_eventname($eventname) {
    $this->eventname = $eventname;
  }
  function get_eventname() {
    return $this->eventname;
  }
  function set_eventDate($eventDate) {
    $this->eventDate = $eventDate;
  }
  function get_eventDate() {
    return $this->eventDate;
  }
  function set_eventTime($eventTime) {
    $this->eventTime = $eventTime;
  }
  function get_eventTime() {
    return $this->eventTime;
  }
  function set_eventDesc($eventDesc) {
    $this->eventDesc = $eventDesc;
  }
  function get_eventDesc() {
    return $this->eventDesc;
  }
  function set_eventPrice($eventPrice) {
    $this->eventPrice = $eventPrice;
  }
  function get_eventPrice() {
    return $this->eventPrice;
  }

  public function displayEvent(){
    echo "<p><strong class=\"{$this->eventname}\"> {$this->eventname} </strong><br/> 
    <strong>Date: </strong>{$this->eventDate}<br/>
    <strong>Time: </strong>{$this->eventTime}<br/>
    <strong>Price: </strong>{$this->eventPrice}<br/>
    <strong>Event Details: </strong>{$this->eventDesc}<br/> 
    </p>";
    }

}

//==================================== Event objects created ============
$event1 = new EventItem("St. Patty's Day Party", "Tuesday Oct 17, 2017", "7pm","Join us for an authentic Irish four course meal, complete with shepard's pie and one green beer!" ,"$35.00");
$event2 = new EventItem("Samy's Spring Fling!", "Saturday Oct 18, 2017", "8pm","Join us for to kick off the beginning of spring! This event will include 4 of Samy's infamous appetizers and one cocktail!" ,"$40.00");
$event3 = new EventItem("St. Patty's Day Party", "Tuesday Oct 17, 2017", "7pm","Description Here " ,"$35.00");
$event4 = new EventItem("St. Patty's Day Party", "Tuesday Oct 17, 2017", "7pm","Description Here " ,"$35.00");


//===================== Array to Hold events ============================
$displayEvent1 = $event1->displayEvent();
$displayEvent2 = $event2->displayEvent();

$eventsArray = array($displayEvent1 ,$displayEvent2);

?> 