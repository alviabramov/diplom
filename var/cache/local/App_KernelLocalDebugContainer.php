<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container2HUZsMJ\App_KernelLocalDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container2HUZsMJ/App_KernelLocalDebugContainer.php') {
    touch(__DIR__.'/Container2HUZsMJ.legacy');

    return;
}

if (!\class_exists(App_KernelLocalDebugContainer::class, false)) {
    \class_alias(\Container2HUZsMJ\App_KernelLocalDebugContainer::class, App_KernelLocalDebugContainer::class, false);
}

return new \Container2HUZsMJ\App_KernelLocalDebugContainer([
    'container.build_hash' => '2HUZsMJ',
    'container.build_id' => 'a7caecaa',
    'container.build_time' => 1605121935,
], __DIR__.\DIRECTORY_SEPARATOR.'Container2HUZsMJ');
