<?php

namespace FCTBundle\Entity;

/**
 * Fct
 */
class Fct
{
    /**
     * @var string
     */
    private $codFct;

    /**
     * @var \DateTime
     */
    private $fecha;

    /**
     * @var \FCTBundle\Entity\Alumno
     */
    private $dniAlumno;

    /**
     * @var \FCTBundle\Entity\Empresa
     */
    private $cifEmpresa;

    /**
     * @var \FCTBundle\Entity\Profesor
     */
    private $dniProf;


    /**
     * Get codFct
     *
     * @return string
     */
    public function getCodFct()
    {
        return $this->codFct;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Fct
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set dniAlumno
     *
     * @param \FCTBundle\Entity\Alumno $dniAlumno
     *
     * @return Fct
     */
    public function setDniAlumno(\FCTBundle\Entity\Alumno $dniAlumno = null)
    {
        $this->dniAlumno = $dniAlumno;

        return $this;
    }

    /**
     * Get dniAlumno
     *
     * @return \FCTBundle\Entity\Alumno
     */
    public function getDniAlumno()
    {
        return $this->dniAlumno;
    }

    /**
     * Set cifEmpresa
     *
     * @param \FCTBundle\Entity\Empresa $cifEmpresa
     *
     * @return Fct
     */
    public function setCifEmpresa(\FCTBundle\Entity\Empresa $cifEmpresa = null)
    {
        $this->cifEmpresa = $cifEmpresa;

        return $this;
    }

    /**
     * Get cifEmpresa
     *
     * @return \FCTBundle\Entity\Empresa
     */
    public function getCifEmpresa()
    {
        return $this->cifEmpresa;
    }

    /**
     * Set dniProf
     *
     * @param \FCTBundle\Entity\Profesor $dniProf
     *
     * @return Fct
     */
    public function setDniProf(\FCTBundle\Entity\Profesor $dniProf = null)
    {
        $this->dniProf = $dniProf;

        return $this;
    }

    /**
     * Get dniProf
     *
     * @return \FCTBundle\Entity\Profesor
     */
    public function getDniProf()
    {
        return $this->dniProf;
    }
}

