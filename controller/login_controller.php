<?php

session_start();
require "../dao/userDao.php";
require "../model/user.php";
require "../factory/database.php";
require "../config/config.php";

if (isset($_POST['login']) && isset($_POST['senha'])) {

    $user = new User();
    $dao = new userDao();

    $user->setLogin($_POST['login']);
    $user->setSenha($_POST['senha']);

    if ($user->getLogin() == "nbtelecom" && $user->getSenha() == "123456") {

        @session_destroy();
        create_session(NBTELECOM, LOGIN, SERVICE_ID_NBTELECOM, $user->getLogin());
        header('Location: ../index.php');
    } else if ($user->getLogin() == "baitaplay" && $user->getSenha() == "123456") {
        
        @session_destroy();
        create_session(BAITAPLAY, LOGIN, SERVICE_ID_BAITAPLAY,  $user->getLogin());
        header('Location: ../index.php');
    } else if ($user->getLogin() == "espn" && $user->getSenha() == "123456") {
        @session_destroy();
        create_session(ESPN, LOGIN, SERVICE_ID_ESPN, $user->getLogin());
        header('Location: ../index.php');
    } else {
        @session_destroy();
        create_session(DANGER, UNAUTHORIZED, "",  '*Usuario não autenticado !');
        header('Location: ../login.php');
    }

    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";
}

function create_session($param1, $param2, $param3, $param4)
{
    session_start();
    $_SESSION[$param1][$param2][$param3] = $param4;    
}

