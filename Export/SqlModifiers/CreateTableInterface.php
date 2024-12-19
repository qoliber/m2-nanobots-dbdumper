<?php
/**
 * Copyright © Qoliber. All rights reserved.
 *
 * @category    Qoliber
 * @package     Qoliber_DbDumper
 * @author      Jakub Winkler <jwinkler@qoliber.com>
 */

declare(strict_types=1);

namespace Qoliber\DbDumper\Export\SqlModifiers;

interface CreateTableInterface
{
    /**
     * @param string $sqlCreateTableQuery
     */
    public function modifyCreateTableQuery(string &$sqlCreateTableQuery): void;
}
