<?php

Class  Base {
    private $link;                         //create a variable in which we will enter the connection to the database

    public function __construct()
    {                                                              // constructor for initializing objects based on the class
        $this->connect();
    }
    private function connect()                                       //function for connect with database
    {
        $config = require_once 'config.php';    //put the result from config.php into the config variable
        $dsn = 'mysql:host='.$config['host'].';dbname='.$config['db_name'].';charset='.$config['charset'];
        $this->link = new PDO($dsn,$config['username'],$config['password']);             // connection to the database
        return $this;
    }
    public function execute($sql)
    {
        $sth = $this->link->prepare($sql);
        return $sth->execute();
    }
    public function query($sql)
    {
        $exe = $this->execute($sql);
        $result=$exe->fetchAll(PDO::FETCH_ASSOC);
        if ($result === false) {
            return [];
        }
        return $result;
    }

}

$firstname = $_POST['firstname']; //  receive data from the post request by their name parameter
$lastname = $_POST['lastname'];
$birthday = $_POST['birthday'];
$subject = $_POST['subject'];
$country = $_POST['country'];
$mail = $_POST['mail'];
$phone=$_POST['phone'];

if($firstname&&$lastname&&$birthday&&$subject&&$country) {
    $db = new Base();
    $db->execute("INSERT INTO users(first_name,last_name,birthday,subject,country) VALUES ('$firstname','$lastname','$birthday','$subject','$country')");
}

if($mail&&$firstname) {
    $db = new Base();
    $db->execute("UPDATE users 
    SET email= '$mail', phone='$phone'
    WHERE first_name = '$firstname'");
}














