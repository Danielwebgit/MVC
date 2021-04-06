<?php

require_once __DIR__."/../../vendor/autoload.php";


use CoffeeCode\DataLayer\Connect;


class HomeController
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

         $query=$this->conn->query("SELECT * FROM users");
         var_dump($query->fetchAll());

     }

     public function aboutUs()
     {
          echo 'I am in '.__CLASS__ .' method '.__METHOD__;
     }


}