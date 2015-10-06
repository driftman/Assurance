<?php

/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 06/10/2015
 * Time: 22:24
 */
namespace Bmce\Metier;
use IAssuranceMetier;
use Bmce\Dao\IAssuranceDao;

class AssuranceMetierImpl implements IAssuranceMetier
{
    //AUTOWIRED !!
    private $dao;

    public function __construct(IAssuranceDao $dao)
    {
        $this->dao = dao;
    }
    function addClient($client=null)
    {
        // On va utiliser la variable $dao qui est Transactionnal !

        $this->dao->addClient($client);
    }

    function getClient($id)
    {
        // Même chose ici !

        $this->dao->getClient($id=0);
    }

}