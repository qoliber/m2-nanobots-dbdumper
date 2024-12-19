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

interface DataFakerInterface
{
    /**
     * Function needed to modify data after import
     *
     * @param int $entityId
     * @param null|string $value
     * @return mixed
     */
    public function decorateData(int $entityId, ?string $value = null): string;
}
