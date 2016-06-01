<?php
session_start();

class check
{
public function check_cookie()
{

    $correct_true=$_SESSION['correct'];
    $correct_true++;
    $_SESSION['correct']=$correct_true;
    unset($_SESSION['correct_true']);
}
}
?>