<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerI0IAxAt\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerI0IAxAt/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerI0IAxAt.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerI0IAxAt\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerI0IAxAt\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'I0IAxAt',
    'container.build_id' => 'bbed2a6e',
    'container.build_time' => 1614947268,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerI0IAxAt');
