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

use Symfony\Component\Console\Output\OutputInterface;

interface DumpInterface
{
    /**
     * @param null|string $exportModel
     * @return null|\Qoliber\DbDumper\Export\ExportModelInterface
     */
    public function getExportModel(?string $exportModel = "default"): ?ExportModelInterface;

    /**
     * @return \Qoliber\DbDumper\Export\ExportModelInterface[]|null
     */
    public function getExportModels(): array;

    /**
     * @return array
     */
    public function getTableGroups(): array;

    /**
     * Set Table Groups
     *
     * @param \Qoliber\DbDumper\Export\TableGroupInterface[] $tableGroups
     * @return mixed
     */
    public function setTableGroups(array $tableGroups): DumpInterface;

    /**
     * @param \Qoliber\DbDumper\Export\ExportModelInterface $exportModel
     * @param \Symfony\Component\Console\Output\OutputInterface|null $output
     * @return bool
     */
    public function initializeDatabaseDump(ExportModelInterface $exportModel, OutputInterface $output = null): bool;

    /**
     * @param \Qoliber\DbDumper\Export\TableGroupInterface[] $tableGroups
     * @return array
     */
    public function getTablesFromTableGroups(array $tableGroups): array;

    /**
     * @param bool $filterTableGroups
     * @return array
     */
    public function getTablesWithoutGroups(bool $filterTableGroups = true): array;

    /**
     * Method to add new tables to a Table Group, needed for undefined tables
     *
     * @param string $tableGroup
     * @param array $tableList
     * @throws \Magento\Framework\Exception\LocalizedException
     * @return \Qoliber\DbDumper\Export\DumpInterface
     */
    public function addTablesToTableGroup(string $tableGroup, array $tableList): DumpInterface;
}
