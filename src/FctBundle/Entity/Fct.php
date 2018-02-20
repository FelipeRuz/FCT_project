<?php

namespace FctBundle\Entity;

/**
 * Fct
 */
class Fct
{
    /**
     * @var string
     */
    private $nifProf;

    /**
     * @var string
     */
    private $cifEmp;

    /**
     * @var string
     */
    private $nifAlu;

    /**
     * @var string
     */
    private $anio;


    /**
     * Set nifProf
     *
     * @param string $nifProf
     *
     * @return Fct
     */
    public function setNifProf($nifProf)
    {
        $this->nifProf = $nifProf;

        return $this;
    }

    /**
     * Get nifProf
     *
     * @return string
     */
    public function getNifProf()
    {
        return $this->nifProf;
    }

    /**
     * Set cifEmp
     *
     * @param string $cifEmp
     *
     * @return Fct
     */
    public function setCifEmp($cifEmp)
    {
        $this->cifEmp = $cifEmp;

        return $this;
    }

    /**
     * Get cifEmp
     *
     * @return string
     */
    public function getCifEmp()
    {
        return $this->cifEmp;
    }

    /**
     * Set nifAlu
     *
     * @param string $nifAlu
     *
     * @return Fct
     */
    public function setNifAlu($nifAlu)
    {
        $this->nifAlu = $nifAlu;

        return $this;
    }

    /**
     * Get nifAlu
     *
     * @return string
     */
    public function getNifAlu()
    {
        return $this->nifAlu;
    }

    /**
     * Set anio
     *
     * @param string $anio
     *
     * @return Fct
     */
    public function setAnio($anio)
    {
        $this->anio = $anio;

        return $this;
    }

    /**
     * Get anio
     *
     * @return string
     */
    public function getAnio()
    {
        return $this->anio;
    }
}
