<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PlacowkiMedyczneRepository")
 */
class PlacowkiMedyczne
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $nazwa;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $oddzialy;
}
