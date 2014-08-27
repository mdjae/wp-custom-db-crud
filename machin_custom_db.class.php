<?php

  class Machin extends Base_Custom_Data
{

    $tableName = get_class($this);
    
    public function __construct($tableName)
    {
         parent::__construct($tableName);
    }
}

?>
