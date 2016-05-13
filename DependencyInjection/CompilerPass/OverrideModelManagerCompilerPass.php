<?php
/**
 * Created by PhpStorm.
 * User: gnat
 * Date: 12/05/16
 * Time: 5:23 PM
 */

namespace NS\AceSonataDoctrineORMAdminBundle\DependencyInjection\CompilerPass;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class OverrideModelManagerCompilerPass implements CompilerPassInterface
{
    /**
     * @inheritDoc
     */
    public function process(ContainerBuilder $container)
    {
        $definition = $container->getDefinition('sonata.admin.manager.orm');
        $definition->setClass('NS\AceSonataDoctrineORMAdminBundle\Model\ModelManager');
    }

}
