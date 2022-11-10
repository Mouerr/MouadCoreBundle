<?php

namespace Mouad\CoreBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class MouadCoreBundle extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}
