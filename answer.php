<?php
require('config.php');

if(empty($_SESSION['email'])){
    header('Location: ../login/index.html');
}

if(isset($_POST["answersubmit"])){
    echo "Test 1";
    if ($_SESSION["QuestionCount"] < 5){
        $answerGiven = $_POST["answer"];
        $sqlcheck="SELECT username,points FROM users WHERE username=:username";

        $prepcheck=$con->prepare($sqlcheck);
        $prepcheck->bindParam(':username',$_SESSION['username']);
        $prepcheck->execute();
        
        $data=$prepcheck->fetch();

        if($answerGiven == $_SESSION["CurrentAnswer"]){
            $points = $_SESSION['points'];
            $username = $_SESSION['username'];
            $prevAnswer = $_SESSION["CurrentAnswer"];
            $prevQuestion = $_SESSION["CurrentQuestion"];

            $sql="UPDATE users SET points=:points WHERE username=:username";

            $newPointsValue = $points+10;

            $updatesql=$con->prepare($sql);
            $updatesql->bindParam(':username', $username);
            $updatesql->bindParam(':points',$newPointsValue);

            $_SESSION['points']=$newPointsValue;
            $updatesql->execute();

            $_SESSION["QuestionCount"] = $_SESSION["QuestionCount"]+1;
            $_SESSION["CurrentQuestion"] = "";
            $_SESSION["CurrentAnswer"] = "";
            array_push($_SESSION["MentionedQuestions"],$prevQuestion)

            header("Location: main/survey.php");
        }
        else{
            echo " Fail! The answer was $prevAnswer";
            $_SESSION["QuestionCount"] = $_SESSION["QuestionCount"]+1;
            $_SESSION["CurrentQuestion"] = "";
            $_SESSION["CurrentAnswer"] = "";

            sleep(3);

            header("Location: main/survey.php");
        };
    }
    else{
        echo "You finished your survey very recently. Come back later to do another one...";
        sleep(3);
        header("Location: main/index.php");
    };
};
?>