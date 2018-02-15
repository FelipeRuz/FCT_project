<?php

namespace FCTBundle\Entity;

/**
 * Empresa
 */
class Empresa
{
    /**
     * @var string
     */
    private $cif;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $nomtutor;

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
     * Get cif
     *
     * @return string
     */
    public function getCif()
    {
        return $this->cif;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Empresa
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
     * Set nomtutor
     *
     * @param string $nomtutor
     *
     * @return Empresa
     */
    public function setNomtutor($nomtutor)
    {
        $this->nomtutor = $nomtutor;

        return $this;
    }

    /**
     * Get nomtutor
     *
     * @return string
     */
    public function getNomtutor()
    {
        return $this->nomtutor;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     *
     * @return Empresa
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
     * @return Empresa
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
     * @return Empresa
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
     * @return Empresa
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
     * @return Empresa
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
     * @return Empresa
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
     * @return Empresa
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
}

