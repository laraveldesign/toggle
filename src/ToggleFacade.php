<?php

namespace Laraveldesign\Toggle;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Laraveldesign\Toggle\Skeleton\SkeletonClass
 */
class ToggleFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'toggle';
    }
}
