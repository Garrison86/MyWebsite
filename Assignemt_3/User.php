<?php
require 'db_config.php';

class WebUser{

    private $username;
    private $password;
    private $authenticated;

    /* ================= GetAllUser Function ===============*/
    public function getAllUsers(){

        $sqlQuery = "SELECT * FROM mailingList";
        $state = $this->connect()->query($sqlQuery);
        
        if( $state->rowCount() )
            while( $row = $state->fetch() )
                echo "<tr><td>" . $row['firstName'] . ' ' . $row['lastName'] .
                     "</td><td>" . $row['emailAddress'] . "</td>" .
                     "</td><td>" . $row['phoneNumber'] . "</td></tr>";
    }
    /* ================= Authentication Function ===============*/
    public function authenticate( $user, $password ){
        $query = "SELECT * FROM adminUsers 
                  WHERE Username = ? 
                  AND Password = ?";

        $state = $this->connect()->prepare($query);
        $state->execute([$user, $password]);

        if( $state->rowCount() == 1 ) {
            $this->username = $user;
            $this->password = $password;
            $this->authenticated = true;

            return true;
        }
        else return false;
    }
    /* ================= isAuthenticated Function ===============*/
    public function isAuthenticated(){
        return $this->authenticated;
    }
    public function getUsername(){
        return $this->username;
    }

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
        catch( RuntimeException $e ){
            echo "Cannot add user: " . $e->getMessage();
            $state = 'Unsuccessful Insertion'; 
        }
        return $state;
    }
}
?>