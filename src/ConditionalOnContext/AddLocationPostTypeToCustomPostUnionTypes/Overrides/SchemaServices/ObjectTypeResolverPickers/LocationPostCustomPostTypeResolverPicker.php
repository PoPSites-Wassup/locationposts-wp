<?php

declare(strict_types=1);

namespace PoPSchema\LocationPostsWP\ConditionalOnContext\AddLocationPostTypeToCustomPostUnionTypes\Overrides\SchemaServices\ObjectTypeResolverPickers;

use PoPSchema\CustomPostsWP\ObjectTypeResolverPickers\CustomPostTypeResolverPickerInterface;
use PoPSchema\CustomPostsWP\ObjectTypeResolverPickers\NoCastCustomPostTypeResolverPickerTrait;
use PoPSchema\LocationPosts\ConditionalOnContext\AddLocationPostTypeToCustomPostUnionTypes\SchemaServices\ObjectTypeResolverPickers\LocationPostCustomPostTypeResolverPicker as UpstreamLocationPostCustomPostTypeResolverPicker;

class LocationPostCustomPostTypeResolverPicker extends UpstreamLocationPostCustomPostTypeResolverPicker implements CustomPostTypeResolverPickerInterface
{
    use NoCastCustomPostTypeResolverPickerTrait;

    public function getCustomPostType(): string
    {
        return \POP_LOCATIONPOSTS_POSTTYPE_LOCATIONPOST;
    }
}
