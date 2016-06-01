<?php
session_start();

class check
{
public function check_cookie()
{
    if(($_SESSION['correct_true'])==1)
    {
    $correct_true=$_SESSION['correct'];
    $correct_true++;
    $_SESSION['correct']=$correct_true;
    unset($_SESSION['correct_true']);
    }
}
}
?>