<?php

namespace Crm\ApplicationModule;

use Closure;
use Nette\DI\Container;

interface CallbackManagerInterface
{
    public function add(string $key, Closure $callback);

    public function remove(string $key);

    public function execAll(Container $container);
}
