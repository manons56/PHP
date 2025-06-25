
<?php

abstract class AbstractManager
{
    protected PDO $db;

    public function __construct()
    {
       
            $this->db = new PDO(
                'mysql:host=db.3wa.io;port =3306;dbname=manonsara_crud_mvc;',
                'manonsara',
                '7639763c730e9069300e065f0a99cd54'
            );

    }
}