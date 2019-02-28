<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Cocur\Slugify\Slugify;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PropertyRepository")
 */
class Property
{
    const HEAT = [
        0 => 'Electrique',
        1 =>'Gaz'
    ];

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $property_title;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $property_description;

    /**
     * @ORM\Column(type="integer")
     */
    private $property_area;

    /**
     * @ORM\Column(type="integer")
     */
    private $property_rooms;

    /**
     * @ORM\Column(type="integer")
     */
    private $property_badrooms;

    /**
     * @ORM\Column(type="integer")
     */
    private $property_floor;

    /**
     * @ORM\Column(type="integer")
     */
    private $property_price;

    /**
     * @ORM\Column(type="integer")
     */
    private $property_heat;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $property_city;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $property_address;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $property_postal_code;

    /**
     * @ORM\Column(type="datetime")
     */
    private $property_created_at;

    /**
     * @ORM\Column(type="boolean", options={"default": false})
     */
    private $property_sold = false;

    public function __construct()
    {
        $this->property_created_at = new \DateTime();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPropertyTitle(): ?string
    {
        return $this->property_title;
    }

    public function getSlug(): String
    {
        return (new Slugify())->slugify($this->getPropertyTitle());
    }

    public function setPropertyTitle(string $property_title): self
    {
        $this->property_title = $property_title;

        return $this;
    }

    public function getPropertyDescription(): ?string
    {
        return $this->property_description;
    }

    public function setPropertyDescription(?string $property_description): self
    {
        $this->property_description = $property_description;

        return $this;
    }

    public function getPropertyArea(): ?int
    {
        return $this->property_area;
    }

    public function setPropertyArea(int $property_area): self
    {
        $this->property_area = $property_area;

        return $this;
    }

    public function getPropertyRooms(): ?int
    {
        return $this->property_rooms;
    }

    public function setPropertyRooms(int $property_rooms): self
    {
        $this->property_rooms = $property_rooms;

        return $this;
    }

    public function getPropertyBadrooms(): ?int
    {
        return $this->property_badrooms;
    }

    public function setPropertyBadrooms(int $property_badrooms): self
    {
        $this->property_badrooms = $property_badrooms;

        return $this;
    }

    public function getPropertyFloor(): ?int
    {
        return $this->property_floor;
    }

    public function setPropertyFloor(int $property_floor): self
    {
        $this->property_floor = $property_floor;

        return $this;
    }

    public function getPropertyPrice(): ?int
    {
        return $this->property_price;
    }

    public function getFormattedPrice()
    {
        return number_format($this->getPropertyPrice(), 0, '', ' ');
    }

    public function setPropertyPrice(int $property_price): self
    {
        $this->property_price = $property_price;

        return $this;
    }

    public function getPropertyHeat(): ?int
    {
        return $this->property_heat;
    }

    public function getHeatType(): String
    {
        return self::HEAT[$this->getPropertyHeat()];
    }
    public function setPropertyHeat(int $property_heat): self
    {
        $this->property_heat = $property_heat;

        return $this;
    }

    public function getPropertyCity(): ?string
    {
        return $this->property_city;
    }

    public function setPropertyCity(string $property_city): self
    {
        $this->property_city = $property_city;

        return $this;
    }

    public function getPropertyAddress(): ?string
    {
        return $this->property_address;
    }

    public function setPropertyAddress(string $property_address): self
    {
        $this->property_address = $property_address;

        return $this;
    }

    public function getPropertyPostalCode(): ?string
    {
        return $this->property_postal_code;
    }

    public function setPropertyPostalCode(string $property_postal_code): self
    {
        $this->property_postal_code = $property_postal_code;

        return $this;
    }

    public function getPropertySold(): ?bool
    {
        return $this->property_sold;
    }

    public function setPropertySold(bool $property_sold): self
    {
        $this->property_sold = $property_sold;

        return $this;
    }

    public function getPropertyCreatedAt(): ?\DateTimeInterface
    {
        return $this->property_created_at;
    }

    public function setPropertyCreatedAt(\DateTimeInterface $property_created_at): self
    {
        $this->property_created_at = $property_created_at;

        return $this;
    }
}
