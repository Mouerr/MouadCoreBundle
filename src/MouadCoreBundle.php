<?php

namespace Mouad\CoreBundle;

use Mouad\CoreBundle\DependencyInjection\MouadCoreBundleExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class MouadCoreBundle extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }

    public function getContainerExtension()
    {
        if (null === $this->extension) {
            $this->extension = new MouadCoreBundleExtension();
        }
        return $this->extension;
    }
}
