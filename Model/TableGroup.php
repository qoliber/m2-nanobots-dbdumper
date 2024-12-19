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

use Qoliber\DbDumper\Export\TableGroupInterface;
use Qoliber\DbDumper\Helper\FileWriter;

class TableGroup implements TableGroupInterface
{
    /** @var FileWriter  */
    protected FileWriter $fileWriter;

    /** @var array */
    protected array $tableList;

    /** @var string  */
    protected string $groupExportMode;

    /** @var array|\Qoliber\DbDumper\Export\TableFilterInterface[]  */
    protected array $filters;


    /**
     * @param \Qoliber\DbDumper\Helper\FileWriter $fileWriter
     * @param \Qoliber\DbDumper\Export\TableFilterInterface[] $filters
     * @param array $tableList
     * @param string $groupExportMode

     */
    public function __construct(
        FileWriter $fileWriter,
        array $filters = [],
        array $tableList = [],
        string $groupExportMode = TableGroupInterface::GROUP_EXPORT_DEFAULT_MODE
    ) {
        $this->fileWriter = $fileWriter;
        $this->tableList = $tableList;
        $this->groupExportMode = $groupExportMode;
        $this->filters = $filters;
    }

    /**
     * @return \Qoliber\DbDumper\Export\TableExportInterface[]
     */
    public function getTables(): array
    {
        return $this->tableList;
    }

    /**
     * @return string
     */
    public function getGroupExportMode(): string
    {
        return $this->groupExportMode;
    }

    /**
     * @param string $tableName
     * @return TableGroupInterface
     */
    public function addTable(string $tableName): TableGroupInterface
    {
        $this->tableList[$tableName] = null;

        return $this;
    }

    /**
     * @param string $tableName
     * @return TableGroupInterface
     */
    public function removeTable(string $tableName): TableGroupInterface
    {
        unset($this->tableList[$tableName]);

        return $this;
    }

    /**
     * @param array $tableList
     * @return TableGroupInterface
     */
    public function addTables(array $tableList): TableGroupInterface
    {
        foreach ($tableList as $table) {
            $this->addTable($table);
        }

        return $this;
    }

    /**
     * @param array $tableList
     * @return TableGroupInterface
     */
    public function removeTables(array $tableList): TableGroupInterface
    {
        foreach ($tableList as $table) {
            $this->removeTable($table);
        }

        return $this;
    }
}
