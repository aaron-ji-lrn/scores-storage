<?php

namespace App\Entity;

use App\Repository\ResponsePrimaryScoreRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ResponsePrimaryScoreRepository::class)
 * @ORM\Table(name="response_primary_scores")
 */
class ResponsePrimaryScore
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100, unique=true)
     */
    private $response_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $score_id;

    /**
     * @ORM\OneToOne(targetEntity=ResponseScore::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(name="score_id", referencedColumnName="id", nullable=false)
     */
    private $responseScore;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getResponseId(): ?string
    {
        return $this->response_id;
    }

    public function setResponseId(string $response_id): self
    {
        $this->response_id = $response_id;

        return $this;
    }

    public function getScoreId(): ?int
    {
        return $this->score_id;
    }

    public function setScoreId(int $score_id): self
    {
        $this->score_id = $score_id;

        return $this;
    }

    public function getResponseScore(): ?ResponseScore
    {
        return $this->responseScore;
    }

    public function setResponseScore(ResponseScore $responseScore): self
    {
        $this->responseScore = $responseScore;

        return $this;
    }
}
