<?php

namespace FctBundle\Entity;

/**
 * Alumno
 */
class Alumno
{
    /**
     * @var integer
     */
    private $idAlumno;

    /**
     * @var string
     */
    private $dni;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $ape1;

    /**
     * @var string
     */
    private $ape2;

    /**
     * @var string
     */
    private $nick;

    /**
     * @var string
     */
    private $direccion;

    /**
     * @var string
     */
    private $poblacion;

    /**
     * @var string
     */
    private $cp;

    /**
     * @var string
     */
    private $provincia;

    /**
     * @var string
     */
    private $tlffijo;

    /**
     * @var string
     */
    private $tlfmovil;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $foto;

    /**
     * @var \FctBundle\Entity\Ciclo
     */
    private $codCiclo;


    /**
     * Get idAlumno
     *
     * @return integer
     */
    public function getIdAlumno()
    {
        return $this->idAlumno;
    }

    /**
     * Set dni
     *
     * @param string $dni
     *
     * @return Alumno
     */
    public function setDni($dni)
    {
        $this->dni = $dni;

        return $this;
    }

    /**
     * Get dni
     *
     * @return string
     */
    public function getDni()
    {
        return $this->dni;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Alumno
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
     * Set ape1
     *
     * @param string $ape1
     *
     * @return Alumno
     */
    public function setApe1($ape1)
    {
        $this->ape1 = $ape1;

        return $this;
    }

    /**
     * Get ape1
     *
     * @return string
     */
    public function getApe1()
    {
        return $this->ape1;
    }

    /**
     * Set ape2
     *
     * @param string $ape2
     *
     * @return Alumno
     */
    public function setApe2($ape2)
    {
        $this->ape2 = $ape2;

        return $this;
    }

    /**
     * Get ape2
     *
     * @return string
     */
    public function getApe2()
    {
        return $this->ape2;
    }

    /**
     * Set nick
     *
     * @param string $nick
     *
     * @return Alumno
     */
    public function setNick($nick)
    {
        $this->nick = $nick;

        return $this;
    }

    /**
     * Get nick
     *
     * @return string
     */
    public function getNick()
    {
        return $this->nick;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     *
     * @return Alumno
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set poblacion
     *
     * @param string $poblacion
     *
     * @return Alumno
     */
    public function setPoblacion($poblacion)
    {
        $this->poblacion = $poblacion;

        return $this;
    }

    /**
     * Get poblacion
     *
     * @return string
     */
    public function getPoblacion()
    {
        return $this->poblacion;
    }

    /**
     * Set cp
     *
     * @param string $cp
     *
     * @return Alumno
     */
    public function setCp($cp)
    {
        $this->cp = $cp;

        return $this;
    }

    /**
     * Get cp
     *
     * @return string
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * Set provincia
     *
     * @param string $provincia
     *
     * @return Alumno
     */
    public function setProvincia($provincia)
    {
        $this->provincia = $provincia;

        return $this;
    }

    /**
     * Get provincia
     *
     * @return string
     */
    public function getProvincia()
    {
        return $this->provincia;
    }

    /**
     * Set tlffijo
     *
     * @param string $tlffijo
     *
     * @return Alumno
     */
    public function setTlffijo($tlffijo)
    {
        $this->tlffijo = $tlffijo;

        return $this;
    }

    /**
     * Get tlffijo
     *
     * @return string
     */
    public function getTlffijo()
    {
        return $this->tlffijo;
    }

    /**
     * Set tlfmovil
     *
     * @param string $tlfmovil
     *
     * @return Alumno
     */
    public function setTlfmovil($tlfmovil)
    {
        $this->tlfmovil = $tlfmovil;

        return $this;
    }

    /**
     * Get tlfmovil
     *
     * @return string
     */
    public function getTlfmovil()
    {
        return $this->tlfmovil;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Alumno
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set foto
     *
     * @param string $foto
     *
     * @return Alumno
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;

        return $this;
    }

    /**
     * Get foto
     *
     * @return string
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * Set codCiclo
     *
     * @param \FctBundle\Entity\Ciclo $codCiclo
     *
     * @return Alumno
     */
    public function setCodCiclo(\FctBundle\Entity\Ciclo $codCiclo = null)
    {
        $this->codCiclo = $codCiclo;

        return $this;
    }

    /**
     * Get codCiclo
     *
     * @return \FctBundle\Entity\Ciclo
     */
    public function getCodCiclo()
    {
        return $this->codCiclo;
    }
}

