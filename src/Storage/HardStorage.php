<?php

namespace App\Storage;
use App\Entity\Content;


class HardStorage
{
    public function findEntity()
    {
        return (new Content())
            ->setCategory('news')
            ->setTitle('Title news1')
            ->setSubtitle('Subtitle news2')
            ->setContent('Content Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab aspernatur consectetur, consequuntur cumque deleniti ducimus et excepturi explicabo facilis illum incidunt, laboriosam necessitatibus possimus sapiente, sequi! Autem ducimus quo rem.');
    }
}