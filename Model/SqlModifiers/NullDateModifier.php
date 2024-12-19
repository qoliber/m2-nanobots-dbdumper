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

class NullDateModifier implements CreateTableInterface
{
    public function modifyCreateTableQuery(string &$sqlCreateTableQuery): void
    {
        $currentDate = sprintf("DEFAULT '%s'" , date('Y-m-d H:i:s'));
        $sqlCreateTableQuery = str_replace("DEFAULT '0000-00-00 00:00:00'", $currentDate, $sqlCreateTableQuery);
    }
}
