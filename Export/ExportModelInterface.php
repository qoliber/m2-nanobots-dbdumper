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

interface ExportModelInterface
{
    /** @var int  */
    const EXPORT_MODE_ASK_FOR_UNGROUPED_TABLES = 0;

    /** @var int  */
    const EXPORT_MODE_DUMP_ALL_DATA = 1;

    /** @var int  */
    const EXPORT_MODE_SKIP_DATA_FROM_UNGROUPED_TABLES = 2;

    /**
     * Gets the description of export mode
     *
     * @return string
     */
    public function getExportModeDescription(): string;


    /**
     * Method to check if filters should be applied
     *
     * @return bool
     */
    public function applyFilters(): bool;

    /**
     * Default operation for tables without table groups
     *
     * @return null|int
     */
    public function exportTypeForAllTables(): ?int;

    /**
     * Get Table Groups associated to Export Mode
     *
     * @return \Qoliber\DbDumper\Export\TableGroupInterface[]|null
     */
    public function getTableGroups(): ?array;
}
