<?php

namespace Karyam\LeaveManagement;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Karyam\LeaveManagement\Skeleton\SkeletonClass
 */
class LeaveManagementFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'leave-management';
    }
}
