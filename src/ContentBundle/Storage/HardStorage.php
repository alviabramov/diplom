<?php

namespace App\ContentBundle\Storage;

use App\Common\Entity\Content;
use App\Common\Entity\EntityInterface;

class HardStorage implements StorageInterface
{

    public function findEntityByType(): array
    {
        return [(new Content())
            ->setIdNews('--c8df96f40408f6ca138895c05550cfbe')
            ->setCategory('sport')
            ->setTitle('Title news1')
            ->setDescription('Description news2')
            ->setLink('link')
            ->setPubDate('date')];
    }
}