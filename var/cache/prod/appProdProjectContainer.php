<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerFd9o6vv\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerFd9o6vv/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerFd9o6vv.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerFd9o6vv\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerFd9o6vv\appProdProjectContainer([
    'container.build_hash' => 'Fd9o6vv',
    'container.build_id' => '6e0301b3',
    'container.build_time' => 1671285257,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerFd9o6vv');
