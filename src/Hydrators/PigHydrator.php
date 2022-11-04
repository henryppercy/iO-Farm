<?php

namespace FarmAPI\Hydrators;

use FarmAPI\DataAccess\Database;
use FarmAPI\Entities\Pig;

class PigHydrator
{

    public static function hydrateFromDb(Database $db, int $id): Pig
    {
        $sql = 'SELECT `id`, `name`, `weight`, `colour`, `species` '
            . 'FROM `pigs` '
            . 'WHERE `id` = :id;';
        $values = [':id' => $id];

        $query = $db->getConnection()->prepare($sql);
        $query->setFetchMode(\PDO::FETCH_CLASS, Pig::class);
        $query->execute($values);

        $pig = $query->fetch();
        if (!$pig) {
            throw new \InvalidArgumentException('Invalid ID');
        }
        return $pig;
    }
}