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
    </style>
</head>
<body>

<?php
echo '</br></br>';

require_once('db/pdo.php');
require_once('classes/voting.php');

$vote = new votes();

?>
    <div id="wrapper">
        <div id="header"></div>

        <div id="main">
            <div id="" class="">


<?php
if (empty($_POST["startSubmit"])) {
?>

    <form name="start" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="note">
            <h3>XXXX XXXXXXXXX, University of XXXXXXXX</h3>
            <p>
                Welcome to my survey</br>
                Informed Consent:</br>
            </p>
            <p>
                Thank you for taking part in this survey. The study is voluntary and anonymous. To ensure usefulness of

                all data please answer honestly. Try to answer every question. There are no right or wrong answers to the

                questions.
            </p>
            <p>
                The purpose of this survey is to measure your perception about your Manager/Leader behavior and

                how you feel at work.
            </p>
            <p>

                Participation in this survey is entirely voluntary. If you do not wish to take part, you are free to do so.

                You can withdraw at any time, without any consequences.
            </p>
            <p>


                The answers provided by you will be used as a main data for my research project. They will be stored

                securely. All information provided by you will be treated in the strictest confidence. Your name will not

                be mentioned during presenting the results. Furthermore, collected data will not be used as a part of your

                employment.
            </p>
            <p>

                I will be happy to share the results with you if you wish to. Please note that the result will not be

                published to the public.
            </p>
            <p>

                If you have any queries or would like further information about the project or your treatment as a

                participant in this survey contact me on:
            </p>

            <p>
                By clicking START SURVEY you are confirming that you have read explanation and understand the

                purpose of this survey. Also, giving permission to me to used your answers from questions as the main

                data for the study. Moreover, you agree to participate in the research. As well, you understand that

                participation in this study is entirely voluntary with possibility to leave at any time without
                giving a reason.</p>
        </div>
        <div class="button">
            <input type="submit" name="startSubmit" value="Start" />
        </div>
    </form>

<?php
}
elseif ( (!empty($_POST["startSubmit"])) && (empty($_POST["firstPageSubmit"]))  ) {
?>
    <form name="firstPage" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input hidden name="startSubmit" value="true">
        <div class="note">
            <h3>About your Manager/Leader</h3>
            <p>The following 12 statements are about your manager behavior at work. Judge how frequently each statement fits
                your manager style by crossing the number (from 0 to 4).</p>
            <h3>KEY</h3>
            <p>0- Not at all   1- Once in a while   2- Sometimes  3- Fairly often  4- Frequently, if not always</p>
        </div>
        <div class="line">
            <label for="option">1. My Manager/Leader makes me feel good to be around her/him</label>
            <input type="radio" name="firstPage[0]" value="0"/>0
            <input type="radio" name="firstPage[0]" value="1"/>1
            <input type="radio" name="firstPage[0]" value="2"/>2
            <input type="radio" name="firstPage[0]" value="3"/>3
            <input type="radio" name="firstPage[0]" value="4"/>4
        </div>

        <div class="line">
            <label for="option">2. My Manager/Leader expresses with a few simple words what I could and should do</label>
            <input type="radio" name="firstPage[1]" value="0"/>0
            <input type="radio" name="firstPage[1]" value="1"/>1
            <input type="radio" name="firstPage[1]" value="2"/>2
            <input type="radio" name="firstPage[1]" value="3"/>3
            <input type="radio" name="firstPage[1]" value="4"/>4
        </div>

        <div class="line">
            <label for="option">3. My Manager/Leader enables me to think about old problem in new ways</label>
            <input type="radio" name="firstPage[2]" value="0"/>0
            <input type="radio" name="firstPage[2]" value="1"/>1
            <input type="radio" name="firstPage[2]" value="2"/>2
            <input type="radio" name="firstPage[2]" value="3"/>3
            <input type="radio" name="firstPage[2]" value="4"/>4
        </div>

        <div class="line">
            <label for="option">4. My Manager/Leader helps me develop myself</label>
            <input type="radio" name="firstPage[3]" value="0"/>0
            <input type="radio" name="firstPage[3]" value="1"/>1
            <input type="radio" name="firstPage[3]" value="2"/>2
            <input type="radio" name="firstPage[3]" value="3"/>3
            <input type="radio" name="firstPage[3]" value="4"/>4
        </div>

        <div class="line">
            <label for="option">5. I have complete faith in my Manager/Leader</label>
            <input type="radio" name="firstPage[4]" value="0"/>0
            <input type="radio" name="firstPage[4]" value="1"/>1
            <input type="radio" name="firstPage[4]" value="2"/>2
            <input type="radio" name="firstPage[4]" value="3"/>3
            <input type="radio" name="firstPage[4]" value="4"/>4
        </div>

        <div class="line">
            <label for="option">6. My Manager/Leader provides appealing images about what I can do</label>
            <input type="radio" name="firstPage[5]" value="0"/>0
            <input type="radio" name="firstPage[5]" value="1"/>1
            <input type="radio" name="firstPage[5]" value="2"/>2
            <input type="radio" name="firstPage[5]" value="3"/>3
            <input type="radio" name="firstPage[5]" value="4"/>4
        </div>

        <div class="line">
            <label for="option">7. My Manager/Leader provides me with new ways of looking at puzzling things</label>
            <input type="radio" name="firstPage[6]" value="0"/>0
            <input type="radio" name="firstPage[6]" value="1"/>1
            <input type="radio" name="firstPage[6]" value="2"/>2
            <input type="radio" name="firstPage[6]" value="3"/>3
            <input type="radio" name="firstPage[6]" value="4"/>4
        </div>

        <div class="line">
            <label for="option">8. My Manager/Leader lets me know how she/he think I am doing</label>
            <input type="radio" name="firstPage[7]" value="0"/>0
            <input type="radio" name="firstPage[7]" value="1"/>1
            <input type="radio" name="firstPage[7]" value="2"/>2
            <input type="radio" name="firstPage[7]" value="3"/>3
            <input type="radio" name="firstPage[7]" value="4"/>4
        </div>
        <div class="line">
            <label for="option">9. I am proud to be associated with my Manager/Leader</label>
            <input type="radio" name="firstPage[8]" value="0"/>0
            <input type="radio" name="firstPage[8]" value="1"/>1
            <input type="radio" name="firstPage[8]" value="2"/>2
            <input type="radio" name="firstPage[8]" value="3"/>3
            <input type="radio" name="firstPage[8]" value="4"/>4
        </div>

        <div class="line">
            <label for="option">10. My Manager/Leader helps me find meaning in my work</label>
            <input type="radio" name="firstPage[9]" value="0"/>0
            <input type="radio" name="firstPage[9]" value="1"/>1
            <input type="radio" name="firstPage[9]" value="2"/>2
            <input type="radio" name="firstPage[9]" value="3"/>3
            <input type="radio" name="firstPage[9]" value="4"/>4
        </div>

        <div class="line">
            <label for="option">11. My Manager/Leader gets me to rethink ideas that I had never questioned before</label>
            <input type="radio" name="firstPage[10]" value="0"/>0
            <input type="radio" name="firstPage[10]" value="1"/>1
            <input type="radio" name="firstPage[10]" value="2"/>2
            <input type="radio" name="firstPage[10]" value="3"/>3
            <input type="radio" name="firstPage[10]" value="4"/>4
        </div>

        <div class="line">
            <label for="option">12. My Manager/Leader gives personal attention to me when seem rejected</label>
            <input type="radio" name="firstPage[11]" value="0"/>0
            <input type="radio" name="firstPage[11]" value="1"/>1
            <input type="radio" name="firstPage[11]" value="2"/>2
            <input type="radio" name="firstPage[11]" value="3"/>3
            <input type="radio" name="firstPage[11]" value="4"/>4
        </div>

        <div class="button">
            <input type="submit" name="firstPageSubmit" value="Go to Page 1 of 3" />
        </div>
    </form>


<?php
}
elseif ( (!empty($_POST["firstPageSubmit"]))  && (empty($_POST["secondPageSubmit"]))  ) {

    if (!empty($_POST["firstPage"])) {

        //echo '</br>saving first page</br>';
        $firstPage = $_POST['firstPage'];
        $lastId = $vote->saveFirstPage($firstPage);
        //echo 'lastId sss'.$lastId;
    }
?>

    <form name="secondPage" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input hidden name="startSubmit" value="true">
        <input hidden name="firstPageSubmit" value="true">
        <input hidden name="lastId" value="<?php echo $lastId;?>">

        <div class="note">
            <h3>About Your Work Engagement</h3>
            <p>The following 9 statements are about how you feel at work. Please read each statement carefully and
                decide if you ever feel this way about your present job. Judge how frequently each statement fits you by
                crossing the number from (0 to 6).</p>
            <h3>KEY</h3>
            <p>0- Never 1- Almost never (A few times a year or less)  2- Rarely (Once a month or less)
                3 - Sometimes (A few times a month)  4- Often (Once a week)  5- Very Often (A few times a week)
                6- Always (Every day)</p>
        </div>
        <div class="line">
            <label for="option">1. At my work, I feel bursting with energy (VI1)</label>
            <input type="radio" name="secondPage[0]" value="0"/>0
            <input type="radio" name="secondPage[0]" value="1"/>1
            <input type="radio" name="secondPage[0]" value="2"/>2
            <input type="radio" name="secondPage[0]" value="3"/>3
            <input type="radio" name="secondPage[0]" value="4"/>4
            <input type="radio" name="secondPage[0]" value="5"/>5
            <input type="radio" name="secondPage[0]" value="6"/>6
        </div>

        <div class="line">
            <label for="option">2. At my job, I feel strong and vigorous(VI2)</label>
            <input type="radio" name="secondPage[1]" value="0"/>0
            <input type="radio" name="secondPage[1]" value="1"/>1
            <input type="radio" name="secondPage[1]" value="2"/>2
            <input type="radio" name="secondPage[1]" value="3"/>3
            <input type="radio" name="secondPage[1]" value="4"/>4
            <input type="radio" name="secondPage[1]" value="5"/>5
            <input type="radio" name="secondPage[1]" value="6"/>6
        </div>

        <div class="line">
            <label for="option">3. I am enthusiastic about my job (DE1)</label>
            <input type="radio" name="secondPage[2]" value="0"/>0
            <input type="radio" name="secondPage[2]" value="1"/>1
            <input type="radio" name="secondPage[2]" value="2"/>2
            <input type="radio" name="secondPage[2]" value="3"/>3
            <input type="radio" name="secondPage[2]" value="4"/>4
            <input type="radio" name="secondPage[2]" value="5"/>5
            <input type="radio" name="secondPage[2]" value="6"/>6
        </div>

        <div class="line">
            <label for="option">4. My job inspires me (DE2)</label>
            <input type="radio" name="secondPage[3]" value="0"/>0
            <input type="radio" name="secondPage[3]" value="1"/>1
            <input type="radio" name="secondPage[3]" value="2"/>2
            <input type="radio" name="secondPage[3]" value="3"/>3
            <input type="radio" name="secondPage[3]" value="4"/>4
            <input type="radio" name="secondPage[3]" value="5"/>5
            <input type="radio" name="secondPage[3]" value="6"/>6
        </div>

        <div class="line">
            <label for="option">5. When I get up in the morning, I feel like going to work (VI3)</label>
            <input type="radio" name="secondPage[4]" value="0"/>0
            <input type="radio" name="secondPage[4]" value="1"/>1
            <input type="radio" name="secondPage[4]" value="2"/>2
            <input type="radio" name="secondPage[4]" value="3"/>3
            <input type="radio" name="secondPage[4]" value="4"/>4
            <input type="radio" name="secondPage[4]" value="5"/>5
            <input type="radio" name="secondPage[4]" value="6"/>6
        </div>

        <div class="line">
            <label for="option">6. I feel happy when I am working intensely (AB1)</label>
            <input type="radio" name="secondPage[5]" value="0"/>0
            <input type="radio" name="secondPage[5]" value="1"/>1
            <input type="radio" name="secondPage[5]" value="2"/>2
            <input type="radio" name="secondPage[5]" value="3"/>3
            <input type="radio" name="secondPage[5]" value="4"/>4
            <input type="radio" name="secondPage[5]" value="5"/>5
            <input type="radio" name="secondPage[5]" value="6"/>6
        </div>

        <div class="line">
            <label for="option">7. I am proud on the work that I do (DE3)</label>
            <input type="radio" name="secondPage[6]" value="0"/>0
            <input type="radio" name="secondPage[6]" value="1"/>1
            <input type="radio" name="secondPage[6]" value="2"/>2
            <input type="radio" name="secondPage[6]" value="3"/>3
            <input type="radio" name="secondPage[6]" value="4"/>4
            <input type="radio" name="secondPage[6]" value="5"/>5
            <input type="radio" name="secondPage[6]" value="6"/>6
        </div>

        <div class="line">
            <label for="option">8. I am immersed in my work (AB2)</label>
            <input type="radio" name="secondPage[7]" value="0"/>0
            <input type="radio" name="secondPage[7]" value="1"/>1
            <input type="radio" name="secondPage[7]" value="2"/>2
            <input type="radio" name="secondPage[7]" value="3"/>3
            <input type="radio" name="secondPage[7]" value="4"/>4
            <input type="radio" name="secondPage[7]" value="5"/>5
            <input type="radio" name="secondPage[7]" value="6"/>6
        </div>
        <div class="line">
            <label for="option">9. I get carried away when I’m working (AB3)</label>
            <input type="radio" name="secondPage[8]" value="0"/>0
            <input type="radio" name="secondPage[8]" value="1"/>1
            <input type="radio" name="secondPage[8]" value="2"/>2
            <input type="radio" name="secondPage[8]" value="3"/>3
            <input type="radio" name="secondPage[8]" value="4"/>4
            <input type="radio" name="secondPage[8]" value="5"/>5
            <input type="radio" name="secondPage[8]" value="6"/>6
        </div>
        <div class="button">
            <input type="submit" name="secondPageSubmit" value="Go to Page 2 of 3" />
        </div>
    </form>
    <?php
}
elseif ( (!empty($_POST["secondPageSubmit"])) && (empty($_POST["thirdPageSubmit"]))  )  {

    if(!empty($_POST["secondPage"])) {

        //echo '</br>saving second page</br>';
        //echo 'lastId: '.$_POST['lastId'];

        $secondPage = $_POST['secondPage'];
        $vote->saveSecondPage($secondPage, $_POST['lastId']);
    }
?>

    <form name="thirdPage" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input hidden name="startSubmit" value="true">
        <input hidden name="firstPageSubmit" value="true">
        <input hidden name="secondPageSubmit" value="true">
        <input hidden name="lastId" value="<?php echo $_POST["lastId"];?>">

        <div class="note">
            <h3>Please Answer The Following Questions</h3>
            <p>1. Has (and if yes how) your Manager/Leader helped you to succeed in your position?</p>
        </div>
        <div class="line">
            <textarea name="threeone" onfocus="clearContents(this);" rows="6" cols="80"></textarea>
        </div>
        <div class="note">
            <p>2. What is engagement in your company to you?</p>
        </div>
        <div class="line">
            <textarea name="threetwo" onfocus="clearContents(this);" rows="6" cols="80"></textarea>
        </div>
        <div class="note">
            <p>3. The one thing I would like to change in my company is........</p>
        </div>
        <div class="line">
            <textarea name="threethree" onfocus="clearContents(this);" rows="6" cols="80"></textarea>
        </div>
        <div class="button">
            <input type="submit" name="thirdPageSubmit" value="Go to Page 3 of 3"/>
        </div>
    </form>
    <?php
}
elseif ( (!empty($_POST["thirdPageSubmit"])) && (empty($_POST["fourthPageSubmit"]))  )  {


        //echo '</br>saving third page</br>';
        //echo 'lastId: '.$_POST['lastId'];
        $threeone = $_POST['threeone'];
        $threetwo = $_POST['threetwo'];
        $threethree = $_POST['threethree'];
        $vote->saveThirdPage($threeone, $threetwo, $threethree, $_POST['lastId']);


    ?>
    <form name="fourthPage" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input hidden name="startSubmit" value="true">
        <input hidden name="firstPageSubmit" value="true">
        <input hidden name="secondPageSubmit" value="true">
        <input hidden name="thirdPageSubmit" value="true">
        <input hidden name="lastId" value="<?php echo $_POST["lastId"];?>">

        <div class="note">
            <h3>Finally,  About Yourself</h3>
            <p>Please tick the right box</p>
        </div>
        <div class="line">
            <label for="option">1. Are you female or male?</label></br>
            <input type="radio" name="sex" value="female" />Female</br>
            <input type="radio" name="sex" value="male" />Male</br>
        </div>
        <div class="line">
            <label for="option">2. How old are you?</label></br>
            <input type="radio" name="age" value="less then 20" />Less then 20</br>
            <input type="radio" name="age" value="21-25" />21-25</br>
            <input type="radio" name="age" value="26-29" />26-29</br>
            <input type="radio" name="age" value="30-33" />30-33</br>
            <input type="radio" name="age" value="above 34" />Above 34</br>
        </div>
        <div class="line">
            <label for="option">3. How long you work for this company?</label></br>
            <input type="radio" name="work" value="less then 20" />Less than 1 year</br>
            <input type="radio" name="work" value="1 year to less than 2 years" />1 year to less than 2 years</br>
            <input type="radio" name="work" value="2 years to less than 4 years" />2 years to less than 4 years</br>
            <input type="radio" name="work" value="4 years to less than 6 years" />4 years to less than 6 years</br>
            <input type="radio" name="work" value="6 years or more" />6 years or more</br>
        </div>
        <div class="button">
            <input type="submit" name="fourthPageSubmit" value="Submit"/>
        </div>
    </form>

<?php
}
else {

        //echo '</br>saving fourth page</br>';
        //echo 'lastId: '.$_POST['lastId'];
        $sex = $_POST['sex'];
        $age = $_POST['age'];
        $work = $_POST['work'];
        $vote->saveForthPage($sex, $age, $work, $_POST['lastId']);

    ?>
    <div class="note">
        <h3>Thank you for your time !</h3>
    </div>
<?php
}
?>

            </div>
        </div>

        <div id="footer"></div>
    </div>

</body>
</html>
