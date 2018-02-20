<?php

namespace FctBundle\Entity;

/**
 * Usuario
 */
class Usuario
{
    /**
     * @var string
     */
    private $nifUser;

    /**
     * @var string
     */
    private $nombreUser;

    /**
     * @var string
     */
    private $apellido1User;

    /**
     * @var string
     */
    private $apellido2User;

    /**
     * @var string
     */
    private $fotografiaUser;

    /**
     * @var string
     */
    private $nicknameUser;

    /**
     * @var string
     */
    private $telfFijoUser;

    /**
     * @var string
     */
    private $telfMovilUser;

    /**
     * @var string
     */
    private $emailUser;

    /**
     * @var string
     */
    private $passwordUser;

    /**
     * @var string
     */
    private $rolUser;


    /**
     * Get nifUser
     *
     * @return string
     */
    public function getNifUser()
    {
        return $this->nifUser;
    }

    /**
     * Set nombreUser
     *
     * @param string $nombreUser
     *
     * @return Usuario
     */
    public function setNombreUser($nombreUser)
    {
        $this->nombreUser = $nombreUser;

        return $this;
    }

    /**
     * Get nombreUser
     *
     * @return string
     */
    public function getNombreUser()
    {
        return $this->nombreUser;
    }

    /**
     * Set apellido1User
     *
     * @param string $apellido1User
     *
     * @return Usuario
     */
    public function setApellido1User($apellido1User)
    {
        $this->apellido1User = $apellido1User;

        return $this;
    }

    /**
     * Get apellido1User
     *
     * @return string
     */
    public function getApellido1User()
    {
        return $this->apellido1User;
    }

    /**
     * Set apellido2User
     *
     * @param string $apellido2User
     *
     * @return Usuario
     */
    public function setApellido2User($apellido2User)
    {
        $this->apellido2User = $apellido2User;

        return $this;
    }

    /**
     * Get apellido2User
     *
     * @return string
     */
    public function getApellido2User()
    {
        return $this->apellido2User;
    }

    /**
     * Set fotografiaUser
     *
     * @param string $fotografiaUser
     *
     * @return Usuario
     */
    public function setFotografiaUser($fotografiaUser)
    {
        $this->fotografiaUser = $fotografiaUser;

        return $this;
    }

    /**
     * Get fotografiaUser
     *
     * @return string
     */
    public function getFotografiaUser()
    {
        return $this->fotografiaUser;
    }

    /**
     * Set nicknameUser
     *
     * @param string $nicknameUser
     *
     * @return Usuario
     */
    public function setNicknameUser($nicknameUser)
    {
        $this->nicknameUser = $nicknameUser;

        return $this;
    }

    /**
     * Get nicknameUser
     *
     * @return string
     */
    public function getNicknameUser()
    {
        return $this->nicknameUser;
    }

    /**
     * Set telfFijoUser
     *
     * @param string $telfFijoUser
     *
     * @return Usuario
     */
    public function setTelfFijoUser($telfFijoUser)
    {
        $this->telfFijoUser = $telfFijoUser;

        return $this;
    }

    /**
     * Get telfFijoUser
     *
     * @return string
     */
    public function getTelfFijoUser()
    {
        return $this->telfFijoUser;
    }

    /**
     * Set telfMovilUser
     *
     * @param string $telfMovilUser
     *
     * @return Usuario
     */
    public function setTelfMovilUser($telfMovilUser)
    {
        $this->telfMovilUser = $telfMovilUser;

        return $this;
    }

    /**
     * Get telfMovilUser
     *
     * @return string
     */
    public function getTelfMovilUser()
    {
        return $this->telfMovilUser;
    }

    /**
     * Set emailUser
     *
     * @param string $emailUser
     *
     * @return Usuario
     */
    public function setEmailUser($emailUser)
    {
        $this->emailUser = $emailUser;

        return $this;
    }

    /**
     * Get emailUser
     *
     * @return string
     */
    public function getEmailUser()
    {
        return $this->emailUser;
    }

    /**
     * Set passwordUser
     *
     * @param string $passwordUser
     *
     * @return Usuario
     */
    public function setPasswordUser($passwordUser)
    {
        $this->passwordUser = $passwordUser;

        return $this;
    }

    /**
     * Get passwordUser
     *
     * @return string
     */
    public function getPasswordUser()
    {
        return $this->passwordUser;
    }

    /**
     * Set rolUser
     *
     * @param string $rolUser
     *
     * @return Usuario
     */
    public function setRolUser($rolUser)
    {
        $this->rolUser = $rolUser;

        return $this;
    }

    /**
     * Get rolUser
     *
     * @return string
     */
    public function getRolUser()
    {
        return $this->rolUser;
    }
}
