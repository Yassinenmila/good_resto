<?php
namespace App\Model;

class User {
    
    public function __construct(private int $id,private string $username,private string $email,private string $password,private string $role,private bool $is_active){}

    public function getId(): int {
        return $this->id;
    }
    public function getUsername(): string {
        return $this->username;
    }
    public function getEmail(): string {
        return $this->email;
    }
    public function getPassword(): string {
        return $this->password;
    }
    public function getRole(): string {
        return $this->role;
    }
    public function getIsActive(): bool {
        return $this->is_active;
    }
}