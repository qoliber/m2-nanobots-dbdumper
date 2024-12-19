<?php
/**
 * Copyright © Qoliber. All rights reserved.
 *
 * @category    Qoliber
 * @package     Qoliber_DbDumper
 * @author      Jakub Winkler <jwinkler@qoliber.com>
 */

declare(strict_types=1);

namespace Qoliber\DbDumper\Sql\Filters;

use Qoliber\DbDumper\Export\TableFilterInterface;

class ProductLimitFilter implements TableFilterInterface
{
    /** @var int|null  */
    protected ?int $limit;

    /**
     * @param int|null $limit
     */
    public function __construct(
        ?int $limit = 100
    ) {
        $this->limit = $limit;
    }

    /**
     * @param \Zend_Db_Select $select
     * @return void
     */
    public function applyFilter(\Zend_Db_Select $select): void
    {
        $select->limit($this->limit);
    }
}
