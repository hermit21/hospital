<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DanePracownikowRepository")
 */
class DanePracownikow
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;


    private $pracownik_id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $placowka;

    /**
     * @ORM\Column(type="string", length=150)
     */
    private $opis;

    /**
     * @ORM\Column(type="string", length=80)
     */
    private $photo;

    /**
     * @ORM\Column(type="string", length=40)
     */
    private $specjalizacja;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $staz;

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
    public function getPlacowka()
    {
        return $this->placowka;
    }

    /**
     * @param mixed $placowka
     */
    public function setPlacowka($placowka): void
    {
        $this->placowka = $placowka;
    }

    /**
     * @return mixed
     */
    public function getOpis()
    {
        return $this->opis;
    }

    /**
     * @param mixed $opis
     */
    public function setOpis($opis): void
    {
        $this->opis = $opis;
    }

    /**
     * @return mixed
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @param mixed $photo
     */
    public function setPhoto($photo): void
    {
        $this->photo = $photo;
    }

    /**
     * @return mixed
     */
    public function getSpecjalizacja()
    {
        return $this->specjalizacja;
    }

    /**
     * @param mixed $specjalizacja
     */
    public function setSpecjalizacja($specjalizacja): void
    {
        $this->specjalizacja = $specjalizacja;
    }

    /**
     * @return mixed
     */
    public function getStaz()
    {
        return $this->staz;
    }

    /**
     * @param mixed $staz
     */
    public function setStaz($staz): void
    {
        $this->staz = $staz;
    }




}
