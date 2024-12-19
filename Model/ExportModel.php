<?php
/**
 * Copyright © Qoliber. All rights reserved.
 *
 * @category    Qoliber
 * @package     Qoliber_DbDumper
 * @author      Jakub Winkler <jwinkler@qoliber.com>
 */

declare(strict_types=1);

namespace Qoliber\DbDumper\Model;

use Qoliber\DbDumper\Export\ExportModelInterface;
use Qoliber\DbDumper\Export\TableGroupInterface;

class ExportModel implements ExportModelInterface
{
    /** @var string  */
    protected string $exportModeDescription;

    /** @var bool|null  */
    protected ?bool $applyFilters;

    /** @var int|null  */
    protected ?int $exportTypeForAllTables;

    /** @var TableGroupInterface[]|null  */
    private ?array $tableGroups;

    /**
     * @param string $exportModeDescription
     * @param bool|null $applyFilters
     * @param \Qoliber\DbDumper\Export\TableGroupInterface[]|null $tableGroups
     * @param int|null $exportTypeForAllTables
     */
    public function __construct(
        string $exportModeDescription,
        ?bool $applyFilters = null,
        ?array $tableGroups = null,
        ?int $exportTypeForAllTables = null
    ) {
        $this->exportModeDescription = $exportModeDescription;
        $this->applyFilters = $applyFilters;
        $this->tableGroups = $tableGroups;
        $this->exportTypeForAllTables = $exportTypeForAllTables;
    }

    /**
     * @return string
     */
    public function getExportModeDescription(): string
    {
        return $this->exportModeDescription;
    }

    /**
     * @return bool
     */
    public function applyFilters(): bool
    {
        return $this->applyFilters;
    }

    /**
     * @return null|int
     */
    public function exportTypeForAllTables(): ?int
    {
        return $this->exportTypeForAllTables;
    }

    /**
     * @return \Qoliber\DbDumper\Export\TableGroupInterface[]|null[];
     */
    public function getTableGroups(): ?array
    {
        return $this->tableGroups;
    }
}
