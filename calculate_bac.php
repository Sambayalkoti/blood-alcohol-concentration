<?php
$weight=$_POST['weight'];
$weightunit=$_POST['unit'];
$gender=$_POST['gender'];
$no_of_drink=$_POST['drinks'];
$contain_of_drink=$_POST['alcohol_content'];
$time=$_POST['time_elapsed'];
$Alcohol_Consumed=$no_of_drink*$contain_of_drink; 
if($weightunit=='kg')
{
    $weight = $weight*2.20462;
}
if($gender=='male')
{
    $Gender_Constant=0.73;
}
else 
{
    $Gender_Constant=0.66;
}
$BAC = ($Alcohol_Consumed*5.14)/ ($weight* $Gender_Constant) - 0.015 * $time;
session_start();
 $_SESSION['BAC'] = $BAC;
header("Location:/index.php");
?>