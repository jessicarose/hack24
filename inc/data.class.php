<?php

/**
* JobData
*/
class JobData
{

    private $connection;

    function __construct()
    {
        $this->connection = new PDO('mysql:host=localhost;dbname=hack24', 'root', '9ZfsGrdn6N');
    }

    public function getData( $id = 0, $table = '', $id_field = '' )
    {
        if ( ! $id ) {
            $statement = $this->connection->query("SELECT * FROM $table");
            return $statement->fetchAll(PDO::FETCH_ASSOC);
        }

        $statement = $this->connection->query("SELECT * FROM $table WHERE $id_field in ($id)");
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getUsers( $id = 0 )
    {
        return $this->getData( $id, 'User_data', 'user_id' );
    }

    public function getCompanies( $id = 0 )
    {
        return $this->getData( $id, 'Company', 'company_id' );
    }

    public function getCultures( $id = 0 )
    {
        return $this->getData( $id, 'Culture', 'culture_id' );
    }

    public function getDepartments( $id = 0 )
    {
        return $this->getData( $id, 'Department', 'dept_id' );
    }

    public function getManagers( $id = 0 )
    {
        return $this->getData( $id, 'Manager', 'manager_id' );
    }

    public function getManagerRatings( $id = 0 )
    {
        return $this->getData( $id, 'Rate_Manager', 'rateman_id' );
    }

    public function getRole( $id = 0 )
    {
        return $this->getData( $id, 'Role', 'role_id' );
    }

}
