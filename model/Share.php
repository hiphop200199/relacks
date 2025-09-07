<?php
namespace Model;

use Database\Db;
use PDO;

class Share
{
    private $db;
    public function __construct(Db $db)
    {
        $this->db = $db;
    }
    public function getList()
    {
        $sql = 'SELECT * FROM share';
        $stmt =  $this->db->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    
    public function create($nickname,$introduction)
    {
        $sql = 'INSERT INTO share VALUES( ?,?,?,? ) ';
        $stmt =  $this->db->conn->prepare($sql);
        $stmt->execute([null,$nickname,$introduction,time()]);
    }


}
