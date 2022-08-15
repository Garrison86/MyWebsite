<?php

class WebsiteUser{
    // used for siteground
    // /* Host address for the database */
    // protected static $DB_HOST = "localhost";
    // /* Database username */
    // protected static $DB_USERNAME = "ujrfgcl0tsqbq";
    // /* Database password */
    // protected static $DB_PASSWORD = "12345Eatery";
    // /* Name of database */
    // protected static $DB_DATABASE = "dbsbzgigqz1kqd";


    /* Host address for the database */
    protected static $DB_HOST = "127.0.0.1";
    /* Database username */
    protected static $DB_USERNAME = "ugntm1olmpap0";
    /* Database password */
    protected static $DB_PASSWORD = "";
    /* Name of database */
    protected static $DB_DATABASE = "dbuoykhmo6i7yu";
    
    private $username;
    private $password;
    private $mysqli;
    private $dbError;
    private $authenticated = false;
    //====================================================================
    
    function __construct() {
        $this->mysqli = new mysqli(self::$DB_HOST, self::$DB_USERNAME, self::$DB_PASSWORD, self::$DB_DATABASE);
        if($this->mysqli->errno){
            $this->dbError = true;
        }else{
            $this->dbError = false;
        }
    }

    //======================= Authenticate ================================
    public function authenticate($username, $password){
        $loginQuery = "SELECT * FROM users 
            WHERE username = ? 
            AND password = ?";

        $stmt = $this->mysqli->prepare ( $loginQuery );
        $stmt->bind_param ('ss', $username, $password);
        $stmt->execute();

        $result = $stmt->get_result();
        
        if($result->num_rows == 1){
            $this->username = $username;
            $this->password = $password;
            $this->authenticated = true;

        }
        $stmt->free_result();
    }
    //====================================================================

    public function isAuthenticated(){
        return $this->authenticated;
    }

    //====================================================================
    
    public function hasDbError(){
        return $this->dbError;
    }

    //====================================================================
    
    public function getUsername(){
        return $this->username;
    }

   //====================================================================

    public function insertuser($first, $last, $number, $email, $username, $referral){
        $current = "";
        try{
        $sql = "INSERT INTO  mailinglist (firstName, lastName, phoneNumber, emailAddress, username, referrer) 
                VALUES ('$first',
                '$last',
                '$number',
                '$email',
                '$username',
                '$referral')";
        
                $this->mysqli->query($sql);
        $current = "Successfully entererd information";
        }
        catch(RuntimeException $e ){
            echo "Cannot add user: " . $e->getMessage();
            $current = 'Unsuccessful Insertion'; 
        }
        return $current;
    }
}
?>
