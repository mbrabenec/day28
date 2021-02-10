<?php

require_once 'DB.php';
require_once 'DB_functions.php';

class Region
{
    public $id = null;
    public $name = "";
    public $slug = "";

    public function insert()
    {
        $querey = "
        INSERT 
        INTO `regions`
        (`name`, `slug`)
        VALUES
        (?, ?)";

        insert($querey, [
            $this->name,
            $this->slug
        ]);

        $this->id = last_insert_id();
    }
}
