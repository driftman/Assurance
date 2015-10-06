<?php

/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 06/10/2015
 * Time: 21:53
 */

namespace Bmce\Dao;
use Doctrine\ORM\EntityManager;
use IAssuranceDao;

class AssuranceDAOImpl implements IAssuranceDao
{
    // Transactionnal !
    private $em;

    public function __construct(EntityManager $em)
    {
        $this->em = em;
    }
    public function addClient($client=null)
    {
        // TODO: Implement addClient() method.
        return "from addClient() ";
    }

    public function getClient($id=0)
    {
        // TODO: Implement getClient() method.
        return "from getClient() ";
    }
}