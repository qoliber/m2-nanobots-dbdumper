<?php
/**
 * Copyright © Qoliber. All rights reserved.
 *
 * @category    Qoliber
 * @package     Qoliber_DbDumper
 * @author      Jakub Winkler <jwinkler@qoliber.com>
 */

declare(strict_types=1);

namespace Qoliber\DbDumper\Model\SqlModifiers;

use Qoliber\DbDumper\Export\SqlModifiers\CreateTableInterface;

class Utf8mb3Modifier implements CreateTableInterface
{
    public function modifyCreateTableQuery(string &$sqlCreateTableQuery): void
    {
        $utf8mb4 = 'utf8mb4';
        $sqlCreateTableQuery = str_replace('utf8mb3', $utf8mb4, $sqlCreateTableQuery);
    }
}
