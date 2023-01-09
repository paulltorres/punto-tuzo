<?php

if (isset($_POST["submit"])) {

    $pTitulo = $_POST["pTitulo"];
    $pDesc = $_POST["pDesc"];
    $pNum = $_POST["pNum"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyPublic($pTitulo, $pDesc, $pNum) !== false) {
        header("location: ../newpost.php?error=emptyinput");
        exit();
    }

    createPublic($conn, $pTitulo, $pDesc, $pNum);

} else {
    header("location: ../index.php");
    exit();
}