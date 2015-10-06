<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 06/10/2015
 * Time: 21:37
 */
namespace BMCE\Dao;

interface IAssuranceDao {
    public function addClient(\Client $client);
    public function getClient($id);
}

?>