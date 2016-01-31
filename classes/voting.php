<?php
require_once('./config.php');
require_once('./db/pdo.php');

class votes
{
    private $id = null;
    function __construct()
    {
        $this->db = new db();
        //echo 'constructor created';
        //var_dump($this->db);
    }


    function getUserIP()
    {
        $client = @$_SERVER['HTTP_CLIENT_IP'];
        $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
        $remote = $_SERVER['REMOTE_ADDR'];

        if (filter_var($client, FILTER_VALIDATE_IP)) {
            $ip = $client;
        } elseif (filter_var($forward, FILTER_VALIDATE_IP)) {
            $ip = $forward;
        } else {
            $ip = $remote;
        }
        return $ip;
    }

    function getAllVotes()
    {
        $sql = "SELECT id, oneone, onetwo, onethree, onefour, onefive, onesix, oneseven,
                oneeight, onenine, oneten, oneeleven, onetwelve, twoone, twotwo, twothree, twofour,
                twofive, twosix, twoseven, twoeight, twonine, threeone, threetwo, threethree,
                sex, age, work, ip, creation_time FROM votes";
        if ($this->db->execute_query_on_param($sql)) {
            $results = $this->db->fetch_results();
            return $results;
        }
    }

    function saveFirstPage($firstPage)
    {
        //var_dump($firstPage);
        $dateTime = new DateTime("now", new DateTimeZone('Europe/London') );
        $dateTime = $dateTime->format('Y-m-d H:i:s');

        $ip = $this->getUserIP();

        $sql = "INSERT INTO votes(oneone, onetwo, onethree, onefour, onefive, onesix, oneseven,
                oneeight, onenine, oneten, oneeleven, onetwelve, ip, creation_time)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        if(!isset($firstPage[0])) $firstPage[0]=100;
        if(!isset($firstPage[1])) $firstPage[1]=100;
        if(!isset($firstPage[2])) $firstPage[2]=100;
        if(!isset($firstPage[3])) $firstPage[3]=100;
        if(!isset($firstPage[4])) $firstPage[4]=100;
        if(!isset($firstPage[5])) $firstPage[5]=100;
        if(!isset($firstPage[6])) $firstPage[6]=100;
        if(!isset($firstPage[7])) $firstPage[7]=100;
        if(!isset($firstPage[8])) $firstPage[8]=100;
        if(!isset($firstPage[9])) $firstPage[9]=100;
        if(!isset($firstPage[10])) $firstPage[10]=100;
        if(!isset($firstPage[11])) $firstPage[11]=100;

        if ($this->db->execute_query($sql, array($firstPage[0], $firstPage[1], $firstPage[2], $firstPage[3],
                                                $firstPage[4], $firstPage[5], $firstPage[6], $firstPage[7],
                                                $firstPage[8], $firstPage[9], $firstPage[10], $firstPage[11],
                                                $ip, $dateTime)))
        {

            $this->id = $this->db->last_id();
            $this->oneone = $firstPage[0];
            $this->onetwo = $firstPage[1];
            $this->onethree = $firstPage[2];
            $this->onefour = $firstPage[3];
            $this->onefive = $firstPage[4];
            $this->onesix = $firstPage[5];
            $this->oneseven = $firstPage[6];
            $this->oneeight = $firstPage[7];
            $this->onenine = $firstPage[8];
            $this->oneten = $firstPage[9];
            $this->oneeleven = $firstPage[10];
            $this->onetwelve = $firstPage[11];
            $this->ip = $ip;
            $this->dateTime = $dateTime;
            return $this->id;
        }
    }

    function saveSecondPage($secondPage, $lastId) {

        $sql = "UPDATE votes SET twoone=?, twotwo=?, twothree=?, twofour=?,
                                  twofive=?, twosix=?, twoseven=?, twoeight=?,
                                    twonine=? WHERE id=?";

        if(!isset($secondPage[0])) $secondPage[0]=100;
        if(!isset($secondPage[1])) $secondPage[1]=100;
        if(!isset($secondPage[2])) $secondPage[2]=100;
        if(!isset($secondPage[3])) $secondPage[3]=100;
        if(!isset($secondPage[4])) $secondPage[4]=100;
        if(!isset($secondPage[5])) $secondPage[5]=100;
        if(!isset($secondPage[6])) $secondPage[6]=100;
        if(!isset($secondPage[7])) $secondPage[7]=100;
        if(!isset($secondPage[8])) $secondPage[8]=100;

        if ($this->db->execute_query($sql, array($secondPage[0], $secondPage[1], $secondPage[2], $secondPage[3],
                                                  $secondPage[4], $secondPage[5], $secondPage[6], $secondPage[7],
                                                   $secondPage[8], $lastId)) ){
            $this->oneone = $secondPage[0];
            $this->onetwo = $secondPage[1];
            $this->onethree = $secondPage[2];
            $this->onefour = $secondPage[3];
            $this->onefive = $secondPage[4];
            $this->onesix = $secondPage[5];
            $this->oneseven = $secondPage[6];
            $this->oneeight = $secondPage[7];
            $this->onenine = $secondPage[8];
            return true;
        }
    }

    function saveThirdPage($threeone, $threetwo, $threethree, $lastId) {

        $sql = "UPDATE votes SET threeone=?, threetwo=?, threethree=? WHERE id=?";

        if ($this->db->execute_query($sql, array($threeone, $threetwo, $threethree, $lastId)) ) {
            $this->threeone = $threeone;
            $this->threetwo = $threetwo;
            $this->threethree = $threethree;
            return true;
        }
    }

    function saveForthPage($sex, $age, $work, $lastId) {

        $sql = "UPDATE votes SET sex=?, age=?, work=? WHERE id=?";

        if ($this->db->execute_query($sql, array($sex, $age, $work, $lastId)) ) {
            $this->sex = $sex;
            $this->age = $age;
            $this->work = $work;
            return true;
        }
    }
    function saveDataToCsv($file,$oneVote) {
        $array = json_decode(json_encode($oneVote), true);
        fputcsv($file,$array);
    }
}

