<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\KluczePracownikowRepository")
 */
class KluczePracownikow
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $employee_key;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getEmployeeKey()
    {
        return $this->employee_key;
    }

    /**
     * @param mixed $employee_key
     */
    public function setEmployeeKey($employee_key): void
    {
        $this->employee_key = $employee_key;
    }


}
