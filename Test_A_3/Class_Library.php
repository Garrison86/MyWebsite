<?php 

    class EventItem {

        private $eventName;
        private $eventDate;
        private $eventDesc;
        private $eventPrice;


        public function __construct( $eventName, 
                                     $eventDate, 
                                     $eventDesc, 
                                     $eventPrice ) {

            $this->eventName = $eventName;
            $this->eventDate = $eventDate;
            $this->eventDesc = $eventDesc;
            $this->eventPrice = $eventPrice;
        }
        public function getEvent(){
            return "<dl>
                        <dt>" . $this->eventName . "</dt>
                        <dt>Date: </dt>
                            <dd>" .$this->eventDate. "</dd>
                        <dt>Time: </dt>
                            <dd>" .$this->eventDesc. "</dd>
                        <dt>Price: </dt>
                            <dd>" .$this->eventPrice." dollars</dd>
                    </dl><br>";
        }
    }


    

    ?>
