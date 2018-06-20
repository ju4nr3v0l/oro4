<?php

namespace App\Repository;

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Mapping;

/**
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ImplementacionDetalleRepository extends \Doctrine\ORM\EntityRepository
{
    public function listaDetalle($codigoImplementacion)
    {
        $em = $this->getEntityManager();
        $qb = $em->createQueryBuilder()->from("App:ImplementacionDetalle", "id")
            ->select("id,it,ig")
            ->join("id.implementacionGrupoRel", "ig")
            ->join("id.implementacionTemaRel", "it")
            ->where("id.codigoImplementacionFK = {$codigoImplementacion}")
            ->orderBy("id.codigoImplementacionGrupoFK", "ASC");

        return $qb->getQuery()->getResult();
    }

}