<?php

namespace FctBundle\Entity;

/**
 * Ciclo
 */
class Ciclo
{
    /**
     * @var integer
     */
    private $codCiclo;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $grado;

    /**
     * @var string
     */
    private $horasfct;


    /**
     * Get codCiclo
     *
     * @return integer
     */
    public function getCodCiclo()
    {
        return $this->codCiclo;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Ciclo
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set grado
     *
     * @param string $grado
     *
     * @return Ciclo
     */
    public function setGrado($grado)
    {
        $this->grado = $grado;

        return $this;
    }

    /**
     * Get grado
     *
     * @return string
     */
    public function getGrado()
    {
        return $this->grado;
    }

    /**
     * Set horasfct
     *
     * @param string $horasfct
     *
     * @return Ciclo
     */
    public function setHorasfct($horasfct)
    {
        $this->horasfct = $horasfct;

        return $this;
    }

    /**
     * Get horasfct
     *
     * @return string
     */
    public function getHorasfct()
    {
        return $this->horasfct;
    }
}

