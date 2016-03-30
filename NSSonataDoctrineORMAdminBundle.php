<?php

namespace NS\AceSonataDoctrineORMAdminBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class NSSonataDoctrineORMAdminBundle extends Bundle
{
    /**
     * @return string
     */
    public function getParent()
    {
        return 'SonataDoctrineORMAdminBundle';
    }
}
