<?php
    require_once "includes/db.inc.php";
    require_once "includes/insert.inc.php";

    echo "cock";
    
    
    session_start();

    $table = $_POST["table"];
    $columns = $_POST["columns"];
    $values = $_POST["values"];

    echo $table . "<br>";
    echo $columns. "<br>";
    echo $values ."<br>";

    
    $m = new InsertRecords("$table");
    $res = $m->insert($columns, $values);

    if ($res)
    {
        header("Location: P_Home.php");
    }
    else{
        header("Location: aboutus.php");
    }

    
    

?>