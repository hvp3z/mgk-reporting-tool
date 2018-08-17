<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\InterventionRepository")
 */
class Intervention
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Reporting", inversedBy="interventions")
     * @ORM\JoinColumn(nullable=false)
     */
    private $reporting;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getReporting(): ?Reporting
    {
        return $this->reporting;
    }

    public function setReporting(?Reporting $reporting): self
    {
        $this->reporting = $reporting;

        return $this;
    }
}
