<?php
    class Retrieval extends Database
    {

      public function __construct($tbl)
      {
          parent::__construct($tbl);
      }

      public function getRecords($columns, $conditionals)
      {
        $conn = $this->connect();
        $sql = "SELECT " . $columns ." FROM " . $this->table . " WHERE " . $conditionals;

        //$sql = "SELECT id, firstname, lastname FROM StRec";
        $result = $conn->query($sql);
        
        return $result;

        $conn->close();

      }
    }
?>