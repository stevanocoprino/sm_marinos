<?php

class Sybase
{
    public $connection;
    
    private $DBHOST = 'sybasefatmafo';
    private $DBNAME = 'FO';
    private $USER = 'sa';
    private $PASS = 'mandiri';
    
    private $fetchMode = PDO::FETCH_ASSOC;
    
    public function __construct($db_host = null, $db_name = null, $db_user = null, $db_pass = null)
    {
        if (isset($db_host)) $this->DBHOST = $db_host;
        if (isset($db_name)) $this->DBNAME = $db_name;
        if (isset($db_user)) $this->USER = $db_user;
        if (isset($db_pass)) $this->PASS = $db_pass;
        
        // set environment FreeTDS
        // putenv('TDSDUMP=/tmp/phptds.log');
        putenv('FREETDSCONF=/usr/etc/freetds.conf');
        putenv('FREETDS=/usr/etc/freetds.conf');
        
        // cek apakah koneksi berhasil
        $this->openConnection();
    }
    
    public function setConnection($db_host, $db_name, $db_user, $db_pass)
    {
        $this->DBHOST = $db_host;
        $this->DBNAME = $db_name;
        $this->USER = $db_user;
        $this->PASS = $db_pass;
    }
    
    public function executeQuery($queryString)
    {
        $connection = $this->connection;
        $result = null;
        try {
            $exec = $connection->query($queryString);
            $exec->setFetchMode($this->fetchMode);
            $result = $exec->fetchAll();
            
            $exec->closeCursor();
        } catch (PDOException $e) {
            print 'Error!: ' . $e->getMessage() . "\n";
            die();
        }
        
        return $result;
    }
    
    public function execute($queryString)
    {
        $connection = $this->connection;
        $result = null;
        try {
            $affectedRows = $connection->exec($queryString);
            $result = $affectedRows;
        } catch (PDOException $e) {
            print 'Error!: ' . $e->getMessage() . "\n";
            die();
        }
        
        return $result;
    }
    
    public function setFetchMode($mode)
    {
        $this->fetchMode = $mode;
    }
    
    public function openConnection()
    {
        try {
            $this->connection = new PDO('dblib:host=' . $this->DBHOST . ';dbname=' . $this->DBNAME, $this->USER, $this->PASS);
            $this->connection->exec("SET CHARACTER SET utf8");
        } catch (PDOException $e) {
            print 'Error!: ' . $e->getMessage() . "\n";
            die();
        }
    }
    
    public function closeConnection()
    {
        $this->connection = null;
    }
}
?>