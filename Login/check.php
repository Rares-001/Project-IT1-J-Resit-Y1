<?php 
//LIST OF USERS AND PASSWORDS
$users = [
    "test1" => "thisisatest"
];

session_start();


//Verify login
if (isset($_POST['user']) && !isset($_SESSION['user'])) {
    //check pass
    if($users[$_POST['user']] == $_POST['password']) {
        //register user in session if valid
        $_SESSION['user'] = $_POST['user'];
    }

    //failed check 
    if(!isset($_SESSION['user'])) {$failed = true;}
}

//Valid login
if(isset($_SESSION['user'])) {
    header("Location: ../index.html");
    exit();
}

?>