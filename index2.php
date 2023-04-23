<?php
require_once 'config.php';
  
try {
    $adapter->authenticate();
    $userProfile = $adapter->getUserProfile();
    if($userProfile){
        header("Location: home.php");
	exit();
    }else{
        echo 'User not found';
    }
    echo '<a href="logout.php">Logout</a>';
}
catch( Exception $e ){
    echo $e->getMessage() ;
}