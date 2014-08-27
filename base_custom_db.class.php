<?php

abstract class Base_Custom_Db
{

    private $tableName = false;

    /**
     * Constructor for the database class to inject the table name
     * @param String $tableName - The current table name
     */
     
    public function __construct($tableName)
    {
        $this->tableName = $tableName;
    }
}
?>
