<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJiachaw\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJiachaw/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerJiachaw.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerJiachaw\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerJiachaw\appProdProjectContainer([
    'container.build_hash' => 'Jiachaw',
    'container.build_id' => '684ebce2',
    'container.build_time' => 1558658370,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerJiachaw');