<?php

declare(strict_types=1);

namespace PoPCMSSchema\LocationPostsWP;

use PoP\Root\Module\AbstractModule;
use PoPCMSSchema\LocationPosts\Environment;

class Module extends AbstractModule
{
    /**
     * @return string[]
     */
    public function getDependedModuleClasses(): array
    {
        return [
            \PoPCMSSchema\LocationPosts\Module::class,
            \PoPCMSSchema\PostsWP\Module::class,
        ];
    }

    /**
     * Initialize services
     *
     * @param string[] $skipSchemaModuleClasses
     */
    protected function initializeContainerServices(
        bool $skipSchema,
        array $skipSchemaModuleClasses,
    ): void {
        $this->initServices(dirname(__DIR__));
        if (Environment::addLocationPostTypeToCustomPostUnionTypes()) {
            $this->initSchemaServices(dirname(__DIR__), $skipSchema, '/ConditionalOnContext/AddLocationPostTypeToCustomPostUnionTypes/Overrides');
        }
    }
}
