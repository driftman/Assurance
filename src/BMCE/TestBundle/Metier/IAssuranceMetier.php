<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 06/10/2015
 * Time: 22:23
 */
namespace Bmce\Metier;

interface IAssuranceMetier {
    function addClient($client);
    function getClient($id);
}

?>