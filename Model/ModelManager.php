<?php
/**
 * Created by PhpStorm.
 * User: gnat
 * Date: 13/05/16
 * Time: 9:12 AM
 */

namespace NS\AceSonataDoctrineORMAdminBundle\Model;

use NS\SecurityBundle\Doctrine\SecuredEntityRepository;
use Sonata\DoctrineORMAdminBundle\Model\ModelManager as BaseModelManager;
use Sonata\DoctrineORMAdminBundle\Datagrid\ProxyQuery;

class ModelManager
{
    /**
     * {@inheritdoc}
     */
    public function createQuery($class, $alias = 'o')
    {
        $repository = $this->getEntityManager($class)->getRepository($class);

        if ($repository instanceof SecuredEntityRepository) {
            return new ProxyQuery($repository->createSecuredQueryBuilder($alias));
        }

        return new ProxyQuery($repository->createQueryBuilder($alias));
    }
}
