<?php

    require_once "includes/db.inc.php";
    require_once "includes/retrieval.inc.php";

    $table = $_POST["TName"];
    $columns = $_POST["Columns"];
    $conditions = $_POST["Conditions"];

    $model = new Retrieval("$table");
    $result = $model->getRecords("$columns", "$conditions");

    //... if they are, user is logged in and sent to homepage
    if($result->num_rows > 0)
    {
        header("Location: P_Home.php");
    }
    //...if not, 
    else 
    {
        echo "No results for such query.";
    }

?>