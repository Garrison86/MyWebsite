<?php
require 'db_config.php';

class WebUser extends Database {

    private $username;
    private $password;
    private $authenticated;

//====================================================================
    public function getAllUsers(){

        $sqlQuery = "SELECT * FROM mailingList";
        $state = $this->connect()->query($sqlQuery);
        
        if( $state->rowCount() )
            while( $row = $state->fetch() )
                echo "<tr><td>" . $row['firstName'] . ' ' . $row['lastName'] .
                     "</td><td>" . $row['emailAddress'] . "</td>" .
                     "</td><td>" . $row['phoneNumber'] . "</td></tr>";
    }
 //======================= Authenticate ================================
    public function authenticate( $user, $password ){
        $query = "SELECT * FROM adminUsers 
                  WHERE Username = ? 
                  AND Password = ?";

        $state = $this->connect()->prepare($query);
        $state->execute([$user, $password]);

        if( $state->rowCount() == 1 ) {
            $this->username = $user;
            $this->authenticated = true;
            return true;
        }
        else return false;
    }
   //====================================================================
    public function isAuthenticated(){
        return $this->authenticated;
    }
    //====================================================================
    public function getUsername(){
        return $this->username;
    }
   //====================================================================
    public function insertUser( $first, 
                                $last,
                                $phone, 
                                $email, 
                                $user,
                                $referral ){
        $state = '';
        try{
            $sqlQuery = "INSERT INTO mailingList ( firstName, lastName, phoneNumber, emailAddress, username, referrer ) 
                         VALUES( '$first', '$last', '$phone', '$email', '$user', '$referral' )";
            $this->connect()->query($sqlQuery);
            $state = 'Successful Insertion';
        }
        catch( PDOException $e ){
            echo "Cannot add user: " . $e->getMessage();
            $state = 'Unsuccessful Insertion'; 
        }
        return $state;
    }
}
?>