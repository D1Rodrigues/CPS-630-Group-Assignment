<?php
    require_once "includes/db.inc.php";
    require_once "includes/delete.inc.php";

    $table = $_POST["TName"];
    $columns = $_POST["Columns"];
    $conditions = $_POST["Conditions"];

    $m = new Deletion("$table");
    if(!empty($conditions) && !ctype_space($conditions))
    {
        $res = $m->deleteRecords($conditions);
    }
    else{
        $res = $m->deleteRecords();
    }


    if ($res)
    {
        header("Location: P_Home.php");
    }
    else
    {
        echo "Error in the query you entered.";
    }
?>
