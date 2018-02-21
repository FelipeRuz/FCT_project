<?php

namespace FctBundle\Entity;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Profesor
 */
class Profesor implements UserInterface
{
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
    private $rol;

    /**
     * @var string
     */
    private $nick;

    /**
     * @var string
     */
    private $pass;

    /**
     * @var string
     */
    private $tlf;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $foto;

    //Metodos a implementar para la seguridad
    
    //AUTH
    public function getUsername() {
        return $this->nick;
    }
    
    public function getSalt() {
        return null;
    }
    
    public function getRoles() {
        return array($this->getRol());
    }
    
    public function eraseCredentials() {
        
    }


    //ENDAUTH
    
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
     * @return Profesor
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
     * @return Profesor
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
     * @return Profesor
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
     * Set rol
     *
     * @param string $rol
     *
     * @return Profesor
     */
    public function setRol($rol)
    {
        $this->rol = $rol;

        return $this;
    }

    /**
     * Get rol
     *
     * @return string
     */
    public function getRol()
    {
        return $this->rol;
    }

    /**
     * Set nick
     *
     * @param string $nick
     *
     * @return Profesor
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
     * Set pass
     *
     * @param string $pass
     *
     * @return Profesor
     */
    public function setPass($pass)
    {
        $this->pass = $pass;
        
        return $this;
    }

    /**
     * Get pass
     *
     * @return string
     */
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * Set tlf
     *
     * @param string $tlf
     *
     * @return Profesor
     */
    public function setTlf($tlf)
    {
        $this->tlf = $tlf;

        return $this;
    }

    /**
     * Get tlf
     *
     * @return string
     */
    public function getTlf()
    {
        return $this->tlf;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Profesor
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
     * @return Profesor
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

