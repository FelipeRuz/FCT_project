<?php

namespace FCTBundle\Entity;

/**
 * Usuario
 */
class Usuario
{
    /**
     * @var string
     */
    private $dni;

    /**
     * @var string
     */
    private $tipo;

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
     * Get dni
     *
     * @return string
     */
    public function getDni()
    {
        return $this->dni;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     *
     * @return Usuario
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Usuario
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
     * @return Usuario
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
     * @return Usuario
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
     * @return Usuario
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
     * Set tlffijo
     *
     * @param string $tlffijo
     *
     * @return Usuario
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
     * @return Usuario
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
     * @return Usuario
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
     * @return Usuario
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
}

