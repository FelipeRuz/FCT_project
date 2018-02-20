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
    private $codFct;

    /**
     * @var \DateTime
     */
    private $fecha;

    /**
     * @var \FctBundle\Entity\Alumno
     */
    private $dniAlumno;

    /**
     * @var \FctBundle\Entity\Empresa
     */
    private $cifEmpresa;

    /**
     * @var \FctBundle\Entity\Profesor
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
     * @param \FctBundle\Entity\Alumno $dniAlumno
     *
     * @return Fct
     */
    public function setDniAlumno(\FctBundle\Entity\Alumno $dniAlumno = null)
    {
        $this->dniAlumno = $dniAlumno;

        return $this;
    }

    /**
     * Get dniAlumno
     *
     * @return \FctBundle\Entity\Alumno
     */
    public function getDniAlumno()
    {
        return $this->dniAlumno;
    }

    /**
     * Set cifEmpresa
     *
     * @param \FctBundle\Entity\Empresa $cifEmpresa
     *
     * @return Fct
     */
    public function setCifEmpresa(\FctBundle\Entity\Empresa $cifEmpresa = null)
    {
        $this->cifEmpresa = $cifEmpresa;

        return $this;
    }

    /**
     * Get cifEmpresa
     *
     * @return \FctBundle\Entity\Empresa
     */
    public function getCifEmpresa()
    {
        return $this->cifEmpresa;
    }

    /**
     * Set dniProf
     *
     * @param \FctBundle\Entity\Profesor $dniProf
     *
     * @return Fct
     */
    public function setDniProf(\FctBundle\Entity\Profesor $dniProf = null)
    {
        $this->dniProf = $dniProf;

        return $this;
    }

    /**
     * Get dniProf
     *
     * @return \FctBundle\Entity\Profesor
     */
    public function getDniProf()
    {
        return $this->dniProf;
    }
}

