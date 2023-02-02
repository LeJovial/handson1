<?php

namespace App\Entity;

use App\Repository\AnalysisRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AnalysisRepository::class)]
class Analysis
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $URL = null;

    #[ORM\Column]
    private ?int $Size = null;

    #[ORM\Column]
    private ?int $Nodes = null;

    #[ORM\Column]
    private ?int $Score = null;

    #[ORM\Column(length: 10)]
    private ?string $EcoIndex = null;

    #[ORM\Column]
    private ?int $Request = null;

    #[ORM\Column]
    private ?int $WaterConsumption = null;

    #[ORM\Column]
    private ?int $GasConsumption = null;

    #[ORM\Column(length: 255)]
    private ?string $Host = null;

    //getters & setters definition for the Analysis table
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getURL(): ?string
    {
        return $this->URL;
    }

    public function setURL(string $URL): self
    {
        $this->URL = $URL;

        return $this;
    }

    public function getSize(): ?int
    {
        return $this->Size;
    }

    public function setSize(int $Size): self
    {
        $this->Size = $Size;

        return $this;
    }

    public function getNodes(): ?int
    {
        return $this->Nodes;
    }

    public function setNodes(int $Nodes): self
    {
        $this->Nodes = $Nodes;

        return $this;
    }

    public function getScore(): ?int
    {
        return $this->Score;
    }

    public function setScore(int $Score): self
    {
        $this->Score = $Score;

        return $this;
    }

    public function getEcoIndex(): ?string
    {
        return $this->EcoIndex;
    }

    public function setEcoIndex(string $EcoIndex): self
    {
        $this->EcoIndex = $EcoIndex;

        return $this;
    }

    public function getRequest(): ?int
    {
        return $this->Request;
    }

    public function setRequest(int $Request): self
    {
        $this->Request = $Request;

        return $this;
    }

    public function getWaterConsumption(): ?int
    {
        return $this->WaterConsumption;
    }

    public function setWaterConsumption(int $WaterConsumption): self
    {
        $this->WaterConsumption = $WaterConsumption;

        return $this;
    }

    public function getGasConsumption(): ?int
    {
        return $this->GasConsumption;
    }

    public function setGasConsumption(int $GasConsumption): self
    {
        $this->GasConsumption = $GasConsumption;

        return $this;
    }

    public function getHost(): ?string
    {
        return $this->Host;
    }

    public function setHost(string $Host): self
    {
        $this->Host = $Host;

        return $this;
    }
}
