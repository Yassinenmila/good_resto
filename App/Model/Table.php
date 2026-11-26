<?php 

namespace App\Model;

Class Table {

    public function __construct(private int $id, private string $number, private int $capacity, private bool $is_active) {}


    public function getId(): int {
        return $this->id;
    }
    public function getNumber(): string {
        return $this->number;
    }
    public function getCapacity(): int {
        return $this->capacity;
    }
    public function getIsActive(): bool {
        return $this->is_active;
    }

}