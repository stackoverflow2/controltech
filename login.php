<?php
    error_reporting( error_reporting() & ~E_NOTICE );
    $username=$_POST['username'];
    $password=$_POST['password'];
    $scriptname=$_SERVER['SCRIPT_NAME'];
if(isset($_POST['username']) && isset($_POST['password']))
{
    if($username=='admin' && $password=='admin')
    {
        echo '<h1>Succesfully login!</h1>';
    }
    else
    
    {
        echo " <h1> Incorrect Password or Username ! </h1>";
    }   
}
?>