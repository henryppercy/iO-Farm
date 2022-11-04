<?php
namespace FarmAPI\Services;

use FarmAPI\DataAccess\Database;
use FarmAPI\DataAccess\PigDAO;
use FarmAPI\Entities\Pig;
use FarmAPI\Entities\PigColl;

class PigService
{
    private Database $db;

    public function __construct()
    {
        $this->db = Database::getInstance();
    }

    public function getPig(int $id): Pig
    {
        return PigDAO::fetch($this->db, $id);
    }

    public function getPigColl(): PigColl
    {
        return new PigColl();
    }
}