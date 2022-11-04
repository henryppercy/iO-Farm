<?php
namespace FarmAPI\Services;

use FarmAPI\DataAccess\Database;
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
        return new Pig();
    }

    public function getPigColl(): PigColl
    {
        return new PigColl();
    }
}