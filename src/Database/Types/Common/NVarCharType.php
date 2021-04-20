<?php

namespace TCG\Voyager\Database\Types\Common;

use Doctrine\DBAL\Types\StringType as DoctrineStringType;

class NVarCharType extends DoctrineStringType
{
    public const NAME = 'nvarchar';

    public function getName()
    {
        return static::NAME;
    }
}
