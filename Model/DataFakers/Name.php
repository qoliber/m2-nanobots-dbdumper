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

class Name implements DataFakerInterface
{
    /** @var Firstname  */
    private Firstname $firstname;

    /** @var Lastname  */
    protected Lastname $lastname;

    /**
     * @param Firstname $firstname
     * @param Lastname $lastname
     */
    public function __construct(
        Firstname $firstname,
        Lastname $lastname
    ) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }

    /**
     * @param int $entityId
     * @param null|string $value
     * @return string
     */
    public function decorateData(int $entityId, ?string $value = null): string
    {
        return sprintf(
            "%s %s",
            $this->firstname->decorateData($entityId),
            $this->lastname->decorateData($entityId)
        );
    }
}
