<?php

namespace FctBundle\Entity;

/**
 * Fct
 */
class Fct
{
    /**
     * @var integer
     */
    private $codFct;

    /**
     * @var \DateTime
     */
    private $fecha;

    /**
     * @var \FctBundle\Entity\Alumno
     */
    private $idAlumno;

    /**
     * @var \FctBundle\Entity\Empresa
     */
    private $idEmpresa;

    /**
     * @var \FctBundle\Entity\Profesor
     */
    private $idProfesor;


    /**
     * Get codFct
     *
     * @return integer
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
     * Set idAlumno
     *
     * @param \FctBundle\Entity\Alumno $idAlumno
     *
     * @return Fct
     */
    public function setIdAlumno(\FctBundle\Entity\Alumno $idAlumno = null)
    {
        $this->idAlumno = $idAlumno;

        return $this;
    }

    /**
     * Get idAlumno
     *
     * @return \FctBundle\Entity\Alumno
     */
    public function getIdAlumno()
    {
        return $this->idAlumno;
    }

    /**
     * Set idEmpresa
     *
     * @param \FctBundle\Entity\Empresa $idEmpresa
     *
     * @return Fct
     */
    public function setIdEmpresa(\FctBundle\Entity\Empresa $idEmpresa = null)
    {
        $this->idEmpresa = $idEmpresa;

        return $this;
    }

    /**
     * Get idEmpresa
     *
     * @return \FctBundle\Entity\Empresa
     */
    public function getIdEmpresa()
    {
        return $this->idEmpresa;
    }

    /**
     * Set idProfesor
     *
     * @param \FctBundle\Entity\Profesor $idProfesor
     *
     * @return Fct
     */
    public function setIdProfesor(\FctBundle\Entity\Profesor $idProfesor = null)
    {
        $this->idProfesor = $idProfesor;

        return $this;
    }

    /**
     * Get idProfesor
     *
     * @return \FctBundle\Entity\Profesor
     */
    public function getIdProfesor()
    {
        return $this->idProfesor;
    }
}

