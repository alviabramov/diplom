<?php

namespace App\ContentBundle\Storage;

use App\Common\Entity\EntityInterface;

interface StorageInterface
{
    /**
     * @return EntityInterface[]
     */
    public function findEntityByType(): array;
}
