<?php

declare(strict_types=1);

/**
 *
 *
 * @date   13/03/18 09:23
 *
 * @author Fernando Petry <fernando.petry@autoavaliar.com.br>
 */
class PeopleRegisterHandler
{
    /** @var \PeopleRegister */
    private $people;

    /**
     * @param \PeopleRegister $people
     */
    public function __construct(\PeopleRegister $people) { $this->people = $people; }

    public function handler()
    {
        $people = People::findFirst(1);
        $people->delete();

        $people        = new People();
        $people->name  = $this->people->getName();
        $people->email = $this->people->getEmail();
        $people->save();

        return $people->id;
    }

}
