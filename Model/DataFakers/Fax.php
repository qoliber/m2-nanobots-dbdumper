<?php
/**
 * Copyright © Qoliber. All rights reserved.
 *
 * @category    Qoliber
 * @package     Qoliber_DbDumper
 * @author      Jakub Winkler <jwinkler@qoliber.com>
 */

declare(strict_types=1);

namespace Qoliber\DbDumper\Model\DataFakers;

use Qoliber\DbDumper\Export\DataFakerInterface;

class Fax implements DataFakerInterface
{
    /**
     * @param int $entityId
     * @param null|string $value
     * @return string
     */
    public function decorateData(int $entityId, ?string $value = null): string
    {
        return sprintf(
            '%03d-%03d-%04d',
            777 % $entityId,
            777 % $entityId,
            777 % $entityId
        );
    }
}
