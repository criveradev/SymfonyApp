<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container1GFQVyc\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container1GFQVyc/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container1GFQVyc.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container1GFQVyc\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container1GFQVyc\App_KernelDevDebugContainer([
    'container.build_hash' => '1GFQVyc',
    'container.build_id' => '2e85c4bf',
    'container.build_time' => 1695269176,
], __DIR__.\DIRECTORY_SEPARATOR.'Container1GFQVyc');
