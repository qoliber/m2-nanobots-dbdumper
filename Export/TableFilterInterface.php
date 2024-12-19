<?php
/**
 * Copyright © Qoliber. All rights reserved.
 *
 * @category    Qoliber
 * @package     Qoliber_DbDumper
 * @author      Jakub Winkler <jwinkler@qoliber.com>
 */

declare(strict_types=1);

namespace Qoliber\DbDumper\Export;

interface TableFilterInterface
{
    /**
     * Apply filter on the select object
     *
     * @param \Zend_Db_Select $select
     */
    public function applyFilter(\Zend_Db_Select $select): void;
}
