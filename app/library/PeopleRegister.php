<?php

declare(strict_types=1);

/**
 *
 *
 * @date   13/03/18 09:21
 *
 * @author Fernando Petry <fernando.petry@autoavaliar.com.br>
 */
class PeopleRegister
{
    private $name;
    private $email;

    public function __construct($name, $email)
    {
        $this->name  = $name;
        $this->email = $email;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getEmail()
    {
        return $this->email;
    }
}
