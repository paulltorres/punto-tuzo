<?php

function emptyPublic($pTitulo, $pDesc, $pNum) {
    $result = null; //if unable to run remove " = null".
    if (empty($pTitulo) || empty($pDesc) || empty($pNum)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function createPublic($conn, $pTitulo, $pDesc, $pNum) {
    $sql = "INSERT INTO publicaciones (pTitulo, pDesc, pNum) VALUES (?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../newpost.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "sss", $pTitulo, $pDesc, $pNum);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../index.php?error=none");
    exit();
}

