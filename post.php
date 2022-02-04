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
        $exe = $this->exetute($sql);
        $result=$exe->fetchAll(PDO::FETCH_ASSOC);
        if ($result === false) {
            return [];
        }
        return $result;
    }

}


if (isset($_POST['send'])) {
    $firstname = $_POST['first_name']; //  receive data from the post request by their name parameter
    $lastname = $_POST['last_name'];
    $birthday = $_POST['birthday'];
    $subject = $_POST['subject'];
    $country = $_POST['country'];
    $phone = $_POST['phone'];
    $mail = $_POST['mail'];
    $db = new Base();
    $db->execute("INSERT INTO users(first_name,last_name,birthday,subject,country,phone,email) VALUES ('$firstname','$lastname','$birthday','$subject','$country','$phone','$mail')");
}


if (isset($_POST['send2'])) {
    $firstname = $_POST['first_name'];
    $company = $_POST['company'];
    $position = $_POST['position'];
    $about = $_POST['about'];
    $phototmp = $_FILES['photo']['tmp_name'];
    $photoname = $_FILES['photo']['name'];
    $path = "Downloads/";
    $filedir = $path.$photoname;
    $db = new Base();
    $db->execute("INSERT INTO users(company,pozition,about,photo) VALUES ('$company','$position' ,'$about','$path') WHERE first_name='$firstname'");
}

