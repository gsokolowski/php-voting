<?php
require_once('./config.php');

class db {
    private $conn = null;
    private $statement = null;

    function __construct() {
        global $DB;
        $this->conn = new PDO('mysql:dbname='.$DB->name.';host='.$DB->host, $DB->user, $DB->pass);
    }

    function execute_query_on_param($query) {

        //echo $query.'</br>';

        $this->statement = $this->conn->prepare($query);
        $result = $this->statement->execute();

        if ($result === false) {
            return false;
        }
        return true;
    }

    function execute_query($query, $params) {
        //echo $query;
        //var_dump($params);
        $this->statement = $this->conn->prepare($query);

        $result = $this->statement->execute($params);

        if ($result === false) {
            return false;
        }
        return true;
    }

    function fetch_results() {
        return $this->statement->fetchAll(PDO::FETCH_OBJ);
    }

    function last_id() {
        return $this->conn->lastInsertId();
    }
}

