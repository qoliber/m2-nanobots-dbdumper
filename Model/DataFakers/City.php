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

class City implements DataFakerInterface
{
    /** @var string[]  */
    protected array $cityPrefix = ['North', 'East', 'West', 'South', 'New', 'Lake', 'Port'];

    /** @var array|string[]  */
    protected array $citySuffix = ['town', 'ton', 'land', 'ville', 'berg', 'burgh', 'borough', 'bury', 'view', 'port', 'mouth', 'stad', 'furt', 'chester', 'mouth', 'fort', 'haven', 'side', 'shire'];

    /** @var \Qoliber\DbDumper\Model\DataFakers\Firstname */
    protected Firstname $firstName;

    /**
     * @param \Qoliber\DbDumper\Model\DataFakers\Firstname $firstname
     */
    public function __construct(
        Firstname $firstname
    ) {
        $this->firstName = $firstname;
    }

    /**
     * @param int $entityId
     * @param null|string $value
     * @return string
     */
    public function decorateData(int $entityId, ?string $value = null): string
    {
        return sprintf(
            '%s %s%s',
            $this->firstName->decorateData($entityId),
            $this->cityPrefix[$entityId % (count($this->cityPrefix) - 1)],
            $this->citySuffix[$entityId % (count($this->citySuffix) - 1)],
        );
    }
}
