<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\WynikiBadanRepository")
 */
class WynikiBadan
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $pracownik_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $pacjent_id;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $result;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $medicine;

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
    public function getPracownikId()
    {
        return $this->pracownik_id;
    }

    /**
     * @param mixed $pracownik_id
     */
    public function setPracownikId($pracownik_id): void
    {
        $this->pracownik_id = $pracownik_id;
    }

    /**
     * @return mixed
     */
    public function getPacjentId()
    {
        return $this->pacjent_id;
    }

    /**
     * @param mixed $pacjent_id
     */
    public function setPacjentId($pacjent_id): void
    {
        $this->pacjent_id = $pacjent_id;
    }

    /**
     * @return mixed
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param mixed $result
     */
    public function setResult($result): void
    {
        $this->result = $result;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getMedicine()
    {
        return $this->medicine;
    }

    /**
     * @param mixed $medicine
     */
    public function setMedicine($medicine): void
    {
        $this->medicine = $medicine;
    }





}
