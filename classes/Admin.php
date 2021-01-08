<?php
$filepath = realpath(dirname(__FILE__));
include ($filepath.'/../helpers/Formate.php');
include ($filepath.'/../lib/Database.php');
include ($filepath.'/../lib/Session.php');

// include ("../helpers/Formate.php");
// include ("../lib/Database.php");
// include ("../lib/Session.php");
class Admin{
    private $db;
    private $fm;

    public function __construct()
    {
        $this->db = new Database();
        $this->fm = new Format();
    }
}
?>