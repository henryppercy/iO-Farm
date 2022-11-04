<?php

namespace FarmAPI\DataAccess;

use FarmAPI\Entities\Pig;
use FarmAPI\Hydrators\PigHydrator;

class PigDAO
{

    public static function fetch(Database $db, int $id): Pig
    {
        return PigHydrator::hydrateFromDb($db, $id);
    }
}