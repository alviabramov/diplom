<?php

namespace App\ContentBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\Finder\Finder;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

class ContentExtension extends Extension
{
    const CONFIG_DIRECTORY = __DIR__ . '/../Resources/config/auto';

    /*
    * {@inheritdoc}
    */
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new YamlFileLoader($container, new FileLocator(static::CONFIG_DIRECTORY));

        $finder = new Finder();

        foreach ($finder->files()->in(static::CONFIG_DIRECTORY) as $file) {
            /** @var FakeFile $file */
            $loader->load($file->getRealPath());
        }
    }
}