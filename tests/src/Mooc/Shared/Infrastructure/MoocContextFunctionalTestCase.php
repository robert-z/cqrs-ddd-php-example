<?php

declare(strict_types = 1);

namespace CodelyTv\Test\Mooc\Shared\Infrastructure;

use CodelyTv\Test\Shared\Infrastructure\PHPUnit\Module\ModuleFunctionalTestCase;

abstract class MoocContextFunctionalTestCase extends ModuleFunctionalTestCase
{
    protected function environmentArrangers()
    {
        return [
            $this->service('codely.mooc.infrastructure.arranger'),
        ];
    }
}
