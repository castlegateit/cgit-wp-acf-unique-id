<?php

declare(strict_types=1);

namespace Castlegate\AcfUniqueId;

final class Plugin
{
    /**
     * Initialization
     *
     * @return void
     */
    public static function init(): void
    {
        add_action('acf/include_field_types', [AcfUniqueId::class, 'register']);
    }
}
