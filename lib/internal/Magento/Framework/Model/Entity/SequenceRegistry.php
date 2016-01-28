<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Framework\Model\Entity;

use Magento\Framework\DB\Sequence\SequenceInterface;

/**
 * Class SequenceRegistry
 */
class SequenceRegistry
{
    /**
     * @var array
     */
    protected $registry;

    /**
     * Register information about existing sequence
     *
     * @param string $entityType
     * @param SequenceInterface|null $sequence
     * @param string|null $sequenceTable
     * @return void
     */
    public function register($entityType, $sequence = null, $sequenceTable = null)
    {
        $this->registry[$entityType]['sequence'] = $sequence;
        $this->registry[$entityType]['sequenceTable'] = $sequenceTable;
    }

    /**
     * Returns sequence information
     *
     * @param string $entityType
     * @return bool|array
     */
    public function retrieve($entityType)
    {
        if (isset($this->registry[$entityType])) {
            return $this->registry[$entityType];
        }
        return false;
    }
}