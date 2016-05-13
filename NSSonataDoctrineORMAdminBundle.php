<?php

namespace NS\AceSonataDoctrineORMAdminBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use NS\AceSonataDoctrineORMAdminBundle\DependencyInjection\CompilerPass\OverrideModelManagerCompilerPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class NSSonataDoctrineORMAdminBundle extends Bundle
{
    /**
     * @inheritDoc
     */
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->addCompilerPass(new OverrideModelManagerCompilerPass());
    }

    /**
     * @return string
     */
    public function getParent()
    {
        return 'SonataDoctrineORMAdminBundle';
    }
}
