<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerICrAH32\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerICrAH32/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerICrAH32.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerICrAH32\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerICrAH32\App_KernelDevDebugContainer([
    'container.build_hash' => 'ICrAH32',
    'container.build_id' => '91df5968',
    'container.build_time' => 1732880235,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerICrAH32');
