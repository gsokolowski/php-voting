<html>
<head>
    <title>Voteing</title>
    <script type="text/javascript" src="js/jquery-1.6.4.min.js"></script>
    <script type="text/javascript" src="js/jquery-cookie/jquery.cookie.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <style type="text/css">
        #main {
            width: 900px ;
            margin-left: auto ;
            margin-right: auto ;
        }
        .note {
            padding-top: 30px;
            width: 800px;
        }
        .line {
            float: left;
            clear: both;
            line-height: 30px;
            margin-bottom: 5px;
        }
        label {
            width: 500px;
            background-color: #EEEEEE;
            float: left;
        }
        input[type=radio] {
            display      : inline-block;
            margin: 0 5px 0 10px;
        }
        .button {
            display: block;
            clear: left;
        }
        p {
            clear: both;
        }
        h3 {
            margin-top: 30px;
            clear: both;
        }
        a.button {
            -webkit-appearance: button;
            -moz-appearance: button;
            appearance: button;

            text-decoration: none;
            color: initial;
            width:200px;
        }
    </style>

</head>
<body>
<div>
    <a href="http://webgregor.co.uk/voting/data.csv" class="button">Download data</a>

<?php
    require_once('db/pdo.php');
    require_once('classes/voting.php');

    $vote = new votes();
    $allVotes = $vote->getAllVotes();
    //var_dump($allVotes);
    $file = fopen("data.csv","w");

    foreach($allVotes as $oneVote) {
        //var_dump($oneVote);
        $vote->saveDataToCsv($file,$oneVote);

        echo '</br></br>';
        echo 'id: '.$oneVote->id.' ';
        echo 'oneone: '.$oneVote->oneone.' ';
        echo 'onetwo: '.$oneVote->onetwo.' ';
        echo 'onethree: '.$oneVote->onethree.' ';
        echo 'onefour: '.$oneVote->onefour.' ';
        echo 'onefive: '.$oneVote->onefive.' ';
        echo 'onesix: '.$oneVote->onesix.' ';
        echo 'oneseven: '.$oneVote->oneseven.' ';
        echo 'oneeight: '.$oneVote->oneeight.' ';
        echo 'onenine: '.$oneVote->onenine.' ';
        echo 'oneten: '.$oneVote->oneten.' ';
        echo 'oneeleven: '.$oneVote->oneeleven.' ';
        echo 'onetwelve: '.$oneVote->onetwelve.' ';
        echo 'twoone: '.$oneVote->twoone.' ';
        echo 'twotwo: '.$oneVote->twotwo.' ';
        echo 'twothree: '.$oneVote->twothree.' ';
        echo 'twofour: '.$oneVote->twofour.' ';
        echo 'twofive: '.$oneVote->twofive.' ';
        echo 'twosix: '.$oneVote->twosix.' ';
        echo 'twoseven: '.$oneVote->twoseven.' ';
        echo 'twoeight: '.$oneVote->twoeight.' ';
        echo 'twonine: '.$oneVote->twonine.' ';
        echo 'threeone: '.$oneVote->threeone.' ';
        echo 'threetwo: '.$oneVote->threetwo.' ';
        echo 'threethree: '.$oneVote->threethree.' ';
        echo 'sex: '.$oneVote->sex.' ';
        echo 'age: '.$oneVote->age.' ';
        echo 'work: '.$oneVote->work.' ';
        echo 'ip: '.$oneVote->ip.' ';
        echo 'creation_time: '.$oneVote->creation_time.' ';

    }
    echo '</br></br></br></br>';

?>

</div>

</body>
</html>
