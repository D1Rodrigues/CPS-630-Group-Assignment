<?php
    require_once "includes/db.inc.php";
    require_once "includes/insert.inc.php";

    echo "cock";
    
    
    //session_start();

    $table = $_POST["table"];
    $columns = $_POST["columns"];
    $values = $_POST["values"];

    echo $_POST["table"] . "<br>";
    echo $_POST["columns"]. "<br>";
    echo $_POST["values"] ."<br>";
    
    //$m = new InsertRecords("Truck");
    //$res = $m->insert("truck-id, truck_code, availability_code", "'2','5', '6'");

    /*
    if ($res)
    {
        //$_SESSION['db_operation'] = "success";
        //$_SESSION['op_status'] = "$values were successfully entered into ($columns) in $table";
        header("Location: P_Home.php");
    }*/	

    
    

?>