<?php
/**
 * Created by PhpStorm.
 * User: avera
 * Date: 4/12/17
 * Time: 11:10 AM
 */

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
* Caso
*
* @ORM\Table(name="implementacion")
* @ORM\Entity(repositoryClass="App\Repository\ImplementacionRepository")
*/
class Implementacion
{
    /**
     * @var int
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(name="codigo_implementacion_pk", type="integer", unique=true)
     */
    private $codigoImplementacionPk;

    /**
     * @ORM\Column(name="codigo_cliente_fk", type="integer", nullable= TRUE)
     */
    private $codigoClienteFk;

    /**
     * @ORM\ManyToOne(targetEntity="Cliente", inversedBy="implementacionesClienteRel")
     * @ORM\JoinColumn(name="codigo_cliente_fk", referencedColumnName="codigo_cliente_pk")
     */
    private $clienteRel;

    /**
     * @return int
     */
    public function getCodigoImplementacionPk(): int
    {
        return $this->codigoImplementacionPk;
    }

    /**
     * @param int $codigoImplementacionPk
     */
    public function setCodigoImplementacionPk(int $codigoImplementacionPk): void
    {
        $this->codigoImplementacionPk = $codigoImplementacionPk;
    }

    /**
     * @return mixed
     */
    public function getCodigoClienteFk()
    {
        return $this->codigoClienteFk;
    }

    /**
     * @param mixed $codigoClienteFk
     */
    public function setCodigoClienteFk($codigoClienteFk): void
    {
        $this->codigoClienteFk = $codigoClienteFk;
    }

    /**
     * @return mixed
     */
    public function getClienteRel()
    {
        return $this->clienteRel;
    }

    /**
     * @param mixed $clienteRel
     */
    public function setClienteRel($clienteRel): void
    {
        $this->clienteRel = $clienteRel;
    }



}
