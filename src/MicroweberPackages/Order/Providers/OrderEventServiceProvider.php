<?php
/*
 * This file is part of the Microweber framework.
 *
 * (c) Microweber CMS LTD
 *
 * For full license information see
 * https://github.com/microweber/microweber/blob/master/LICENSE
 *
 */

namespace MicroweberPackages\Order\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider;
use MicroweberPackages\Order\Events\OrderWasCreated;
use MicroweberPackages\Order\Listeners\OrderCreatedListener;

class OrderEventServiceProvider extends EventServiceProvider
{

    protected $listen = [
        OrderWasCreated::class => [
            OrderCreatedListener::class
        ],
    ];

}
