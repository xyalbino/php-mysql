<?php 
session_start ();

$_SESSION  = array();

session_destroy();

exit("已经退出本次登录!");
?>