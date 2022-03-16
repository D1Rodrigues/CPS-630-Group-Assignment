<?php
    require_once "includes/db.inc.php";
    require_once "includes/update.inc.php";

    $table = $_POST["TName"];
    $conditions = $_POST["Conditions"];
    $values = $_POST["Values"];

    $m = new UpdateDB($table);

    $res = $m->updateRecords($values, $conditions);

    if ($res)
    {
        header("Location: P_Home.php");
    }
    else
    {
        echo "Error in the query you entered.";
    } 
?>