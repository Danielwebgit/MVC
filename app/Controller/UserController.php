<?php

require_once __DIR__."/../../vendor/autoload.php";


use CoffeeCode\DataLayer\Connect;


class UserController
{
    /**
     * @var PDO|null
     */
    private $conn;
    /**
     * @var PDOException|null
     */
    private $error;

    public function __construct()
    {
        $this->conn=Connect::getInstance();
        $this->error=Connect::getError();

    }


    public function index($id="", $name="")
    {

       return "Ola mano brow";

    }

    public function aboutUs()
    {
        echo 'I am in '.__CLASS__ .' method '.__METHOD__;
    }


}